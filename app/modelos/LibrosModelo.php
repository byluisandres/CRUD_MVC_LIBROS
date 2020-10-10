<?php
/**
 * Libros Modelo
  */ 
class LibrosModelo{
    private $db;

    function __construct()
    {
        $this->db= new MYSQLdb();
    }

    public function getLibros(){
        $data=$this->db->querySelect("SELECT * FROM libros");
       return $data;

    }

}
