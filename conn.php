<?php

class Connection
{

    public $con;

    /**
     * CONEXIÓN A LA BASE DE DATOS
     */
    public function __construct()
    {
        $this->con = new PDO("mysql:host=localhost;port=3306;dbname=prueba", "root", "");
    }
}
