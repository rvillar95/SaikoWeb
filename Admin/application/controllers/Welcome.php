<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("indexModel");
    }

    public function index()
    {
        $this->load->view('index');
    }

    public function iniciarSesion()
    {
        $usuario = $this->input->post("usuario");
        $clave = $this->input->post("clave");
        $user = $this->indexModel->inicio($usuario, $clave);
        if (count($user) > 0) {
            $this->session->set_userdata("administrador", $user);
            echo json_encode(array("msg" => "administrador"));
        } else {
            echo json_encode(array("msg" => "nada"));
        }
    }

    public function administrador()
    {
        if ($this->session->userdata("administrador")) {
            $this->load->view('Administrador');
        } else {
            $this->load->view('index');
        }
    }

    public function carta()
    {
        if ($this->session->userdata("administrador")) {
            $this->load->view('Carta');
        } else {
            $this->load->view('index');
        }
    }

    public function galeria()
    {
        $user = $this->session->userdata("administrador");
        if (count($user) > 0) {
            $this->load->view('Galeria');
        } else {
            $this->load->view('index');
        }
    }

    public function nosotros()
    {
        if ($this->session->userdata("administrador")) {
            $this->load->view('Nosotros');
        } else {
            $this->load->view('index');
        }
    }

    public function horario()
    {
        if ($this->session->userdata("administrador")) {
            $this->load->view('Horarios');
        } else {
            $this->load->view('index');
        }
    }

    public function Redes()
    {
        if ($this->session->userdata("administrador")) {
            $this->load->view('Redes');
        } else {
            $this->load->view('index');
        }
    }

    public function getMision()
    {
        if ($this->session->userdata("administrador")) {
            echo json_encode($this->indexModel->getMision());
        } else {
            $this->load->view('index');
        }
    }

    public function getVision()
    {
        if ($this->session->userdata("administrador")) {
            echo json_encode($this->indexModel->getVision());
        } else {
            $this->load->view('index');
        }
    }

    public function getNosotros()
    {
        if ($this->session->userdata("administrador")) {
            echo json_encode($this->indexModel->getNosotros());
        } else {
            $this->load->view('index');
        }
    }

    public function editarEstadoMision()
    {
        if ($this->session->userdata("administrador")) {
            $estado = $this->input->post("estado");
            $resultado = $this->indexModel->editarEstadoMision($estado);
            if ($resultado == 1) {
                echo json_encode(array("msg" => "ok"));
            } else {
                echo json_encode(array("msg" => "error"));
            }
        } else {
            $this->load->view('index');
        }
    }

    public function editarEstadoVision()
    {
        if ($this->session->userdata("administrador")) {
            $estado = $this->input->post("estado");
            $resultado = $this->indexModel->editarEstadoVision($estado);
            if ($resultado == 1) {
                echo json_encode(array("msg" => "ok"));
            } else {
                echo json_encode(array("msg" => "error"));
            }
        } else {
            $this->load->view('index');
        }
    }

    public function editarEstadoNosotros()
    {
        if ($this->session->userdata("administrador")) {
            $estado = $this->input->post("estado");
            $resultado = $this->indexModel->editarEstadoNosotros($estado);
            if ($resultado == 1) {
                echo json_encode(array("msg" => "ok"));
            } else {
                echo json_encode(array("msg" => "error"));
            }
        } else {
            $this->load->view('index');
        }
    }

    public function editarNosotros()
    {
        if ($this->session->userdata("administrador")) {
            $descripcion = $this->input->post("descripcion");
            $resultado = $this->indexModel->editarNosotros($descripcion);
            if ($resultado == 1) {
                echo json_encode(array("msg" => "ok"));
            } else {
                echo json_encode(array("msg" => "error"));
            }
        } else {
            $this->load->view('index');
        }
    }

    public function editarVision()
    {
        if ($this->session->userdata("administrador")) {
            $descripcion = $this->input->post("descripcion");
            $resultado = $this->indexModel->editarVision($descripcion);
            if ($resultado == 1) {
                echo json_encode(array("msg" => "ok"));
            } else {
                echo json_encode(array("msg" => "error"));
            }
        } else {
            $this->load->view('index');
        }
    }

    public function editarMision()
    {
        if ($this->session->userdata("administrador")) {
            $descripcion = $this->input->post("descripcion");
            $resultado = $this->indexModel->editarMision($descripcion);
            if ($resultado == 1) {
                echo json_encode(array("msg" => "ok"));
            } else {
                echo json_encode(array("msg" => "error"));
            }
        } else {
            $this->load->view('index');
        }
    }

    public function addGaleria()
    {
        date_default_timezone_set("Chile/Continental");
        $hora = date('YmdHis');
        $nombre_imagen = $_FILES['foto']['name']; //nombre
        $tipo_imagen = $_FILES['foto']['type']; //tipo imagen
        $tamano_imagen = $_FILES['foto']['size']; //tamaño imagen
        if ($tamano_imagen <= 10000000) {
            if ($tipo_imagen == "image/jpeg" || $tipo_imagen == "image/png" || $tipo_imagen == "image/jpj" || $tipo_imagen == "image/gif") {
                $carpeta_destino = $_SERVER['DOCUMENT_ROOT'] . '/Admin/lib/img/Galeria/';
                $nombre_imagen = $hora . $nombre_imagen;
                $ruta_imagen = base_url() . 'lib/img/Galeria/' . $nombre_imagen;
                $resultado = $this->indexModel->addGaleria($ruta_imagen);
                if ($resultado == 1) {
                    move_uploaded_file($_FILES['foto']['tmp_name'], $carpeta_destino . $nombre_imagen);
                    echo "ok";
                } else {
                    echo "error";
                }
            } else {
                echo "error2";
            }
        } else {
            echo "error2";
        }
    }

    public function getGaleria()
    {
        if ($this->session->userdata("administrador")) {
            $draw = intval($this->input->get("draw"));
            $start = intval($this->input->get("start"));
            $length = intval($this->input->get("length"));
            $books = $this->indexModel->getGaleria();
            $data = array();
            foreach ($books->result() as $r) {
                if ($r->estadoGaleria == 1) {
                    $estado = "<button  id='editarEstadoGaleria' value='" . $r->idGaleria . ",2' class='btn btn-danger'>Desactivar</button>";
                } else {
                    $estado = "<button  id='editarEstadoGaleria' value='" . $r->idGaleria . ",1' class='btn btn-info'>Activar</button>";
                }
                $data[] = array(
                    $r->imagenGaleria,
                    $estado
                );
            }
            $output = array(
                "draw" => $draw,
                "recordsTotal" => $books->num_rows(),
                "recordsFiltered" => $books->num_rows(),
                "data" => $data
            );
            echo json_encode($output);
            exit();
        } else {
            $this->load->view('index');
        }
    }

    public function editarGaleria()
    {
        if ($this->session->userdata("administrador")) {
            $id = $this->input->post("id");
            $estado = $this->input->post("estado");
            $resultado = $this->indexModel->editarGaleria($id, $estado);
            if ($resultado == 1) {
                echo json_encode(array("msg" => "ok"));
            } else {
                echo json_encode(array("msg" => "error"));
            }
        } else {
            $this->load->view('index');
        }
    }

    public function addCarta()
    {
        date_default_timezone_set("Chile/Continental");
        $hora = date('YmdHis');
        $nombre_imagen = $_FILES['foto']['name']; //nombre
        $tipo_imagen = $_FILES['foto']['type']; //tipo imagen
        $tamano_imagen = $_FILES['foto']['size']; //tamaño imagen
        if ($tamano_imagen <= 10000000) {
            if ($tipo_imagen == "image/jpeg" || $tipo_imagen == "image/png" || $tipo_imagen == "image/jpj" || $tipo_imagen == "image/gif") {
                $carpeta_destino = $_SERVER['DOCUMENT_ROOT'] . '/Admin/lib/img/Carta/';
                $nombre_imagen = $hora . $nombre_imagen;
                $ruta_imagen = base_url() . 'lib/img/Carta/' . $nombre_imagen;
                $nombre = $this->input->post("nombre");
                $resultado = $this->indexModel->addCarta($ruta_imagen, $nombre);
                if ($resultado == 1) {
                    move_uploaded_file($_FILES['foto']['tmp_name'], $carpeta_destino . $nombre_imagen);
                    echo "ok";
                } else {
                    echo "error";
                }
            } else {
                echo "error2";
            }
        } else {
            echo "error2";
        }
    }

    public function getCarta()
    {
        if ($this->session->userdata("administrador")) {
            $draw = intval($this->input->get("draw"));
            $start = intval($this->input->get("start"));
            $length = intval($this->input->get("length"));
            $books = $this->indexModel->getCarta();
            $data = array();
            foreach ($books->result() as $r) {
                if ($r->estadoCarta == 1) {
                    $estado = "<button  id='editarEstadoCarta' value='" . $r->idCarta . ",2' class='btn btn-danger'>Desactivar</button>";
                } else {
                    $estado = "<button  id='editarEstadoCarta'' value='" . $r->idCarta . ",1' class='btn btn-info'>Activar</button>";
                }
                $data[] = array(
                    $r->nombreCarta,
                    $r->imagenCarta,
                    $estado
                );
            }
            $output = array(
                "draw" => $draw,
                "recordsTotal" => $books->num_rows(),
                "recordsFiltered" => $books->num_rows(),
                "data" => $data
            );
            echo json_encode($output);
            exit();
        } else {
            $this->load->view('index');
        }
    }

    public function editarCarta()
    {
        if ($this->session->userdata("administrador")) {
            $id = $this->input->post("id");
            $estado = $this->input->post("estado");
            $resultado = $this->indexModel->editarCarta($id, $estado);
            if ($resultado == 1) {
                echo json_encode(array("msg" => "ok"));
            } else {
                echo json_encode(array("msg" => "error"));
            }
        } else {
            $this->load->view('index');
        }
    }

    public function addHorario()
    {
        if ($this->session->userdata("administrador")) {
            $id = $this->input->post("id");
            $desde = $this->input->post("desde");
            $hasta = $this->input->post("hasta");
            $resultado = $this->indexModel->addHorario($id, $desde, $hasta);
            if ($resultado == 1) {
                echo json_encode(array("msg" => "ok"));
            } else {
                echo json_encode(array("msg" => "error"));
            }
        } else {
            $this->load->view('index');
        }
    }

    public function getHorario()
    {
        if ($this->session->userdata("administrador")) {
            $draw = intval($this->input->get("draw"));
            $start = intval($this->input->get("start"));
            $length = intval($this->input->get("length"));
            $books = $this->indexModel->getHorario();
            $data = array();
            foreach ($books->result() as $r) {
                if ($r->estadoHorario == 1) {
                    $estado = "<button  id='editarEstadoHorario' value='" . $r->idHorario . ",2' class='btn btn-danger'>Desactivar</button>";
                } else {
                    $estado = "<button  id='editarEstadoHorario' value='" . $r->idHorario . ",1' class='btn btn-info'>Activar</button>";
                }
                $data[] = array(
                    $r->nombreHorario,
                    $r->desdeHorario,
                    $r->hastaHorario,
                    $estado,
                    "<button  id='editarDia' value='" . $r->idHorario . "," . $r->nombreHorario . "," . $r->desdeHorario . "," . $r->hastaHorario . "' class='btn btn-info'>Editar</button>"
                );
            }
            $output = array(
                "draw" => $draw,
                "recordsTotal" => $books->num_rows(),
                "recordsFiltered" => $books->num_rows(),
                "data" => $data
            );
            echo json_encode($output);
            exit();
        } else {
            $this->load->view('index');
        }
    }

    public function editarHorario()
    {
        if ($this->session->userdata("administrador")) {
            $id = $this->input->post("id");
            $estado = $this->input->post("estado");
            $resultado = $this->indexModel->editarHorario($id, $estado);
            if ($resultado == 1) {
                echo json_encode(array("msg" => "ok"));
            } else {
                echo json_encode(array("msg" => "error"));
            }
        } else {
            $this->load->view('index');
        }
    }

    public function addRRSS()
    {
        if ($this->session->userdata("administrador")) {
            $nombre = $this->input->post("nombre");
            $link = $this->input->post("link");
            $resultado = $this->indexModel->addRRSS($nombre, $link);
            if ($resultado == 1) {
                echo json_encode(array("msg" => "ok"));
            } else {
                echo json_encode(array("msg" => "error"));
            }
        } else {
            $this->load->view('index');
        }
    }

    public function getRRSS()
    {
        if ($this->session->userdata("administrador")) {
            $draw = intval($this->input->get("draw"));
            $start = intval($this->input->get("start"));
            $length = intval($this->input->get("length"));
            $books = $this->indexModel->getRRSS();
            $data = array();
            foreach ($books->result() as $r) {
                if ($r->estadoRRSS == 1) {
                    $estado = "<button  id='editarEstadoRRSS' value='" . $r->idRRSS . ",2' class='btn btn-danger'>Desactivar</button>";
                } else {
                    $estado = "<button  id='editarEstadoRRSS'' value='" . $r->idRRSS . ",1' class='btn btn-info'>Activar</button>";
                }
                $data[] = array(
                    $r->nombreRRSS,
                    $r->linkRRSS,
                    $estado
                );
            }
            $output = array(
                "draw" => $draw,
                "recordsTotal" => $books->num_rows(),
                "recordsFiltered" => $books->num_rows(),
                "data" => $data
            );
            echo json_encode($output);
            exit();
        } else {
            $this->load->view('index');
        }
    }

    public function editarEstadoPromocion()
    {
        if ($this->session->userdata("administrador")) {
            $id = $this->input->post("id");
            $estado = $this->input->post("estado");
            $resultado = $this->indexModel->editarEstadoPromocion($id, $estado);
            if ($resultado == 1) {
                echo json_encode(array("msg" => "ok"));
            } else {
                echo json_encode(array("msg" => "error"));
            }
        } else {
            $this->load->view('index');
        }
    }

    public function getPromociones()
    {
        if ($this->session->userdata("administrador")) {
            $draw = intval($this->input->get("draw"));
            $start = intval($this->input->get("start"));
            $length = intval($this->input->get("length"));
            $books = $this->indexModel->getPromociones();
            $data = array();
            foreach ($books->result() as $r) {
                if ($r->estadoPromocion == 1) {
                    $estado = "<button  id='editarEstadoPromocion' value='" . $r->idPromocion . ",2' class='btn btn-danger'>Desactivar</button>";
                } else {
                    $estado = "<button  id='editarEstadoPromocion'' value='" . $r->idPromocion . ",1' class='btn btn-info'>Activar</button>";
                }
                $colorCantidad = "";
                if ($r->tipoPromocion == 1) {
                    $tipo = "Fecha";
                    if ($r->totalUsuarios > 0) {
                        $resultado = (100 * $r->cantidadActual) / $r->totalUsuarios;
                        if ($resultado < 35) {
                            $color = "green";
                        } else if ($resultado < 75) {
                            $color = "orange";
                        } else {
                            $color = "red";
                        }
                    } else {
                        $color = "red";
                    }
                } else {
                    $tipo = "Cantidad";
                    if ($r->cantidadActual > 0) {
                        // cantidadTotal = 100
                        // cantidadActual = x
                        $resultado = (100 * $r->cantidadActual) / $r->cantidadTotal;
                        //echo $r->idPromocion." ".$resultado.'<br>';
                        if ($resultado < 35) {
                            $colorCantidad = "green";
                        } else if ($resultado < 75) {
                            $colorCantidad = "orange";
                        } else {
                            $colorCantidad = "red";
                        }
                    } else {
                        $colorCantidad = "green";
                    }
                }

                $data[] = array(
                    $r->nombrePromocion,
                    $r->descripcionPromocion,
                    "$" . $r->precioAntiguo,
                    "$" . $r->precioNuevo,
                    $r->cantidadTotal,
                    $r->tipoPromocion == 1 ? "<span style='color:" . $color . "'>" . $r->cantidadActual . "</span>" : "<span style='color:" . $colorCantidad . "'>" . $r->cantidadActual . "</span>",
                    $r->totalUsuarios,
                    $r->fechaInicio,
                    $r->fechaFin,
                    '<img src="' . $r->imagenPromocion . '" style="width:100px; height:75px;" />',
                    $tipo,
                    $estado
                );
            }
            $output = array(
                "draw" => $draw,
                "recordsTotal" => $books->num_rows(),
                "recordsFiltered" => $books->num_rows(),
                "data" => $data
            );
            echo json_encode($output);
            exit();
        } else {
            $this->load->view('index');
        }
    }

    public function editarRRSS()
    {
        if ($this->session->userdata("administrador")) {
            $id = $this->input->post("id");
            $estado = $this->input->post("estado");
            $resultado = $this->indexModel->editarRRSS($id, $estado);
            if ($resultado == 1) {
                echo json_encode(array("msg" => "ok"));
            } else {
                echo json_encode(array("msg" => "error"));
            }
        } else {
            $this->load->view('index');
        }
    }

    public function getTipoPromocion()
    {
        if ($this->session->userdata("administrador")) {
            echo json_encode($this->indexModel->getTipoPromocion());
        } else {
            $this->load->view('index');
        }
    }

    public function addPromoTiempo()
    {
        if ($this->session->userdata("administrador")) {
            $nombre = $this->input->post("nombre");
            $descripcion = $this->input->post("descripcion");
            $antiguo = $this->input->post("antiguo");
            $nuevo = $this->input->post("nuevo");
            $tipo = $this->input->post("tipo");
            $desde = $this->input->post("desde");
            $hasta = $this->input->post("hasta");
            $desde = explode("T", $desde);
            $hasta = explode("T", $hasta);
            $desde = $desde[0] . ' ' . $desde[1];
            $hasta = $hasta[0] . ' ' . $hasta[1];
            /*echo $nombre . "<br>";
            echo $descripcion . "<br>";
            echo $antiguo . "<br>";
            echo $nuevo . "<br>";
            echo $tipo . "<br>";
            echo $desde . "<br>";
            echo $hasta . "<br>";*/
            date_default_timezone_set("Chile/Continental");
            $hora = date('YmdHis');
            $nombre_imagen = $_FILES['foto']['name']; //nombre
            $tipo_imagen = $_FILES['foto']['type']; //tipo imagen
            $tamano_imagen = $_FILES['foto']['size']; //tamaño imagen
            if ($tamano_imagen <= 10000000) {
                if ($tipo_imagen == "image/jpeg" || $tipo_imagen == "image/png" || $tipo_imagen == "image/jpj" || $tipo_imagen == "image/gif") {
                    $carpeta_destino = $_SERVER['DOCUMENT_ROOT'] . '/Admin/lib/img/Promociones/';
                    $nombre_imagen = $hora . $nombre_imagen;
                    $ruta_imagen = base_url() . 'lib/img/Promociones/' . $nombre_imagen;

                    $resultado = $this->indexModel->addPromoTiempo($ruta_imagen, $nombre, $descripcion, $antiguo, $nuevo, $tipo, $desde, $hasta);
                    if ($resultado == 1) {
                        move_uploaded_file($_FILES['foto']['tmp_name'], $carpeta_destino . $nombre_imagen);
                        echo "ok";
                    } else {
                        echo "error";
                    }
                } else {
                    echo "error2";
                }
            } else {
                echo "error2";
            }
            //echo json_encode($this->indexModel->getTipoPromocion());
        } else {
            $this->load->view('index');
        }
    }

    public function addPromoCantidad()
    {
        if ($this->session->userdata("administrador")) {
            $nombre = $this->input->post("nombre");
            $descripcion = $this->input->post("descripcion");
            $antiguo = $this->input->post("antiguo");
            $nuevo = $this->input->post("nuevo");
            $tipo = $this->input->post("tipo");
            $cantidad = $this->input->post("cantidad");
            date_default_timezone_set("Chile/Continental");
            $hora = date('YmdHis');
            $nombre_imagen = $_FILES['foto']['name']; //nombre
            $tipo_imagen = $_FILES['foto']['type']; //tipo imagen
            $tamano_imagen = $_FILES['foto']['size']; //tamaño imagen
            if ($tamano_imagen <= 10000000) {
                if ($tipo_imagen == "image/jpeg" || $tipo_imagen == "image/png" || $tipo_imagen == "image/jpj" || $tipo_imagen == "image/gif") {
                    $carpeta_destino = $_SERVER['DOCUMENT_ROOT'] . '/Admin/lib/img/Promociones/';
                    $nombre_imagen = $hora . $nombre_imagen;
                    $ruta_imagen = base_url() . 'lib/img/Promociones/' . $nombre_imagen;

                    $resultado = $this->indexModel->addPromoCantidad($ruta_imagen, $nombre, $descripcion, $antiguo, $nuevo, $tipo, $cantidad);
                    if ($resultado == 1) {
                        move_uploaded_file($_FILES['foto']['tmp_name'], $carpeta_destino . $nombre_imagen);
                        echo "ok";
                    } else {
                        echo "error";
                    }
                } else {
                    echo "error2";
                }
            } else {
                echo "error2";
            }
            //echo json_encode($this->indexModel->getTipoPromocion());
        } else {
            $this->load->view('index');
        }
    }

    public function guardarToken()
    {
        $token = $this->input->post("token");
        $this->indexModel->guardarToken($token);
    }

    public function getGaleriaApp()
    {
        $token = $this->input->post("token");
        $resultado = $this->indexModel->autorizar($token);
        if ($resultado) {
            echo json_encode($this->indexModel->getGaleriaApp());
        } else {
            echo "No tiene acceso";
        }
    }

    public function getCartaApp()
    {
        $token = $this->input->post("token");
   
        $resultado = $this->indexModel->autorizar($token);
        if ($resultado) {
            echo json_encode($this->indexModel->getCartaApp());
        } else {
            echo "No tiene acceso";
        }
    }

    public function getHorarioApp()
    {
        $token = $this->input->post("token");
        $resultado = $this->indexModel->autorizar($token);
        if ($resultado) {
            echo json_encode($this->indexModel->getHorarioApp());
        } else {
            echo "No tiene acceso";
        }
    }

    public function getMisionApp()
    {
        $token = $this->input->post("token");
        $resultado = $this->indexModel->autorizar($token);
        if ($resultado) {
            echo json_encode($this->indexModel->getMisionApp());
        } else {
            echo "No tiene acceso";
        }
    }

    public function getVisionApp()
    {
        $token = $this->input->post("token");
        $resultado = $this->indexModel->autorizar($token);
        if ($resultado) {
            echo json_encode($this->indexModel->getVisionApp());
        } else {
            echo "No tiene acceso";
        }
    }

    public function getNosotrosApp()
    {
        $token = $this->input->post("token");
        $resultado = $this->indexModel->autorizar($token);
        if ($resultado) {
            echo json_encode($this->indexModel->getNosotrosApp());
        } else {
            echo "No tiene acceso";
        }
    }

    public function cobrarPromocion()
    {
        $variable = $this->input->get("variable");
        $variable = base64_decode($variable);
        $variable = explode(",", $variable);
      
        $resultado = $this->indexModel->autorizar($variable[0]);
        if ($resultado) {
            //echo "TOKEN: ".$variable[0]."<br>";
            //echo "ESTADO: ".$variable[1]."<br>";
            //echo "ID DETALLE: ".$variable[2]."<br>";
            //echo json_encode($this->indexModel->cobrarPromocion($variable[0], $variable[1], $variable[2]));
            $resultado = $this->indexModel->cobrarPromocion($variable[0], $variable[1], $variable[2]);
            $data = array(
                'resultado' => $resultado

            );
            $this->load->view('cobrarPromocion', $data);
        } else {
            echo "No tiene acceso";
        }
    }

    public function getPromocionesApp()
    {
        $token = $this->input->post("token");
        $resultado = $this->indexModel->autorizar($token);
        if ($resultado) {
            echo json_encode($this->indexModel->getPromocionesApp($token));
        } else {
            echo "No tiene acceso";
        }
    }



    //FIN SAIKO



}
