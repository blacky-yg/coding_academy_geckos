<?php

    function connect_db($host, $username, $passwd, $port, $db) {
        try {
            $connexion = new PDO('mysql:host = $host, dbname=$db, port = $port', $username, $passwd);
            return $connexion;
        } catch (PDOException $e) {
            $log_file = "log.file";
            echo "PDO ERROR: ".$e->getMessage()." storage in ".$log_file."\n";
            error_log("PDO ERROR: ".$e->getMessage()." storage in ".$log_file."\n", 3, $log_file);
        }
    }
    // connect_db("localhost", "phpmyadmin", "19Blacky_y", 3306, "coding");
?>