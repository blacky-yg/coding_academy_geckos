<?php

    class Soldier
    {
        private $name;
        private $attack;
        private $hp;

        public function __construct ($_name, $_attack = 12, $_hp = 50) {
            list($this->name , $this->hp , $this->attack) = array($_name ,$_hp, $_attack);
        }

        public function gardeAVous () {
            echo (" Soldier " . $this -> name . " report on duty ! I have " . $this -> attack . "in ATK and " . $this ->hp . " hitpoints !\n");
        }

        public function getName() {
            return $this->name;
        }

        public function getAttack () {
            return $this->attack;
        }

        public function getHP() {
            return $this ->hp;
        }

        public function setName($name) {
            $this->name = $name;
        }

        public function setAttack($attack) {
            $this->attack = $attack;
        }

        public function setHP($hp) {
            $this->hp = $hp;
        }
    }

    class Gecko
    {
        private $name;

        public function __construct($name) {
            $this->name = $name;
        }

        public function __get($attribute) {
            if ($attribute == "name")
                $this->getName();
        }

        public function getName() {
            return $this->name;
        }

        public function correct($object) {
            if ($object instanceof Soldier) {
                if (1)
                    echo "Test <number> : Good!\n";
                else
                    echo "Test <number> : KO.\n";
            }
        }
    }
?>