<?php
$map = array(
    "l1" => array(
        "z1" => array(
            'vacio' => false,
            'enemigos' => array(
            ),
            'puertas' => array(
                "N" => true,
                "S" => false,
                "E" => false,
                "W" => true,
            ),
        ),
        "z2" => array(
            'vacio' => false,
            'enemigos' => array(
            ),
            'puertas' => array(
                "N" => false,
                "S" => false,
                "E" => true,
                "W" => true,
            ),
        ),
        "z3" => array(
            'vacio' => false,
            'enemigos' => array(
            ),
            'puertas' => array(
                "N" => false,
                "S" => true,
                "E" => true,
                "W" => false,
            ),
        ),
    ),
    "l2" => array(
        "z1" => array(
            'vacio' => true,
        ),
        "z2" => array(
            'vacio' => false,
            'enemigos' => array(
            ),
            'puertas' => array(
                "N" => false,
                "S" => true,
                "E" => false,
                "W" => true,
            ),
        ),
        "z3" => array(
            'vacio' => false,
            'enemigos' => array(
            ),
            'puertas' => array(
                "N" => true,
                "S" => false,
                "E" => true,
                "W" => false,
            ),
        ),
    ),
    "l3" => array(
        "z1" => array(
            "vacio" => true,
        ),
        "z2" => array(
            'vacio' => false,
            'enemigos' => array(
            ),
            'puertas' => array(
                "N" => true,
                "S" => true,
                "E" => false,
                "W" => false,
            ),
        ),
    ),
    "l4" => array(
        "z1" => array(
            "vacio" => false,
            'enemigos' => array(
            ),
            'puertas' => array(
                "N" => false,
                "S" => false,
                "E" => false,
                "W" => true,
            ),
        ),
        "z2" => array(
            'vacio' => false,
            'enemigos' => array(
            ),
            'puertas' => array(
                "N" => true,
                "S" => false,
                "E" => true,
                "W" => true,
            ),
        ),
        "z3" => array(
            'vacio' => false,
            'enemigos' => array(
            ),
            'puertas' => array(
                "N" => false,
                "S" => false,
                "E" => true,
                "W" => true,
            ),
        ),
        "z4" => array(
            'vacio' => false,
            'enemigos' => array(
            ),
            'puertas' => array(
                "N" => false,
                "S" => true,
                "E" => true,
                "W" => false,
            ),
        ),
    ),
    "l5" => array(
        "z1" => array(
            'vacio' => false,
            'enemigos' => array(
            ),
            'puertas' => array(
                "N" => false,
                "S" => false,
                "E" => false,
                "W" => true,
            ),
        ),
        "z2" => array(
            'vacio' => false,
            'enemigos' => array(
            ),
            'puertas' => array(
                "N" => false,
                "S" => false,
                "E" => true,
                "W" => true,
            ),
        ),
        "z3" => array(
            'vacio' => false,
            'enemigos' => array(
            ),
            'puertas' => array(
                "N" => false,
                "S" => false,
                "E" => true,
                "W" => true,
            ),
        ),
        "z4" => array(
            'vacio' => false,
            'enemigos' => array(
            ),
            'puertas' => array(
                "N" => true,
                "S" => false,
                "E" => true,
                "W" => false,
            ),
        ),
    ),
);

?>
<link rel="stylesheet" href="styles\map.css">
<?php 
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