<?php
// if (!isset($_COOKIE["user"])){
// header("Location: login.php");
// }
// else{
include 'controllers/console_controller.php';
include 'configs\configs.php';
if (!isset($_COOKIE["vida"])){
    setcookie("vida", $vida, time() + 3600);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles\index.css" type="text/css"/>
</head>

<body>
    <form action="" method="post">
        <div id="info">
            <div class="container">
                <div class="console">
                    <div class="console-head">
                        <div class="console-title">Info</div>
                        <div class="console-actions">
                            <div class="console-action console-action-min"><span class="fa fa-caret-down"></span></div>
                            <div class="console-action console-action-max"><span class="fa fa-arrows-alt"></span></div>
                            <div class="console-action console-action-close"><span class="fa fa-close"></span></div>
                        </div>
                    </div>
                    <div class="console-body">
                        <div class="console-text">
                            <?php
                            if (!isset($_COOKIE["posicion"]))
                                echo "<script>location.href='index.php'</script>";
                            $posicion = unserialize($_COOKIE["posicion"]); ?>
                            <h2>
                                <?php echo $map[$posicion["nivel"]][$posicion["zona"]]["name"]; ?>
                            </h2>
                            <p>
                                <?php echo $map[$posicion["nivel"]][$posicion["zona"]]["descripcion"]; ?>
                            </p>
                            <?php
                            //mostrar items en la zona
                            if (isset($map[$posicion["nivel"]][$posicion["zona"]]["items"])) {
                                echo "<h3>Items</h3>";
                                echo "<ul>";
                                foreach ($map[$posicion["nivel"]][$posicion["zona"]]["items"] as $item) {
                                    //inventario
                                    $inventory = array();
                                    if (isset($_COOKIE["inventario"])) {
                                        $inventory = unserialize($_COOKIE["inventario"]);
                                    }
                                    if (!in_array($item, $inventory)) {
                                        echo "<li>" . $item->__getName() . "</li>";
                                    }

                                }
                                echo "</ul>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="console">
            <div class="container">
                <div class="console">
                    <div class="console-head">
                        <div class="console-title">Console</div>
                        <div class="console-actions">
                            <div class="console-action console-action-min"><span class="fa fa-caret-down"></span></div>
                            <div class="console-action console-action-max"><span class="fa fa-arrows-alt"></span></div>
                            <div class="console-action console-action-close"><span class="fa fa-close"></span></div>
                        </div>
                    </div>
                    <div class="console-body">

                        <div class="console-text">
                            <?php foreach ($text as $t)
                                echo "<p>$t</p>"; ?>
                            user@PC:~$
                            <input id="console-input" type="text" placeholder="Enter command" name="textConsole"
                                autocomplete="off">
                            <span class="console-input">_</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>
<?php
//}
?>