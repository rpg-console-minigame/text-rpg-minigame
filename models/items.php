<?php
class item
{
    public $name;
    public $descripcion;
    public $tipo;
    public $efecto;
    public $cantidad;
    public $precio;
    public $id;
    public $icon;

    public function __construct($name, $descripcion, $tipo, $efecto, $cantidad, $precio, $id, $icon)
    {
        $this->name = $name;
        $this->descripcion = $descripcion;
        $this->tipo = $tipo;
        $this->efecto = $efecto;
        $this->cantidad = $cantidad;
        $this->precio = $precio;
        $this->id = $id;
        $this->icon = $icon;
    }
    //getters
    public function __getName()
    {
        return $this->name;
    }
    public function __getDescripcion()
    {
        return $this->descripcion;
    }
    public function __getTipo()
    {
        return $this->tipo;
    }
    public function __getEfecto()
    {
        return $this->efecto;
    }
    public function __getCantidad()
    {
        return $this->cantidad;
    }
    public function __getPrecio()
    {
        return $this->precio;
    }
    public function __getId()
    {
        return $this->id;
    }
    public function __getIcon()
    {
        return $this->icon;
    }

}
class arma extends item
{
    public $damage;
    public function __construct($name, $descripcion, $tipo, $efecto, $cantidad, $precio, $id, $icon, $damage)
    {
        parent::__construct($name, $descripcion, $tipo, $efecto, $cantidad, $precio, $id, $icon);
        $this->damage = $damage;
    }
    //crear todos los getters
    public function __getDamage()
    {
        return $this->damage;
    }
}
?>