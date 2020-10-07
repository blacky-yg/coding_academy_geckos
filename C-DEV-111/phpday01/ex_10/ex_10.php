<?php
    function my_get_args(...$var): array {
        for ($i = 0; $i < count($var); $i++)
            $result = $var[$i];
        return ($result);
    };
?>