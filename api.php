<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json");
    function autoload($class){
        require 'entidad/'.$class.'.php';
    }

    $_DATA = json_decode(file_get_contents("php://input"), false);

    $usuario = (string) $_DATA->{"usuario"};
    $contrasena = (string) $_DATA->{"contrasena"};

    spl_autoload_register('autoload');

    $res = new user($usuario, $contrasena);

    echo json_encode($res->getUsers(), JSON_PRETTY_PRINT) ;
?>