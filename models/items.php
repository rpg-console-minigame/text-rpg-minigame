<?php
include("models/items/arma.php");
include("models/items/comida.php");
class item
{
    private $name;
    private $descripcion;
    private $tipo;
    private $efecto;
    private $cantidad;
    private $precio;
    private $id;
    private $icon;

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
?>