<?php

    function my_print_users(PDO $con, ...$ids) {
        $valid = false;
        foreach ($ids as $id) {
            if (!is_int($id))
                throw new Exception("Invalid id given.\n");
            else {
                $sql = "SELECT * FROM gecko.users WHERE id=".$id;
                if (is_array($con->query($sql)) || is_object($con->query($sql))) {
                    foreach ($con->query($sql) as $row)
                        if ($row != null) {
                            $valid = true;
                            echo $row["name"]."\n";
                        } else
                            $valid = false;
                }
            }
        }
        return $valid;
    }

    try {
        $con = new PDO('mysql:host = localhost, dbname=gecko', "phpmyadmin", "19Blacky_yg");
        var_dump(my_print_users($con, 1));
    } catch (Exception $e) {
        echo $e->getMessage();
    }
?>