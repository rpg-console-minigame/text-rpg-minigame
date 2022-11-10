<?php

$text = array();
if (isset($_POST["textConsole"])) {
    if (isset($_COOKIE["text"])) {
        $text = unserialize($_COOKIE["text"]);
        $textInterpretado = interpretarText($_POST["textConsole"]);
        array_push($text, ">" . $_POST["textConsole"]);
        array_push($text, $textInterpretado);

        if (count($text) > 3) {
            unset($text[0]);
            unset($text[1]);
            $text = array_values($text);
        }
        setcookie("text", serialize($text), time() + 3600);
    } else {
        array_push($text, ">" . $_POST["textConsole"]);
        $textInterpretado = interpretarText($_POST["textConsole"]);
        array_push($text, $textInterpretado);
        setcookie("text", serialize($text), time() + 3600);
    }
    if ($_POST["textConsole"] == "walk north" || $_POST["textConsole"] == "walk south" || $_POST["textConsole"] == "walk east" || $_POST["textConsole"] == "walk west") {
        echo "<script>location.href='index.php'</script>";
    }
}
if (!isset($_COOKIE["posicion"])) {
    include_once "configs/configs.php";
    setcookie("posicion", serialize($posicionInicial), time() + 3600);
}
function interpretarText($textAInterpretar)
{
    include_once "configs/configs.php";
    if (strpos($textAInterpretar, 'take') !== false) {
        $posicion = unserialize($_COOKIE["posicion"]);
        $item = substr($textAInterpretar, 5);
        if (isset($map[$posicion["nivel"]][$posicion["zona"]]["items"])) {
            foreach ($map[$posicion["nivel"]][$posicion["zona"]]["items"] as $itemMap) {

                if ($itemMap->__getName() == $item) {
                    $inventory = array();
                    if (isset($_COOKIE["inventory"])) {
                        $inventory = unserialize($_COOKIE["inventory"]);
                    }
                    if (!in_array($itemMap, $inventory)) {
                        array_push($inventory, $itemMap);
                        setcookie("inventory", serialize($inventory), time() + 3600);
                        return "Has cogido " . $itemMap->__getName();
                    } else {
                        return "Ya tienes " . $itemMap->__getName();
                    }
                }
            }
        }
        return "No existe el item " . $item;
    } else
        switch ($textAInterpretar) {
            case "help":
                $posicion = unserialize($_COOKIE["posicion"]);
                return "
            map: Muestra el mapa <br>
            help: Muestra la ayuda <br>
            walk: ir a otra sala<br>
            ".(isset($map[$posicion["nivel"]][$posicion["zona"]]["items"]) ? "take (item): coger un item <br>" : "")."
            inventory: Muestra el inventario
            ";
            case "map":
                echo "<script>
            let w = 720;
            let h = 700;
            let map = window.open(\"map.php\", \"popup\", \"width=\" + w + \",height=\" + h);
            </script>";
                return "mapa abierto";
            case "walk":
                $text = "¿A donde quieres ir? comandos: walk ";
                $posicion = unserialize($_COOKIE["posicion"]);
                if (($map[$posicion["nivel"]][$posicion["zona"]]["puertas"]["N"]) == true)
                    $text .= "north";
                if (($map[$posicion["nivel"]][$posicion["zona"]]["puertas"]["S"]) == true)
                    $text .= ($text != "¿A donde quieres ir? comandos: walk " ? ", " : "") . "south";
                if (($map[$posicion["nivel"]][$posicion["zona"]]["puertas"]["E"]) == true)
                    $text .= ($text != "¿A donde quieres ir? comandos: walk " ? ", " : "") . "east";
                if (($map[$posicion["nivel"]][$posicion["zona"]]["puertas"]["W"]) == true)
                    $text .= ($text != "¿A donde quieres ir? comandos: walk " ? ", " : "") . "west";
                return $text;
            case "walk north":
                $posicion = unserialize($_COOKIE["posicion"]);
                if (($map[$posicion["nivel"]][$posicion["zona"]]["puertas"]["N"]) == true) {
                    $posicion["nivel"] = "l" . ((int) substr($posicion["nivel"], 1) - 1);
                    setcookie("posicion", serialize($posicion), time() + 3600);
                    return "Has entrado en la sala " . $map[$posicion["nivel"]][$posicion["zona"]]["name"];
                } else
                    return "No hay puerta en esa direccion";
            case "walk south":
                $posicion = unserialize($_COOKIE["posicion"]);
                if (($map[$posicion["nivel"]][$posicion["zona"]]["puertas"]["S"]) == true) {
                    $posicion["nivel"] = "l" . ((int) substr($posicion["nivel"], 1) + 1);
                    setcookie("posicion", serialize($posicion), time() + 3600);
                    return "Has entrado en la sala " . $map[$posicion["nivel"]][$posicion["zona"]]["name"];
                } else
                    return "No hay puerta en esa direccion";
            case "walk east":
                $posicion = unserialize($_COOKIE["posicion"]);
                if (($map[$posicion["nivel"]][$posicion["zona"]]["puertas"]["E"]) == true) {
                    $posicion["zona"] = "z" . ((int) substr($posicion["zona"], 1) - 1);
                    setcookie("posicion", serialize($posicion), time() + 3600);
                    return "Has entrado en la sala " . $map[$posicion["nivel"]][$posicion["zona"]]["name"];
                } else
                    return "No hay puerta en esa direccion";
            case "walk west":
                $posicion = unserialize($_COOKIE["posicion"]);
                if (($map[$posicion["nivel"]][$posicion["zona"]]["puertas"]["W"]) == true) {
                    $posicion["zona"] = "z" . ((int) substr($posicion["zona"], 1) + 1);
                    setcookie("posicion", serialize($posicion), time() + 3600);
                    return "Has entrado en la sala " . $map[$posicion["nivel"]][$posicion["zona"]]["name"];
                } else
                    return "No hay puerta en esa direccion";
            case "inventory":
                echo "<script>
            let w = 720;
            let h = 700;
            let map = window.open(\"inventory.php\", \"popup\", \"width=\" + w + \",height=\" + h);
            </script>";
                return "inventario abierto";
            case $adminPass." help":
                return "
            itemadd: añade todos los items creados <br>
            itemremove: elimina todos los items creados <br>";

            case $adminPass." itemadd";
                $inventory = array();
                foreach ($map as $nivel) {
                    foreach ($nivel as $zona) {
                        if (isset($zona["items"])) {
                            foreach ($zona["items"] as $item) {
                                array_push($inventory, $item);
                            }
                        }
                    }
                }
                setcookie("inventory", serialize($inventory), time() + 3600);
                return "añadidos todos los items";
            case $adminPass." itemremove";
                setcookie("inventory", serialize(array()), time() + 0);
                return "eliminados todos los items";
            default:
                return "Comando no reconocido, para mas informacion escriba help";

        }
}
?>