<?php
    include_once("AWeapon.php");
    try {
        new Weapon("Yo", 4, "r", true);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
?>