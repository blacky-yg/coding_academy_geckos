<?php

    class Animal
    {
        const MAMMAL = 0;
        const FISH = 1;
        const BIRD = 2;
        public $name;
        public $legs;
        public $type;
        public static $numberOfMammals = 0;
        public static $numberOfFishes = 0;
        public static $numberOfBirds = 0;
        static $id = 0;

        public function __construct($name, $legs, $type, $id_par = null) {
            if (($name != null) && ($legs != 0) && ($type == self::MAMMAL || $type == self::FISH || $type == self::BIRD)) {
                $this->name = $name;
                $this->legs = $legs;
                $this->type = $type;
                $this->id_par = self::$id++;
                echo "My name is ".$this->name." and I am a ".$this->getType()."!\n";
            }
        }

        public function getName() {
            return $this->name;
        }

        public function getLegs() {
            return $this->legs;
        }

        public function getType() {
            if ($this->type == 0) {
                self::$numberOfMammals++;
                return "mammal";
            } else if ($this->type == 1) {
                self::$numberOfFishes++;
                return "fish";
            } else if ($this->type == 2) {
                self::$numberOfBirds++;
                return "bird";
            }
        }

        public static function getNumberOfAnimalsAlive() {
            if (self::$id == 1)
                echo "There is currently ".self::$id." animal alive in our world.\n";
            else
                echo "There are currently ".self::$id." animals alive in our world.\n";
            return self::$id;
        }

        public static function getNumberOfMammals() {
            if (self::$numberOfMammals == 1)
                echo "There is currently ".self::$numberOfMammals." mammal alive in our world.\n";
            else
                echo "There are currently ".self::$numberOfMammals." mammals alive in our world.\n";
            return self::$id;
        }

        public static function getNumberOfFishes() {
            if (self::$numberOfFishes == 1)
                echo "There is currently ".self::$numberOfFishes." fish alive in our world.\n";
            else if (self::$numberOfFishes == 0)
                echo "There is currently ".self::$numberOfFishes." fish alive in our world.\n";
            else
                echo "There are currently ".self::$numberOfFishes." fishes alive in our world.\n";
            return self::$id;
        }

        public static function getNumberOfBirds() {
            if (self::$numberOfBirds == 1)
                echo "There is currently ".self::$numberOfBirds." bird alive in our world.\n";
            else
                echo "There are currently ".self::$numberOfBirds." birds alive in our world.\n";
            return self::$id;
        }
    }
?>