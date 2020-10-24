<?php

    function my_password_change(PDO $bdd, string $login, string $new_password) {
        $stm = $bdd->prepare("SELECT name FROM gecko.users WHERE name=?");
        $stm->execute([$login]);
        $user = $stm->fetch();
        if (empty($new_password) || empty($user))
            throw new Exception("Error");
        else {
            $stm = $bdd->prepare("UPDATE gecko.users SET password=? WHERE name=?");
            $stm->execute([password_hash($new_password, PASSWORD_DEFAULT), $user[0]]);
        }
    }

    try {
        $con = new PDO('mysql:host = localhost, dbname=gecko', "phpmyadmin", "19Blacky_yg");
        my_password_change($con, "Hugo", "dkdhi");
    } catch (Exception $e) {
        echo $e->getMessage();
    }

?>