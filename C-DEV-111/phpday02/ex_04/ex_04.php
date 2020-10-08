<?php
    function my_password_hash(string $password): array {
        $salt = "5f7f58e9df0533.19921457";
        $hash = md5($password.$salt);
        return array(
            "hash" => $hash,
            "salt" => "5f7f58e9df0533.19921457"
        );
    };

    function my_password_verify(string $password, string $salt, string $hash) {
        $password_hash = my_password_hash($password, PASSWORD_DEFAULT, [$salt]);
        if ($hash == $password_hash) {
            return true;
        } else {
            return false;
        }
    };
?>