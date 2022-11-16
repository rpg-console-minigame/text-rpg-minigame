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
    /**
     * @param $textAInterpretar string texto a interpretar por la consola, insertado por el usuario
     * @return string texto interpretado por la consola, mostrado en la pantalla
     * switch para interpretar el texto introducido por el usuario
     */
    include_once "configs/configs.php";
    if (strpos($textAInterpretar, 'take') !== false) { //si el texto contiene la palabra take, no se puede insertar en el switch ya que solo sabemos la primera parte del texto a interpretar
        $posicion = unserialize($_COOKIE["posicion"]); //obtenemos la posicion del jugador
        $item = substr($textAInterpretar, 5); //obtenemos el nombre del item a coger
        if (isset($map[$posicion["nivel"]][$posicion["zona"]]["items"])) { //si hay items en la sala
            foreach ($map[$posicion["nivel"]][$posicion["zona"]]["items"] as $itemMap) { //recorremos los items de la sala para encontrar alguno con ese nombre

                if ($itemMap->__getName() == $item) {
                    $inventory = array();
                    if (isset($_COOKIE["inventory"])) { //si el jugador tiene algun item en el inventario, asi evitamos reescribir la cookie
                        $inventory = unserialize($_COOKIE["inventory"]);
                    }
                    if (!in_array($itemMap, $inventory)) { //si el item no esta en el inventario
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
            case "help": //muestra los comandos disponibles
                $posicion = unserialize($_COOKIE["posicion"]);
                return "
            map: Muestra el mapa <br>
            help: Muestra la ayuda <br>
            walk: ir a otra sala<br>
            ".(isset($map[$posicion["nivel"]][$posicion["zona"]]["items"]) ? "take (item): coger un item <br>" : "")."
            inventory: Muestra el inventario
            ";
            case "map": //muestra el mapa en un popup generado con javascript
                echo "<script>
            let w = 720;
            let h = 700;
            let map = window.open(\"map.php\", \"popup\", \"width=\" + w + \",height=\" + h);
            </script>";
                return "mapa abierto";
            case "walk": //muestra las puertas para moverse
                $text = "¿A donde quieres ir? comandos: walk ";
                $posicion = unserialize($_COOKIE["posicion"]);
                if (($map[$posicion["nivel"]][$posicion["zona"]]["puertas"]["N"]) == true) //si hay puerta norte, al ser el primero, nunca va a tener delante una coma
                    $text .= "north";
                if (($map[$posicion["nivel"]][$posicion["zona"]]["puertas"]["S"]) == true)
                    $text .= ($text != "¿A donde quieres ir? comandos: walk " ? ", " : "") . "south"; //si el texto no es el inicial, añade una coma
                if (($map[$posicion["nivel"]][$posicion["zona"]]["puertas"]["E"]) == true)
                    $text .= ($text != "¿A donde quieres ir? comandos: walk " ? ", " : "") . "east"; //si el texto no es el inicial, añade una coma
                if (($map[$posicion["nivel"]][$posicion["zona"]]["puertas"]["W"]) == true)
                    $text .= ($text != "¿A donde quieres ir? comandos: walk " ? ", " : "") . "west"; //si el texto no es el inicial, añade una coma
                return $text; //devuelve el texto
            case "walk north": //moverse al norte
                $posicion = unserialize($_COOKIE["posicion"]);
                if (($map[$posicion["nivel"]][$posicion["zona"]]["puertas"]["N"]) == true) { //si hay puerta norte
                    $posicion["nivel"] = "l" . ((int) substr($posicion["nivel"], 1) - 1);
                    setcookie("posicion", serialize($posicion), time() + 3600); //guarda la nueva posicion
                    //comprobar si hay algún en enemigos
                    if (isset($map[$posicion["nivel"]][$posicion["zona"]]["enemigos"])) {
                        combate();
                    }
                    else return "Has entrado en la sala " . $map[$posicion["nivel"]][$posicion["zona"]]["name"];
                } else
                    return "No hay puerta en esa direccion"; //si no hay puerta en esa direccion
            case "walk south": //moverse al sur
                $posicion = unserialize($_COOKIE["posicion"]);
                if (($map[$posicion["nivel"]][$posicion["zona"]]["puertas"]["S"]) == true) { //si hay puerta sur
                    $posicion["nivel"] = "l" . ((int) substr($posicion["nivel"], 1) + 1);
                    setcookie("posicion", serialize($posicion), time() + 3600);
                    //comprobar si hay algún en enemigos
                    if (isset($map[$posicion["nivel"]][$posicion["zona"]]["enemigos"])) {
                        combate();
                    }
                    else return "Has entrado en la sala " . $map[$posicion["nivel"]][$posicion["zona"]]["name"];
                } else
                    return "No hay puerta en esa direccion"; //si no hay puerta en esa direccion
            case "walk east": //moverse al este
                $posicion = unserialize($_COOKIE["posicion"]);
                if (($map[$posicion["nivel"]][$posicion["zona"]]["puertas"]["E"]) == true) { //si hay puerta este
                    $posicion["zona"] = "z" . ((int) substr($posicion["zona"], 1) - 1);
                    setcookie("posicion", serialize($posicion), time() + 3600);
                    return "Has entrado en la sala " . $map[$posicion["nivel"]][$posicion["zona"]]["name"];
                } else
                    return "No hay puerta en esa direccion"; //si no hay puerta en esa direccion
            case "walk west": //moverse al oeste
                $posicion = unserialize($_COOKIE["posicion"]);
                if (($map[$posicion["nivel"]][$posicion["zona"]]["puertas"]["W"]) == true) { //si hay puerta oeste
                    $posicion["zona"] = "z" . ((int) substr($posicion["zona"], 1) + 1);
                    setcookie("posicion", serialize($posicion), time() + 3600);
                    //comprobar si hay algon en enemigos
                    if (isset($map[$posicion["nivel"]][$posicion["zona"]]["enemigos"])) {
                        combate();
                    }
                    else return "Has entrado en la sala " . $map[$posicion["nivel"]][$posicion["zona"]]["name"];
                } else //si no hay puerta en esa direccion
                    return "No hay puerta en esa direccion";
            case "inventory": //muestra el inventario en un popup generado con javascript
                echo "<script>
            let w = 720;
            let h = 700;
            let map = window.open(\"inventory.php\", \"popup\", \"width=\" + w + \",height=\" + h);
            </script>";
                return "inventario abierto";
            case $adminPass." help": //muestra los comandos disponibles para el admin, escribiendo antes la contraseña de admin escrita en configs/config.php
                return "
            itemadd: añade todos los items creados <br>
            itemremove: elimina todos los items creados <br>";

            case $adminPass." itemadd"; //añade todos los items creados
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
            case $adminPass." itemremove"; //elimina todos los items creados
                setcookie("inventory", serialize(array()), time() + 0);
                return "eliminados todos los items";
            default: //si no se ha introducido ningun comando valido
                return "Comando no reconocido, para mas informacion escriba help";

        }
}
function combate() {
    header('Location: '.'combat.php');
    die();
}

?>