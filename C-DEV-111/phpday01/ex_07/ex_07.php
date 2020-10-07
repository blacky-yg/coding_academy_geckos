<?php
    function get_angry_dog(int $nbr): string {
        $result = "";
        if ($nbr <= 0) {
            return "\n";
        } else {
            for ($i = 1; $i <= $nbr; $i++) {
                $result = $result. "woof";
                if ($i == $nbr)
                    $result = $result. "\n";
            }
            return ($result);
        }
    };
?>