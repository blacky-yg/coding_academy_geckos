<?php
    if (isset($_GET['name'])) {
        echo "Hello ".$_GET['name'];
        setcookie("name", $_GET['name']);
        echo $_COOKIE['name'];
    } else if (isset($_COOKIE["name"]))
        echo "Hello ".$_COOKIE["name"];
    else
        echo "Hello platypus";
?>