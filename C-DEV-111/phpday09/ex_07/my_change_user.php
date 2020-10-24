<?php

    function my_change_user(PDO $bdd, ...$names) {
        foreach ($names as $name) {
            $stm = $bdd->prepare("SELECT name FROM gecko.users WHERE name=?");
            $stm->execute([$name]);
            $user = $stm->fetch();
            if (empty($user)) {
                throw new Exception("User not found\n");
            } else {
                $new_name = ucfirst(strtolower($user[0]))."42";
                $stm = $bdd->prepare("UPDATE gecko.users SET name=? WHERE name=?");
                $stm->execute([$new_name, $user[0]]);
            }
        }
    }

    try {
        $con = new PDO('mysql:host = localhost, dbname=gecko', "phpmyadmin", "19Blacky_yg");
        var_dump(my_change_user($con, ""));
    } catch (Exception $e) {
        echo $e->getMessage();
    } finally {
        echo "Good luck with the user DB!\n";
    }
?>