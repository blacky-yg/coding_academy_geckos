<?php

    include_once("ex_15.php");
    class Scanner
    {
        public function scan($soldier) {
            if (!$soldier instanceof \imperirum\Soldier)
                echo "Praise be, Emperor, Lord.\n";
            else if (!$soldier instanceof \Chaos\Soldier)
                echo "Xenos spotted.\n";
        }
    }
?>