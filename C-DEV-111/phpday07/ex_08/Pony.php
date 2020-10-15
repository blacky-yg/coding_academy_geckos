<?php
    class Pony
    {
        private $gender;
        private $name;
        private $color;

        public function __construct($gender, $name, $color) {
            $this->gender = $gender;
            $this->name = $name;
            $this->color = $color;
        }

        public function __set($attribue, $value) {
            switch ($attribute) {
                case 'gender':
                    echo "It's not right to get a private attribute!\n";
                    return $this->setGender($value);
                break;
                case 'name':
                    echo "It's not right to get a private attribute!\n";
                    return $this->setName($value);
                break;
                case 'color':
                    echo "It's not right to get a private attribute!\n";
                    return $this->setColor($value);
                break;
                default:
                    echo "There is no attribute:".$attribue.".\n";
                    break;
            }
        }

        public function __get($attribute) {
            switch ($attribute) {
                case 'gender':
                    echo "It's not right to get a private attribute!\n";
                    return $this->getGender();
                break;
                case 'name':
                    echo "It's not right to get a private attribute!\n";
                    return $this->getName();
                break;
                case 'color':
                    echo "It's not right to get a private attribute!\n";
                    return $this->getColor();
                break;
                default:
                    echo "There is no attribute:".$attribue.".\n";
                    break;
            }
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

        public function setGender($gender) {
            $this->gender = $gender;
        }

        public function getGender() {
            return $this->gender;
        }

        public function setName($name) {
            $this->name = $name;
        }

        public function getName() {
            return $this->name;
        }

        public function setColor($color) {
            $this->color = $color;
        }

        public function getColor() {
            return $this->color;
        }

        public function speack() {
            echo "Hiii hiii hiii\n";
        }

        public function __destruct() {
            echo "I'm a dead pony.\n";
        }
    }
?>