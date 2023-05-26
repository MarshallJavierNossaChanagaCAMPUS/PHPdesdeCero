<?php
    class user extends conexion{
        public $usuario;
        protected $contrasena;
        public $data;
        public function __construct($usuario, $contrasena, $path){
            parent::__construct($path);
            $this->usuario = $usuario;
            $this->contrasena = $contrasena;
            $this->data = $this->getData()[__CLASS__];
        }
        public function getUsers(){
            $listUser = array_combine(array_column($this->data, 'usuario'), array_column($this->data, "contrasena"));
            $listIndex = array_combine(array_column($this->data, 'usuario'), array_keys($this->data));
            return ($listUser[$this->usuario] ?? null) == $this->contrasena
            ? $this->data[$listIndex[$this->usuario]]
            : ["success" => "error"];
        }
    }
?>