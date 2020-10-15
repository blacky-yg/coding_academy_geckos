<?php

    function objects_comparison($object1, $object2) {
        if ($object1 == clone($object2))
            echo "Objects are equal.\n";
        else if (get_class($object1) == get_class($object2))
            echo "Objects are the same.\n";
        else
            echo "\n";
    }

?>