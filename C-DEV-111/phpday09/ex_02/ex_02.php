<?php

    function my_password_hash(string $password) {
        $salt = uniqid();
        $hash = crypt($password, $salt);
        return array(
            "hash" => $hash,
            "salt" => $salt
        );
    }

    function my_password_verify(string $password, string $salt, string $hash) {
        if (hash_equals($hash, crypt($password, $salt)))
            return true;
        else
            return false;
    }
?>