<?php 
    class comida extends item {
        public $vida;
        public function __construct($name, $descripcion, $tipo, $efecto, $cantidad, $precio, $id, $icon, $vida)
        {
            parent::__construct($name, $descripcion, $tipo, $efecto, $cantidad, $precio, $id, $icon);
            $this->vida = $vida;
        }
        //crear todos los getters
        public function __getVida()
        {
            return $this->vida;
        }
    }
?>