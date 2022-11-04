<?php
include 'controllers/console_controller.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles\index.css">
</head>

<body>
    <form action="" method="post">
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
                            <input id="console-input" type="text" placeholder="Enter command" name="textConsole">
                            <span class="console-input">_</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>