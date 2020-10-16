<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>ex_02</title>
    </head>
    <body>
        <?php
            if (isset($_GET['name']))
                echo "Hello ".$_GET['name'];
            else
                echo "Hello platypus";
        ?>
    </body>
</html>