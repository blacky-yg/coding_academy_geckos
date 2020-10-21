<?php

    function connect_db($host, $username, $passwd, $port, $db) {
        try {
            $connexion = new PDO('mysql:host = $host, dbname=$db, port = $port', $username, $passwd);
            $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connexion;
        } catch (PDOException $e) {
            $log_file = "log.file";
            echo "PDO ERROR: ".$e->getMessage()." storage in ".$log_file."\n";
            error_log("PDO ERROR: ".$e->getMessage()." storage in ".$log_file."\n", 3, $log_file);
        }
    }

    function my_print_users(PDO $con, ...$ids) {
        foreach($ids as $id) {
            if (!is_int($id))
                throw new Exception("Invalid id given");
        }
        $rq = "SELECT * FROM users";
        // $id = 1;
        // $query->bindParam(':id', $id);
        // echo $query->execute();
        foreach ($con->query($rq) as $row) {
            echo $row['name'];
        }
    }

    try {
        $connexion = new PDO('mysql:host = localhost, dbname=gecko', "phpmyadmin", "19Blacky_yg");
        my_print_users($connexion, 1, 2, 3);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
?>