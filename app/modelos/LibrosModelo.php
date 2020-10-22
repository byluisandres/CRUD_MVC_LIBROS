<?php

/**
 * Libros Modelo
 */
class LibrosModelo
{
    private $db;

    function __construct()
    {
        $this->db = new MYSQLdb();
    }

    public function getLibros()
    {
        $data = $this->db->querySelect("SELECT * FROM libros");
        return $data;
    }

    public function insertarLibros($titulo, $autor, $editorial)
    {
        $sql = "INSERT INTO libros VALUES(0,'$titulo', '$autor', '$editorial')";
        $resultado = $this->db->queryNoSelect($sql);

        if ($resultado) {
            header("Location: " . RUTA_APP . "libros");
            exit();
        } else {
            exit("Error al insertar");
        }
    }

    public function getLibro($id)
    {
        $data = $this->db->querySelect("SELECT * FROM libros WHERE id=$id");
        return $data;
    }


    public function modificarLibros($id, $titulo, $autor, $editorial)
    {

        $sql = "UPDATE libros SET titulo='$titulo',autor='$autor',editorial='$editorial' WHERE id=$id";

        $resultado = $this->db->queryNoSelect($sql);

        if ($resultado) {
            header("Location: " . RUTA_APP . "libros");
            exit();
        } else {
            exit("Error al insertar");
        }
    }

    public function borrarLibro($id)
    {
        $sql = "DELETE FROM libros WHERE id=$id";
        $resultado = $this->db->queryNoSelect($sql);

        if ($resultado) {
            header("Location: " . RUTA_APP . "libros");
            exit();
        } else {
            exit("Error al insertar");
        }
    }
}
