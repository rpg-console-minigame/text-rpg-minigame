
<link rel="stylesheet" href="styles\map.css">
<?php 
include 'configs\configs.php';
$posicion = unserialize($_COOKIE["posicion"]);
    echo "<table class=\"gradient-border\">";
    foreach ($map as $keyLevel=>$level) {
        echo "<tr>";
        foreach ($level as $keyZone=>$zone) {
            echo "<td>";
            if(!$zone["vacio"]){
            if ($zone["puertas"]["N"])
                echo "-------------&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--------------<br/>";
            else
                echo "-------------------------------- <br/>";
            if ($zone["puertas"]["E"]) {
                if ($zone["puertas"]["W"])
                    echo "|".spaces()."|<br/>|".spaces()."|<br/>&nbsp;".(($keyZone==$posicion["zona"] && $keyLevel==$posicion["nivel"])?spacesPosition():spaces())."&nbsp;<br/>|".spaces()."|<br/>|".spaces()."|<br/>";
                else
                echo "|".spaces()."|<br/>|".spaces()."|<br/>&nbsp;".(($keyZone==$posicion["zona"] && $keyLevel==$posicion["nivel"])?spacesPosition():spaces())."|<br/>|".spaces()."|<br/>|".spaces()."|<br/>";
            } else{
                if ($zone["puertas"]["W"])
                    echo "|".spaces()."|<br/>|".spaces()."|<br/>|".(($keyZone==$posicion["zona"] && $keyLevel==$posicion["nivel"])?spacesPosition():spaces())."&nbsp;<br/>|".spaces()."|<br/>|".spaces()."|<br/>";
                else
                echo "|".spaces()."|<br/>|".spaces()."|<br/>|".(($keyZone==$posicion["zona"] && $keyLevel==$posicion["nivel"])?spacesPosition():spaces())."|<br/>|".spaces()."|<br/>|".spaces()."|<br/>";
            }
            if ($zone["puertas"]["S"])
                echo "-------------&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--------------<br/>";
            else
                echo "-------------------------------- <br/>";
        }
        else echo "".spaces()."";
            echo "</td>";

        }
        echo "</tr>";
    }
    echo "</table>";
function spaces(){
    return "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
}
function spacesPosition(){
    return "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;o&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
}
echo "<div id=\"protector\"></div>"
?>