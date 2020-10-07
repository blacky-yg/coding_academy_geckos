<?php
    function my_get_args(...$var): void {
        for ($i = 0; $i < count($var); $i++) {
            echo $var[$i]."\n";
        }
    };
?>