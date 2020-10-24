<?php

    function my_show_db(PDO $con, string $table) {
        $table_exist = $con->query("SELECT 1 FROM $table LIMIT 1");
        if (!$table_exist || empty($table))
            throw new Exception("Table not found.\n");
        else {
            $sql = "SELECT * FROM $table";
            if (is_array($con->query($sql)) || is_object($con->query($sql)))
                foreach ($con->query($sql) as $row)
                    yield "[id]=>[".$row["id"]."], [name]=>[".$row["name"]."], [password]=>[".$row["password"]."], [email]=>[".$row["email"]."], [created_at]=>[".$row["created_at"]."], [is_admin]=>[".$row["is_admin"]."]\n";
        }
    }

    try {
        $con = new PDO('mysql:host=localhost; dbname=gecko', "phpmyadmin", "19Blacky_yg");
        $generator = my_show_db($con, "users");
        foreach ($generator as $line)
            echo $line;
    } catch (Exception $e) {
        echo $e->getMessage();
    }

?>