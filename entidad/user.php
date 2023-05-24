<?php
    class user extends conexion{
        static $config = array(
            'http'=>[
                'header'=>"Content-Type: application/json"
            ]
            );
        public $usuario;
        protected $contrasena;
        public function __construct($usuario, $contrasena){
            $this->usuario = $usuario;
            $this->contrasena = $contrasena;
        }
    }
?>