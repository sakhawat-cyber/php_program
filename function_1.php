<html>
    <body>
    <?php
        header('Location://www.google.com');
        exit;
        ?>
        <?php
        echo "Hello";
        ?><br><br>
        
        <?php
        header('Refresh: 10;url://www.google.com');
        echo"will be redirect to GOOGLE in 9 second";exit;
        ?>
        <?php 
        echo "Hello";
        ?><br><br>

        <?php
        header('Content-type:text plain');
        echo "you may change text/plain as html or pdf";
        exit;
        ?>
        <?php
        echo "Hello";
        ?><br><br>

    </body>
</html>