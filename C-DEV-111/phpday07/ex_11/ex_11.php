<?php
    function my_autoload($class) {
        include($class.".class.php");
    }
    spl_autoload_register("my_autoload");
?>