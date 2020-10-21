<?php

    function connect_db($host, $username, $passwd, $port, $db) {
        try {
            $connexion = new PDO('mysql:host = $host, dbname=$db, port = $port', $username, $passwd);
            echo "Connection to DB successful\n";
            return $connexion;
        } catch (PDOException $e) {
            echo "Error connection to DB\n";
            error_log("Error connection to DB\n", 3, 'error.log');
        }
    }
    if ($argc != 6) {
        echo "Bad params! Usage: php connect_db.php host username password port db\n";
        error_log("Bad params! Usage: php connect_db.php host username password port db\n", 3, 'error.log');
    } else
        connect_db($argv[1], $argv[2], $argv[3], $argv[4], $argv[5]);
?>