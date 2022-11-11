<?php
    class enemy{
        private $nombre;
        private $chat;
        private $probabilidad; //del 1 al 100
        private $tipo;
        private $id;

        public function __construct($nombre, $chat, $probabilidad, $tipo, $id){
            $this->nombre = $nombre;
            $this->chat = $chat;
            if ($probabilidad<=100 && $probabilidad>0)$this->probabilidad = $probabilidad;
            else $this->probabilidad = 50;
            $this->tipo = $tipo;
            $this->id = $id;
        }
        public function __getNombre(){
            return $this->nombre;
        }
        public function __getChat(){
            return $this->chat;
        }
        public function __getProbabilidad(){
            return $this->probabilidad;
        }
        public function __getTipo(){
            return $this->tipo;
        }
        public function __getId(){
            return $this->id;
        }
        public function atack(){
            $ataque = rand(1, 100);
            if ($ataque <= $this->probabilidad) return true;
            else return false;
        }


    }
?>