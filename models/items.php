<?php
class item{
    public $name;
    public $descripcion;
    public $tipo;
    public $efecto;
    public $cantidad;
    public $precio;
    public $id;
    public $icon;
    public function __construct($name, $descripcion, $tipo, $efecto, $cantidad, $precio, $id,$icon){
        $this->name = $name;
        $this->descripcion = $descripcion;
        $this->tipo = $tipo;
        $this->efecto = $efecto;
        $this->cantidad = $cantidad;
        $this->precio = $precio;
        $this->id = $id;
        $this->icon = $icon;
    }
    public function __getName(){
        return $this->name;
    }
}
class arma extends item{
    public $damage;
    public function __construct($name, $descripcion, $tipo, $efecto, $cantidad, $precio, $id,$icon, $damage){
        parent::__construct($name, $descripcion, $tipo, $efecto, $cantidad, $precio, $id,$icon);
        $this->damage = $damage;
    }
}
?>