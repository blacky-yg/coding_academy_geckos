<?php
    include_once("Character.php");
    class Mage extends Character
    {
        const CLASSE = "Mage";

        public function __construct($name) {
            $this->name = $name;
            $this->life = 70;
            $this->agility = 10;
            $this->strength = 3;
            $this->wit = 10;
            echo $this->name.": May the gods be with me.\n";
        }

        public function MoveRight() {
            echo $this->name.": moves right furtively.\n";
        }

        public function MoveLeft() {
            echo $this->name.": moves left furtively.\n";
        }

        public function MoveUp() {
            echo $this->name.": moves up furtively.\n";
        }

        public function MoveDown() {
            echo $this->name.": moves down furtively.\n";
        }

        public function getClasse() {
            return self::CLASSE;
        }

        public function attack() {
            echo $this->name.": Feel the power of my magic!\n";
        }

        public function __destruct() {
            echo $this->name.": By the four gods, I passed away...\n";
        }
    }
?>