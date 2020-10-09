<?php
    class Gecko
    {
        private $name;
        public function __construct($name_par = null) {
            if ($name_par != null) {
                echo "Hello $name_par !\n";
                $this->name = $name_par;
            } else {
                echo "Hello !\n";
            }
        }

        public function setName($name_par) {
            $this->name = $name_par;
        }

        public function getName() {
            return $this->name;
        }

        public function __destruct() {
            if ($this->name) {
                echo "Bye $this->name !\n";
            } else {
                echo "Bye !\n";
            }
        }
    }
?>