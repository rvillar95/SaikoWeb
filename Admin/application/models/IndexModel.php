<?php

defined('BASEPATH') or exit('No direct script access allowed');

class IndexModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    function inicio($usuario, $clave)
    {
        $this->db->select("idAdministrador, usuarioAdministrador, claveAdministrador");
        $this->db->from("administrador");
        $this->db->where("usuarioAdministrador", $usuario);
        $this->db->where("claveAdministrador", $clave);
        return $this->db->get()->result();
    }
    //INICIO SAIKO
    function getVision()
    {
        $prueba = '<p text-align: justify; text-justify: inter-word;>';
        $prueba2 = '</p>';
        $this->db->select("idVision, concat('$prueba',descripcionVision,'$prueba2') as descripcionVision,estadoVision");
        $this->db->from("vision");
        return $this->db->get()->result();
    }

    function getMision()
    {
        $prueba = '<p text-align: justify; text-justify: inter-word;>';
        $prueba2 = '</p>';
        $this->db->select("idMision, concat('$prueba',descripcionMision,'$prueba2') as descripcionMision,estadoMision");
        $this->db->from("mision");
        return $this->db->get()->result();
    }

    function getNosotros()
    {
        $prueba = '<p text-align: justify; text-justify: inter-word;>';
        $prueba2 = '</p>';
        $this->db->select("idNosotros, concat('$prueba',descripcionNosotros,'$prueba2') as descripcionNosotros,estadoNosotros");
        $this->db->from("nosotros");
        return $this->db->get()->result();
    }

    function editarEstadoMision($estado)
    {
        $update = "update mision set estadoMision = '" . $estado . "' where idMision = 1";
        $query = $this->db->query($update);
        return $query;
    }

    function editarEstadoVision($estado)
    {
        $update = "update vision set estadoVision = '" . $estado . "' where idVision = 1";
        $query = $this->db->query($update);
        return $query;
    }

    function editarEstadoNosotros($estado)
    {
        $update = "update nosotros set estadoNosotros = '" . $estado . "' where idNosotros = 1";
        $query = $this->db->query($update);
        return $query;
    }

    function editarMision($descripcion)
    {
        $update = "update mision set descripcionMision = '" . $descripcion . "' where idMision = 1";
        $query = $this->db->query($update);
        return $query;
    }

    function editarVision($descripcion)
    {
        $update = "update vision set descripcionVision = '" . $descripcion . "' where idVision = 1";
        $query = $this->db->query($update);
        return $query;
    }

    function editarNosotros($descripcion)
    {
        $update = "update nosotros set descripcionNosotros = '" . $descripcion . "' where idNosotros = 1";
        $query = $this->db->query($update);
        return $query;
    }

    function addGaleria($ruta_imagen)
    {
        $insert = "insert into galeria (imagenGaleria,estadoGaleria) values ('" . $ruta_imagen . "',1)";
        $query = $this->db->query($insert);
        return $query;
    }

    function getGaleria()
    {
        $prueba = '<img src="';
        $prueba2 = '" class="img-responsive" style="width:250px;" ';
        $this->db->select("idGaleria, concat('$prueba',imagenGaleria,'$prueba2','/>') as imagenGaleria,estadoGaleria");
        $this->db->from("galeria");
        return $this->db->get();
    }


    function editarGaleria($id, $estado)
    {
        $update = "update galeria set estadoGaleria = " . $estado . " where idGaleria = " . $id;
        $query = $this->db->query($update);
        return $query;
    }

    function addCarta($ruta_imagen, $nombre)
    {
        $insert = "insert into carta (nombreCarta,imagenCarta,estadoCarta) values ('" . $nombre . "','" . $ruta_imagen . "',1)";
        $query = $this->db->query($insert);
        return $query;
    }

    function getCarta()
    {
        $prueba = '<img src="';
        $prueba2 = '" class="img-responsive" style="width:250px;" ';
        $this->db->select("idCarta,nombreCarta, concat('$prueba',imagenCarta,'$prueba2','/>') as imagenCarta,estadoCarta");
        $this->db->from("carta");
        return $this->db->get();
    }


    function editarCarta($id, $estado)
    {
        $update = "update carta set estadoCarta = " . $estado . " where idCarta = " . $id;
        $query = $this->db->query($update);
        return $query;
    }

    function addHorario($id, $desde, $hasta)
    {
        $insert = "update horario set desdeHorario = '" . $desde . "' , hastaHorario = '" . $hasta . "' where idHorario = " . $id;
        $query = $this->db->query($insert);
        return $query;
    }

    function getHorario()
    {
        $this->db->select("idHorario,nombreHorario,desdeHorario,hastaHorario,estadoHorario");
        $this->db->from("horario");
        return $this->db->get();
    }

    function editarHorario($id, $estado)
    {
        $update = "update horario set estadoHorario = " . $estado . " where idHorario = " . $id;
        $query = $this->db->query($update);
        return $query;
    }

    function addRRSS($nombre, $link)
    {
        $insert = "insert into rrss (nombreRRSS,linkRRSS,estadoRRSS) values ('" . $nombre . "','" . $link . "',1)";
        $query = $this->db->query($insert);
        return $query;
    }

    function getRRSS()
    {
        $this->db->select("idRRSS,nombreRRSS,linkRRSS,estadoRRSS");
        $this->db->from("rrss");
        return $this->db->get();
    }

    function editarRRSS($id, $estado)
    {
        $update = "update rrss set estadoRRSS = " . $estado . " where idRRSS = " . $id;
        $query = $this->db->query($update);
        return $query;
    }

    function getPromociones()
    {
        $query = $this->db->query('select * from promocion');
        return $query;
    }

    function guardarToken($token)
    {
        $select = "select count(*) cantidad from token where token = '" . $token . "' ";
        $query2 = $this->db->query($select);
        $cantidad = $query2->result()[0]->cantidad;
        if ($cantidad == 0) {
            $insert = "insert into token (token) values ('" . $token . "')";
            $query = $this->db->query($insert);
            return $query;
        }else{
            return 'ya registrado';
        }
    }

    function autorizar($token)
    {
        $select = "select count(*) cantidad from token where token = '" . $token . "' ";
        
        $query2 = $this->db->query($select);
        $cantidad = $query2->result()[0]->cantidad;
      
        if ($cantidad >= 1) {
            return true;
        } else {
            return false;
        }
    }


    //FIN SAIKO
    function getGaleriaApp()
    {
        $select = "select * from galeria where estadoGaleria = 1 ";
        $resultado = $this->db->query($select);

        return $resultado->result();
    }

    function getCartaApp()
    {
        $select = "select * from carta where estadoCarta = 1 ";
        $resultado = $this->db->query($select);

        return $resultado->result();
    }

    function getMisionApp()
    {
        $select = "select * from mision where estadoMision = 1 ";
        $resultado = $this->db->query($select);
        return $resultado->result();
    }

    function getVisionApp()
    {
        $select = "select * from vision where estadoVision = 1 ";
        $resultado = $this->db->query($select);
        return $resultado->result();
    }

    function getNosotrosApp()
    {
        $select = "select * from nosotros where estadoNosotros = 1 ";
        $resultado = $this->db->query($select);
        return $resultado->result();
    }

    function getHorarioApp()
    {
        $select = "select * from horario where estadoHorario = 1 ORDER BY idHorario ASC ";
        $resultado = $this->db->query($select);
        return $resultado->result();
    }

    function getTipoPromocion()
    {
        $select = "select * from tipo_promocion";
        $resultado = $this->db->query($select);
        return $resultado->result();
    }

    function addPromoTiempo($ruta_imagen, $nombre, $descripcion, $antiguo, $nuevo, $tipo, $desde, $hasta)
    {
        $this->db->trans_begin();

        $query = $this->db->query('select count(*) total from token');
        $resultado = $query->result();
        $totalUsuarios = $resultado[0]->total;

        $insert = "insert into promocion (nombrePromocion,
        descripcionPromocion,
        precioAntiguo,
        precioNuevo,
        cantidadTotal,
        totalUsuarios,
        fechaInicio,
        fechaFin,
        imagenPromocion,
        estadoPromocion,
        tipoPromocion) 
        values ('" . $nombre . "',
        '" . $descripcion . "',
        " . $antiguo . ",
        " . $nuevo . ",
        0,
        " . $totalUsuarios . ",
        '" . $hasta . "',
        '" . $desde . "',
        '" . $ruta_imagen . "',
        1,
        " . $tipo . ")";
        $this->db->query($insert);
        //  return $query;

        $query = $this->db->query('select MAX(idPromocion) id from promocion');
        $resultado = $query->result();
        $idPromo = $resultado[0]->id;

        $query = $this->db->query('select * from token');
        $resultado2 = $query->result();

 

        foreach ($resultado2 as $key => $value) {
            //echo $value->token;
            $query = $this->db->query("SELECT `AUTO_INCREMENT` idDetalle FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'saikomak_app' AND TABLE_NAME = 'detalle_promocion'");
            $resultado3 = $query->result();
            $idDetalle = $resultado3[0]->idDetalle;
            $token = base64_encode($value->token . ",S" . "," . ($idDetalle));
            $link = "https://www.saikomakki.cl/Admin/cobrarPromocion?variable=" . $token;
            //echo $link . "<br>";
            $insert = "insert into detalle_promocion (idPromocion,
            idToken,
            usado,
            link,
            fecha_creado) 
            values (" . $idPromo . "," . $value->idToken . ",'N','" . $link . "',now())";
            $this->db->query($insert);
            $this->push_notification_android($value->token, $descripcion, $nombre);
        }

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return 0;
        } else {
            $this->db->trans_commit();
            return 1;
        }
    }

    function editarEstadoPromocion($id, $estado)
    {
        $update = "update promocion set estadoPromocion = " . $estado . " where idPromocion = " . $id;
        $query = $this->db->query($update);
        return $query;
    }

    function addPromoCantidad($ruta_imagen, $nombre, $descripcion, $antiguo, $nuevo, $tipo, $cantidad)
    {
        $this->db->trans_begin();

        $query = $this->db->query('select count(*) total from token');
        $resultado = $query->result();
        $totalUsuarios = $resultado[0]->total;

        $insert = "insert into promocion (nombrePromocion,
        descripcionPromocion,
        precioAntiguo,
        precioNuevo,
        cantidadTotal,
        totalUsuarios,
        imagenPromocion,
        estadoPromocion,
        tipoPromocion) 
        values ('" . $nombre . "',
        '" . $descripcion . "',
        " . $antiguo . ",
        " . $nuevo . ",
        " . $cantidad . ",
        " . $totalUsuarios . ",
        '" . $ruta_imagen . "',
        1,
        " . $tipo . ")";
        $this->db->query($insert);
        //  return $query;

        $query = $this->db->query('select MAX(idPromocion) id from promocion');
        $resultado = $query->result();
        $idPromo = $resultado[0]->id;

        $query = $this->db->query('select * from token');
        $resultado2 = $query->result();



        foreach ($resultado2 as $key => $value) {
            // echo "hola";
            $query = $this->db->query("SELECT `AUTO_INCREMENT` idDetalle FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'saikomak_app' AND TABLE_NAME = 'detalle_promocion'");
            $resultado3 = $query->result();
            $idDetalle = $resultado3[0]->idDetalle;
            $token = base64_encode($value->token . ",S" . "," . ($idDetalle));
            $link = "https://www.saikomakki.cl/Admin/cobrarPromocion?variable=" . $token;
            // echo $link . "<br>";
            $insert = "insert into detalle_promocion (idPromocion,
            idToken,
            usado,
            link,
            fecha_creado) 
            values (" . $idPromo . "," . $value->idToken . ",'N','" . $link . "',now())";
            $this->db->query($insert);
            $this->push_notification_android($value->token, $descripcion, $nombre);
        }

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return 0;
        } else {
            $this->db->trans_commit();
            return 1;
        }
    }

    function getPromocionesApp($token)
    {
        $query = "SELECT pro.idPromocion, pro.nombrePromocion, pro.descripcionPromocion, pro.precioAntiguo, pro.precioNuevo, pro.imagenPromocion, pro.fechaInicio, pro.fechaFin, CASE WHEN pro.tipoPromocion = 1 THEN CASE WHEN now() > pro.fechaInicio and now()<= pro.fechaFin and pro.cantidadActual < pro.totalUsuarios THEN 'S'ELSE 'N' END ELSE CASE WHEN pro.cantidadActual < pro.cantidadTotal and pro.cantidadActual< pro.totalUsuarios THEN 'S'ELSE 'N' END end validaciones, pro.tipoPromocion, det.link FROM promocion pro , detalle_promocion det, token tok where pro.idPromocion = det.idPromocion and det.usado = 'N' and det.idToken = tok.idToken and pro.estadoPromocion = 1 and tok.token = '" . $token . "' AND NOW() >= pro.fechaInicio AND now() <= pro.fechaFin order by det.fecha_creado desc";
        $resultado = $this->db->query($query);
        return $resultado->result();
    }

    function cobrarPromocion($token, $estado, $detalle)
    {
        $this->db->trans_begin();

        $query = $this->db->query('select pro.estadoPromocion, pro.tipoPromocion, now() fecha, pro.fechaInicio, pro.fechaFin, pro.cantidadTotal, pro.cantidadActual, pro.totalUsuarios  from detalle_promocion det, promocion pro where det.idPromocion = pro.idPromocion and det.idDetalle_Promocion = ' . $detalle);
        $resultado = $query->result();
        $tipoPromocion = $resultado[0]->tipoPromocion;
        $fecha = $resultado[0]->fecha;
        $fechaInicio = $resultado[0]->fechaInicio;
        $fechaFin = $resultado[0]->fechaFin;
        $cantidadTotal = $resultado[0]->cantidadTotal;
        $cantidadActual2 = $resultado[0]->cantidadActual;
        $totalUsuarios = $resultado[0]->totalUsuarios;
        $estadoPromocion = $resultado[0]->estadoPromocion;
        $query = $this->db->query('select usado from detalle_promocion where idDetalle_Promocion = ' . $detalle);
        $resultado = $query->result();
        $usado = $resultado[0]->usado;
        if ($estadoPromocion == 1) {
            if ($tipoPromocion == 1) {
                //echo strtotime($fechaInicio) . "<br>";
                // echo strtotime($fechaFin) . "<br>";
                // echo strtotime($fecha) . "<br>";
                if ($cantidadActual2 < $totalUsuarios) {
                    if (strtotime($fecha) >= strtotime($fechaInicio) && strtotime($fecha) <= strtotime($fechaFin)) {
                        if ($usado == 'N') {
                            $update = "update detalle_promocion set usado = '" . $estado . "' , fecha_usado = now() where idDetalle_Promocion = " . $detalle;
                            $query = $this->db->query($update);
                            if ($query == 1) {
                                $query = $this->db->query('select det.idPromocion, pro.cantidadActual from detalle_promocion det, promocion pro where det.idPromocion = pro.idPromocion and det.idDetalle_Promocion = ' . $detalle);
                                $resultado = $query->result();
                                $idPromocion = $resultado[0]->idPromocion;
                                $cantidadActual = $resultado[0]->cantidadActual;

                                $cantidadActual = $cantidadActual + 1;
                                $update = "update promocion set cantidadActual = " . $cantidadActual . " where idPromocion = " . $idPromocion;
                                $query = $this->db->query($update);
                                //return $query;
                                if ($this->db->trans_status() === FALSE) {
                                    $this->db->trans_rollback();
                                    return 0;
                                } else {
                                    $this->db->trans_commit();
                                    return 1;
                                }
                            } else {
                                if ($this->db->trans_status() === FALSE) {
                                    $this->db->trans_rollback();
                                    return 0;
                                } else {
                                    $this->db->trans_commit();
                                    return 1;
                                }
                            }
                        } else {
                            $this->db->trans_rollback();
                            return 0;
                        }
                    } else {
                        $this->db->trans_rollback();
                        return 3;
                    }
                } else {
                    $this->db->trans_rollback();
                    return 2;
                }
            } else {
                if ($cantidadActual2 < $cantidadTotal && $cantidadActual2 < $totalUsuarios) {
                    if ($usado == 'N') {
                        $update = "update detalle_promocion set usado = '" . $estado . "' , fecha_usado = now() where idDetalle_Promocion = " . $detalle;
                        $query = $this->db->query($update);
                        if ($query == 1) {
                            $query = $this->db->query('select det.idPromocion, pro.cantidadActual from detalle_promocion det, promocion pro where det.idPromocion = pro.idPromocion and det.idDetalle_Promocion = ' . $detalle);
                            $resultado = $query->result();
                            $idPromocion = $resultado[0]->idPromocion;
                            $cantidadActual = $resultado[0]->cantidadActual;

                            $cantidadActual = $cantidadActual + 1;
                            $update = "update promocion set cantidadActual = " . $cantidadActual . " where idPromocion = " . $idPromocion;
                            $query = $this->db->query($update);
                            //return $query;
                            if ($this->db->trans_status() === FALSE) {
                                $this->db->trans_rollback();
                                return 0;
                            } else {
                                $this->db->trans_commit();
                                return 1;
                            }
                        } else {
                            if ($this->db->trans_status() === FALSE) {
                                $this->db->trans_rollback();
                                return 0;
                            } else {
                                $this->db->trans_commit();
                                return 1;
                            }
                        }
                    } else {
                        $this->db->trans_rollback();
                        return 0;
                    }
                } else {
                    $this->db->trans_rollback();
                    return 4;
                }
            }
        } else {
            return 99;
        }
        /*
        if ($usado == 'N') {
            $update = "update detalle_promocion set usado = '" . $estado . "' , fecha_usado = now() where idDetalle_Promocion = " . $detalle;
            $query = $this->db->query($update);
            if ($query == 1) {
                $query = $this->db->query('select det.idPromocion, pro.cantidadActual from detalle_promocion det, promocion pro where det.idPromocion = pro.idPromocion and det.idDetalle_Promocion = ' . $detalle);
                $resultado = $query->result();
                $idPromocion = $resultado[0]->idPromocion;
                $cantidadActual = $resultado[0]->cantidadActual;

                $cantidadActual = $cantidadActual + 1;
                $update = "update promocion set cantidadActual = " . $cantidadActual . " where idPromocion = " . $idPromocion;
                $query = $this->db->query($update);
                //return $query;
                if ($this->db->trans_status() === FALSE) {
                    $this->db->trans_rollback();
                    return 0;
                } else {
                    $this->db->trans_commit();
                    return 1;
                }
            } else {
                if ($this->db->trans_status() === FALSE) {
                    $this->db->trans_rollback();
                    return 0;
                } else {
                    $this->db->trans_commit();
                    return 1;
                }
            }
        } else {
            return 0;
        }*/
    }

    function push_notification_android($device_id, $message, $asunto)
    {
        //API URL of FCM
        $url = 'https://fcm.googleapis.com/fcm/send';

        /*api_key available in:
		Firebase Console -> Project Settings -> CLOUD MESSAGING -> Server key*/
        $api_key = 'AAAARaAwOFY:APA91bFi8Hpwhmxu6LyB2iAyTmV8QlpS4OLNxhTaNxx7bKUG5Ba5F4l0rtz2nHGfwnR9tUoltvLQ7jBfDi5uCo0Wkqzc2TH-p73AnNvU91054Yd658Vv6GdKvsXd9RCAnkmbwSLob7g6';

        $fields = array(
            'registration_ids' => array(
                $device_id
            ),
            'data' => array(
                "message" => $message,
                "comida" => "frita"
            ),
            "notification" => array(
                "title" => $asunto,
                "body" => $message,
                "message" => "Come at evening...",
                'icon' => 'https://www.example.com/images/icon.png'
            )
        );

        //header includes Content type and api key
        $headers = array(
            'Content-Type:application/json',
            'Authorization:key=' . $api_key
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
        $result = curl_exec($ch);
        if ($result === FALSE) {
            die('FCM Send Error: ' . curl_error($ch));
        }
        curl_close($ch);
        return $result;
    }
}
