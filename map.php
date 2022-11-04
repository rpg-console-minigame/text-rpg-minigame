
<link rel="stylesheet" href="styles\map.css">
<?php 
include 'configs\configs.php';
    echo "<table class=\"gradient-border\">";
    foreach ($map as $level) {
        echo "<tr>";
        foreach ($level as $zone) {
            echo "<td>";
            if(!$zone["vacio"]){
            if ($zone["puertas"]["N"])
                echo "-------------&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--------------<br/>";
            else
                echo "-------------------------------- <br/>";
            if ($zone["puertas"]["E"]) {
                if ($zone["puertas"]["W"])
                    echo "|".spaces()."|<br/>|".spaces()."|<br/>&nbsp;".spaces()."&nbsp;<br/>|".spaces()."|<br/>|".spaces()."|<br/>";
                else
                echo "|".spaces()."|<br/>|".spaces()."|<br/>&nbsp;".spaces()."|<br/>|".spaces()."|<br/>|".spaces()."|<br/>";
            } else{
                if ($zone["puertas"]["W"])
                    echo "|".spaces()."|<br/>|".spaces()."|<br/>|".spaces()."&nbsp;<br/>|".spaces()."|<br/>|".spaces()."|<br/>";
                else
                echo "|".spaces()."|<br/>|".spaces()."|<br/>|".spaces()."|<br/>|".spaces()."|<br/>|".spaces()."|<br/>";
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
echo "<div id=\"protector\"></div>"
?>