<?php
    class Pony
    {
        public $gender;
        public $name;
        public $color;

        public function __construct($gender, $name, $color) {
            $this->gender = $gender;
            $this->name = $name;
            $this->color = $color;
        }

        public function __call($name, $arguments) {
            if (method_exists($this, $name)) {
                $this->name;
            } else {
                echo "I don't know what to do...\n";
            }
        }

        public function __toString() {
            return "Don't worry, I'm a pony!\n";
        }

        public function speack() {
            echo "Hiii hiii hiii\n";
        }

        public function __destruct() {
            echo "I'm a dead pony.\n";
        }
    }
?>