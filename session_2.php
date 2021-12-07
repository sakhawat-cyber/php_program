<?php
session_start();
?>

<html>
    <body>
        <?php
        $_SESSION["favcolor"] = "yellow, ";
        print_r($_SESSION);
        ?>
    </body>
</html>