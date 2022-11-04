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
    switch ($textAInterpretar){
        case "help":
            return "map: Muestra el mapa <br> help: Muestra la ayuda";
        case "map":
            echo "<script>
            let w = 720;
            let h = 700;
            let map = window.open(\"map.php\", \"popup\", \"width=\" + w + \",height=\" + h);
            </script>";
            return "mapa abierto";
        default:
            return "Comando no reconocido, para mas informacion escriba help";
        
    }
}
?>