<?php
    include_once("PowerFist.php");
    include_once("PlasmaRifle.php");
    try {
        $weapon = new PowerFist();
    } catch (Exception $e) {
        echo $e->getMessage();
    }
?>