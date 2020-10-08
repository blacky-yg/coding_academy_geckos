<?php
    function my_create_map(...$array) {
        $result = array();
        if (!is_array($array)) {
            echo "The given arguments aren't valid.\n";
            return (NULL);
        } else {
            for ($i = 0; $i < count($array); $i++) {
                for ($j = 0; $j < count($array[$i]); $j++) {
                    if (count($array[$i]) < 2) {
                        echo "The given arguments aren't valid.\n";
                        return (NULL);
                    } else
                        $result = array_merge($result, array($array[$i][0] => $array[$i][1]));
                }
            }
            return $result;
        }
    };
?>