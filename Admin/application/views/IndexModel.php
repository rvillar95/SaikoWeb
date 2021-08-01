<?php

defined('BASEPATH') or exit('No direct script access allowed');

class IndexModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    function inicio($id, $clave)
    {
        $this->db->select("idAdmin, nombreAdmin, usuarioAdmin,claveAdmin,estadoAdmin");
        $this->db->from("admin");
        $this->db->where("usuarioAdmin", $id);
        $this->db->where("claveAdmin", $clave);
        return $this->db->get()->result();
    }

    function addProducto($nombre, $ruta_imagen)
    {
        $data = array(
            "nombreProducto" => $nombre,
            "imagenProducto" => $ruta_imagen,
            "estadoProducto" => "Activo"
        );
        $this->db->insert("producto", $data);
        return 'ok';
    }

    function getproductoadmin()
    {
        $prueba = '<center><img class="img-responsive" style="width: 300px; height:200px;" src="';
        $prueba2 = '" alt=""/></center>';
        $this->db->select("idProducto, nombreProducto, concat('$prueba',imagenProducto,'$prueba2') as imagenProducto,estadoProducto");
        $this->db->from("producto");
        return $this->db->get();
    }

    function editarestadoproducto($id, $estado)
    {
        if ($estado == "Activo") {
            $data = array(

                "estadoProducto" => "Inactivo"
            );
            $this->db->where('idProducto', $id);
            $this->db->update("producto", $data);
            return "ok";
        } else {
            $data = array(

                "estadoProducto" => "Activo"
            );
            $this->db->where('idProducto', $id);
            $this->db->update("producto", $data);
            return "ok";
        }
    }

    function eliminarproducto($id)
    {
        if ($this->db->simple_query("delete from producto where idProducto = $id")) {
            return "ok";
        } else {
            return "Error";
        }
    }

    function getHistoriaAdmin()
    {
        $prueba = '<p text-align: justify; text-justify: inter-word;>';
        $prueba2 = '</p>';
        $this->db->select("idHistoria, concat('$prueba',descripcionHistoria,'$prueba2') as descripcionHistoria,estadoHistoria");
        $this->db->from("historia");
        return $this->db->get();
    }

    function getVisionAdmin()
    {
        $prueba = '<p text-align: justify; text-justify: inter-word;>';
        $prueba2 = '</p>';
        $this->db->select("idVision, concat('$prueba',descripcionVision,'$prueba2') as descripcionVision,estadoVision");
        $this->db->from("vision");
        return $this->db->get();
    }

    function getMisionAdmin()
    {
        $prueba = '<p text-align: justify; text-justify: inter-word;>';
        $prueba2 = '</p>';
        $this->db->select("idMision, concat('$prueba',descripcionMision,'$prueba2') as descripcionMision,estadoMision");
        $this->db->from("mision");
        return $this->db->get();
    }

    function editarVision($variable)
    {
        $data = array(
            "descripcionVision" => $variable
        );
        $this->db->where('idVision', 1);
        $this->db->update("vision", $data);
        return "ok";
    }

    function editarHistoria($variable)
    {
        $data = array(
            "descripcionHistoria" => $variable
        );
        $this->db->where('idHistoria', 1);
        $this->db->update("historia", $data);
        return "ok";
    }

    function editarMision($variable)
    {
        $data = array(
            "descripcionMision" => $variable
        );
        $this->db->where('idMision', 1);
        $this->db->update("mision", $data);
        return "ok";
    }

    function editarEstadoEmpresa($tabla, $estado)
    {
        if ($tabla == "Mision") {
            if ($estado == "Activo") {
                $data = array(

                    "estadoMision" => "Inactivo"
                );
                $this->db->where('idMision', 1);
                $this->db->update("mision", $data);
                return "ok";
            } else {
                $data = array(

                    "estadoMision" => "Activo"
                );
                $this->db->where('idMision', 1);
                $this->db->update("mision", $data);
                return "ok";
            }
        } else if ($tabla == "Historia") {
            if ($estado == "Activo") {
                $data = array(

                    "estadoHistoria" => "Inactivo"
                );
                $this->db->where('idHistoria', 1);
                $this->db->update("historia", $data);
                return "ok";
            } else {
                $data = array(

                    "estadoHistoria" => "Activo"
                );
                $this->db->where('idHistoria', 1);
                $this->db->update("historia", $data);
                return "ok";
            }
        } else if ($tabla == "Vision") {
            if ($estado == "Activo") {
                $data = array(

                    "estadoVision" => "Inactivo"
                );
                $this->db->where('idVision', 1);
                $this->db->update("vision", $data);
                return "ok";
            } else {
                $data = array(

                    "estadoVision" => "Activo"
                );
                $this->db->where('idVision', 1);
                $this->db->update("vision", $data);
                return "ok";
            }
        }
    }

    function addEvento($titulo, $descripcion, $link)
    {
        $data = array(
            "tituloEvento" => $titulo,
            "descripcionEvento" => $descripcion,
            "linkEvento" => $link,
            "estadoEvento" => "Activo"
        );
        $this->db->insert("eventos", $data);
        return 'ok';
    }

    function getEventos()
    {
        $this->db->select("idEventos, tituloEvento, descripcionEvento,linkEvento,estadoEvento");
        $this->db->from("eventos");
        return $this->db->get();
    }

    function editarEstadoEvento($id, $estado)
    {
        if ($estado == "Activo") {
            $data = array(

                "estadoEvento" => "Inactivo"
            );
            $this->db->where('idEventos', $id);
            $this->db->update("eventos", $data);
            return "ok";
        } else {
            $data = array(

                "estadoEvento" => "Activo"
            );
            $this->db->where('idEventos', $id);
            $this->db->update("eventos", $data);
            return "ok";
        }
    }

    function eliminarEvento($id)
    {
        if ($this->db->simple_query("delete from eventos where idEventos = $id")) {
            return "ok";
        } else {
            return "Error";
        }
    }

    function addComentario($titulo, $descripcion, $link)
    {
        $data = array(
            "nombreComentario" => $titulo,
            "descripcionComentario" => $descripcion,
            "linkComentario" => $link,
            "estadoComentario" => "Activo"
        );
        $this->db->insert("comentario", $data);
        return 'ok';
    }

    function getComentarios()
    {
        $this->db->select("idComentario, nombreComentario, descripcionComentario,linkComentario,estadoComentario");
        $this->db->from("comentario");
        return $this->db->get();
    }

    function editarEstadoComentario($id, $estado)
    {
        if ($estado == "Activo") {
            $data = array(

                "estadoComentario" => "Inactivo"
            );
            $this->db->where('idComentario', $id);
            $this->db->update("comentario", $data);
            return "ok";
        } else {
            $data = array(

                "estadoComentario" => "Activo"
            );
            $this->db->where('idComentario', $id);
            $this->db->update("comentario", $data);
            return "ok";
        }
    }

    function eliminarComentario($id)
    {
        if ($this->db->simple_query("delete from comentario where idComentario = $id")) {
            return "ok";
        } else {
            return "Error";
        }
    }

    function getHistoriaPublico()
    {
        $this->db->select("descripcionHistoria");
        $this->db->from("historia");
        $this->db->where("estadoHistoria", "Activo");
        return $this->db->get()->result();
    }

    function getMisionPublico()
    {
        $this->db->select("descripcionMision");
        $this->db->from("mision");
        $this->db->where("estadoMision", "Activo");
        return $this->db->get()->result();
    }

    function getVisionPublico()
    {
        $this->db->select("descripcionVision");
        $this->db->from("vision");
        $this->db->where("estadoVision", "Activo");
        return $this->db->get()->result();
    }

    function getEventosPublico()
    {
        $this->db->select("tituloEvento,descripcionEvento,linkEvento");
        $this->db->from("eventos");
        $this->db->where("estadoEvento", "Activo");
        return $this->db->get()->result();
    }

    function getProductosPublico()
    {
        $this->db->select("nombreProducto,imagenProducto");
        $this->db->from("producto");
        $this->db->where("estadoProducto", "Activo");
        return $this->db->get()->result();
    }

    function getComentariosPublico(){
        $this->db->select("nombreComentario,descripcionComentario,linkComentario");
        $this->db->from("comentario");
        $this->db->where("estadoComentario", "Activo");
        return $this->db->get()->result();
    }
}
