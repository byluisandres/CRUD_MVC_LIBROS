<?php

//Abre la base de datos
class MYSQLdb
{
    private $host = "localhost";
    private $usuario = "root";
    private $clave = "";
    private $db = "librosmvc";
    private $conn;

    function __construct()
    {
        $this->conn = mysqli_connect($this->host, $this->usuario, $this->clave, $this->db);

        if (mysqli_connect_errno()) {
            print "Error" . mysqli_error($this->conn);
            exit();
        }

        if (!mysqli_set_charset($this->conn, "utf8")) {
            print "Error" . mysqli_error($this->conn);
            exit();
        }
    }

    public function querySelect($sql)
    {
        $data = array();
        $resultado = $this->conn->query($sql);

        while ($row = mysqli_fetch_array($resultado)) {
            array_push($data, $row);
        }

        return $data;
    }
}
