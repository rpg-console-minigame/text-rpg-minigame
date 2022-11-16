<!-- los enemigos mueren de un golpe siempre que el arma acierte, si el enemigo golpea, bajará la cookie de vida en 1 punto -->
<?php
   include 'controllers/console_controller.php';
   include 'configs\configs.php'; 
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
                            <!-- Información del desarrollo del combate, deberá mostrar el nombre de los enemigos y un mensaje de cada una puesto en su objeto (está en map.php) -->
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
                            <?php 
                            //muestra el texto de la consola del comando aplicado anteriormente, leer el console controller que es el general del index.php
                            ?>
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