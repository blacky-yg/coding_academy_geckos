<?php
    class Gecko
    {
        public $name;
        public function __construct($name_par = null) {
            if ($name_par != null) {
                echo "Hello $name_par !\n";
                $this->name = $name_par;
            } else {
                echo "Hello !\n";
            }
        }
    }
?>