<?php
include("models/items/arma.php");
include("models/items/comida.php");
class item
{
    private $name; //nombre del item
    private $descripcion; //descripcion del item
    private $tipo; //tipo de item, puede ser comida, arma. Se añadiran mas en el futuro
    private $efecto; //descripción del uso del item
    private $cantidad; //cantidad de items que hay, utilizada para los usos del item (ejemplo: un objeto "puñado de pildoras", se podra usar varias veces ya que hay varias)
    private $precio; //precio del item
    private $id; //id del item, si es arma, del 1 al 100, si es comida, del 101 al 200
    private $icon; //icono del item

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