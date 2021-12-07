<?php
session_start();
?>

<html>
    <body>
        <?php
        echo "Favarite color is ".$_SESSION["favcolor"].".<br>";
        echo "Favarite animal is ".$_SESSION["favanimal"].".";
        ?>
    </body>
</html>