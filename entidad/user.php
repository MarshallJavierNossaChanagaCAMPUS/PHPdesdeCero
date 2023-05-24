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
        public function getUsers(){
            self::$config['method']['GET'];
            $res = file_get_contents('http://localhost:3000/users?usuario='.$this->usuario.'&contrasena='.$this->contrasena, false, stream_context_create(self::$config));

            return $res;
        }
    }
?>