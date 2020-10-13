<?php

    class Animal
    {
        const MAMMAL = 0;
        const FISH = 1;
        const BIRD = 2;
        public $name;
        public $legs;
        public $type;

        public function __construct($name, $legs, $type) {
            if (($name != null) && ($legs != 0) && ($type == self::MAMMAL || $type == self::FISH || $type == self::BIRD)) {
                $this->name = $name;
                $this->legs = $legs;
                $this->type = $type;
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
            if ($this->type == 0)
                return "mammal";
            else if ($this->type == 1)
                return "fish";
            else if ($this->type == 2)
                return "bird";
        }
    }
?>