<?php
    function my_very_secure_hashed($password) {
        return md5($password);
    }
?>