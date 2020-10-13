<?php
    include("Animal.php");

    class Cat extends Animal
    {
        private $color;
        public $name;
        public $legs;
        public $type;

        public function __construct($name, $color = null) {
            if ($name != null) {
                $this->name = $name;
                $this->legs = 4;
                $this->type = self::MAMMAL;
                parent::__construct($this->name, $this->legs, $this->type);
                if ($color != null)
                    $this->color = $color;
                else
                    $this->color = "grey";
                echo $this->name.": MEEEOOWWWW\n";
            }
        }

        public function meow() {
            echo $this->name." the ".$this->color." kitty is meowing.\n";
        }

        public function setColor($color) {
            $this->color = $color;
        }

        public function getColor() {
            return $this->color;
        }
    }

?>