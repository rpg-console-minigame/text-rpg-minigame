<?php 
include_once("models/items.php");
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