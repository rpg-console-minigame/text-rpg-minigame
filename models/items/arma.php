<?php 
include_once("models/items.php");
class arma extends item
{
    public $damage; //probabilidad del daño, del 1 al 100
    public function __construct($name, $descripcion, $tipo, $efecto, $cantidad, $precio, $id, $icon, $damage)
    {
        parent::__construct($name, $descripcion, $tipo, $efecto, $cantidad, $precio, $id, $icon);
        if($damage>0 && $damage<=100)$this->damage = $damage;
        else $this->damage = 50;
    }
    //crear todos los getters
    public function __getDamage()
    {
        return $this->damage;
    }
}
?>