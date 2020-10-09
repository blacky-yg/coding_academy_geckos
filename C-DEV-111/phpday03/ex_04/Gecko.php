<?php
    class Gecko
    {
        private $name;
        private $Age;
        public function __construct($name_par = null, $Age_par = null) {
            if ($name_par != null) {
                echo "Hello $name_par !\n";
                $this->name = $name_par;
                if ($Age_par != null) {
                    $this->Age = $Age_par;
                }
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

        public function setAge($Age_par) {
            $this->Age = $Age_par;
        }

        public function getAge() {
            return $this->Age;
        }

        public function status() {
            switch ($this->Age) {
                case 0:
                    echo "Unborn Gecko\n";
                    break;
                case 1:
                case 2:
                    echo "Baby Gecko\n";
                    break;
                case 3:
                case 4:
                case 5:
                case 6:
                case 7:
                case 8:
                case 9:
                case 10:
                    echo "Adult Gecko\n";
                    break;
                case 11:
                case 12:
                case 13:
                    echo "Old Gecko\n";
                    break;
                default:
                    echo "Impossible Gecko\n";
                    break;
            }
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