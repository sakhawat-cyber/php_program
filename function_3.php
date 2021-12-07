<html>
    <body>
        <?php
        header('Cache-Control:no-cache,must-revalidate');
        "This page not cached";
        exit;
        ?>
        <?php
        echo "Hello";
        ?>
    </body>
</html>