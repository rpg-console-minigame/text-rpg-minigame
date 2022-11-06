<?php 
$text = array();
if (isset($_POST["textConsole"])){
    if(isset($_COOKIE["text"])){
        $text = unserialize($_COOKIE["text"]);
        array_push($text, ">".$_POST["textConsole"]);
        array_push($text, interpretarText($_POST["textConsole"]));

        if(count($text) > 3){
            unset($text[0]);
            unset($text[1]);
            $text = array_values($text);
        }
        setcookie("text",serialize($text), time() + 3600);
    }
    else{
        array_push($text, ">".$_POST["textConsole"]);
        array_push($text, interpretarText($_POST["textConsole"]));
        setcookie("text", serialize($text), time() + 3600);
    }
}
function interpretarText($textAInterpretar){
    include_once "configs/configs.php";
    switch ($textAInterpretar){
        case "help":
            return "map: Muestra el mapa <br> help: Muestra la ayuda <br> walk: ir a otra sala";
        case "map":
            echo "<script>
            let w = 720;
            let h = 700;
            let map = window.open(\"map.php\", \"popup\", \"width=\" + w + \",height=\" + h);
            </script>";
            return "mapa abierto";
        case "walk":
            $text ="¿A donde quieres ir? comandos: walk ";
            $posicion = unserialize($_COOKIE["posicion"]);
            if (($map[$posicion["nivel"]][$posicion["zona"]]["puertas"]["N"])==true) $text .= "north";
            if (($map[$posicion["nivel"]][$posicion["zona"]]["puertas"]["S"])==true) $text .= ($text!="¿A donde quieres ir? comandos: walk "? ", ":"")."south";
            if (($map[$posicion["nivel"]][$posicion["zona"]]["puertas"]["E"])==true) $text .= ($text!="¿A donde quieres ir? comandos: walk "? ", ":"")."east";
            if (($map[$posicion["nivel"]][$posicion["zona"]]["puertas"]["W"])==true) $text .= ($text!="¿A donde quieres ir? comandos: walk "? ", ":"")."west";
            return $text;
        case "walk north":
            $posicion = unserialize($_COOKIE["posicion"]);
            if (($map[$posicion["nivel"]][$posicion["zona"]]["puertas"]["N"])==true){
                $posicion["nivel"] = "l".((int)substr($posicion["nivel"],1)-1);
                setcookie("posicion", serialize($posicion), time() + 3600);
                return "Has entrado en la sala ".$posicion["nivel"].$posicion["zona"];
            }
            else return "No hay puerta en esa direccion";
        case "walk south":
            $posicion = unserialize($_COOKIE["posicion"]);
            if (($map[$posicion["nivel"]][$posicion["zona"]]["puertas"]["S"])==true){
                $posicion["nivel"] = "l".((int)substr($posicion["nivel"],1)+1);
                setcookie("posicion", serialize($posicion), time() + 3600);
                return "Has entrado en la sala ".$posicion["nivel"].$posicion["zona"];
            }
            else return "No hay puerta en esa direccion";
        case "walk east":
            $posicion = unserialize($_COOKIE["posicion"]);
            if (($map[$posicion["nivel"]][$posicion["zona"]]["puertas"]["E"])==true){
                $posicion["zona"] = "z".((int)substr($posicion["zona"],1)-1);
                setcookie("posicion", serialize($posicion), time() + 3600);
                return "Has entrado en la sala ".$posicion["nivel"].$posicion["zona"];
            }
            else return "No hay puerta en esa direccion";
        case "walk west":
            $posicion = unserialize($_COOKIE["posicion"]);
            if (($map[$posicion["nivel"]][$posicion["zona"]]["puertas"]["W"])==true){
                $posicion["zona"] = "z".((int)substr($posicion["zona"],1)+1);
                setcookie("posicion", serialize($posicion), time() + 3600);
                return "Has entrado en la sala ".$posicion["nivel"].$posicion["zona"];
            }
            else return "No hay puerta en esa direccion";
        default:
            return "Comando no reconocido, para mas informacion escriba help";
        
    }
}
?>