<?php

    function remove_cookie(string $cookie) {
        setcookie($cookie, "", time() - 3600);
    }
?>