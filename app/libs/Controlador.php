<?php

/**
 * Clase base controladora
 */
class Controlador
{

    //carga los modelos
    public function modelo($modelo)
    {
        require_once "../app/modelos/" . $modelo . ".php";

        return new $modelo();
    }

    //para cargar las vistas
    public function vista($vista, $data = [])
    {
        if (file_exists("../app/vistas/" . $vista . ".php")) {
            require_once "../app/vistas/" . $vista . ".php";
        } else {
            die("La vista no existe");
        }
    }

    //modificar
    public function modificar($id)
    {
        print "modificar " . $id;
    }

    //borrar
    public function borrar($id)
    {
        print "Borrar " . $id;
    }

    //borrar
    public function alta()
    {
        print "Alta ";
    }
}
