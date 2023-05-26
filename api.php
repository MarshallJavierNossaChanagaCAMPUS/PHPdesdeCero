<?php
    header("Access-Control-Allow-Origin: *");
    /* header("Content-Type: application/json"); */
    function autoload($class){
        require 'entidad/'.$class.'.php';
    }

    spl_autoload_register('autoload');

    $res = new user("Jose","235235", "../db.json");
    /* $data = (array) ["usuario" => "Marshall", "nombre" => "Marshall", "edad" => 21, "contrasena" => "5431"]; */

    echo json_encode($res->getUsers(), JSON_PRETTY_PRINT) ;
?>