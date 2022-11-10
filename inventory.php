
<link rel="stylesheet" href="styles\inventory.css" type="text/css" media="screen" />
<div class="blur"></div>
<h1 class="page-title">Item Panel</h1>
<div class="item-grid">
    <?php
include_once "models/items.php";
$inventory = array();
if (isset($_COOKIE["inventory"])) {
    $inventory = unserialize($_COOKIE["inventory"]);
}
$contador = 0;
foreach ($inventory as $item) {
    echo "
    <div class=\"item item-" . $item->__getTipo() . "\">
    <h5>" . $item->__getName() . "</h5>
    <h2>" . $item->__getPrecio() . "</h2>
    <div class=\"item-img\"><img src=\"" . $item->__getIcon() . "\"></div>
  </div>
        ";
    $contador++;
}
for ($i=$contador; ($i <= 7 || $i%4 !=0 ); $i++) { 
    echo "<div class=\"item empty\"></div>";
}
?>
</div>