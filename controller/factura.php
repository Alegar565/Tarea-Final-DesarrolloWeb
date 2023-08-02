<?php

class Factura
{
    function init()
    {
        $mysqli = require "databaseconnect.php";

        /*if ($mysqli->connect_errno) {
            echo "Falló la conexión con MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }*/

        $resultado = $mysqli->query("SELECT * FROM factura");

        print_r(json_encode($resultado->fetch_assoc()));
    }
}