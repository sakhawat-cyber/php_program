<?php
setcookie("test_cookie","test",time() + 3600, '/');
?>

<html>
    <body>
        <?php
        if(count($_COOKIE) > 0){
            echo "Coockies are enabled.";
        }
        else {
            echo "Coockies are disabled.";
        }
        ?>
    </body>
</html>