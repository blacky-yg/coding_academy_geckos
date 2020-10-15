<?php
    include_once("IMovable.php");

    class Character implements IMovable
    {
        protected $name;
        protected $life;
        protected $agility;
        protected $strength;
        protected $wit;
        const CLASSE = "Character";

        public function __construct($name) {
            $this->name = $name;
            $this->life = 50;
            $this->agility = 2;
            $this->strength = 2;
            $this->wit = 2;
        }

        public function MoveRight() {
            echo $this->name.": moves right.\n";
        }

        public function MoveLeft() {
            echo $this->name.": moves left.\n";
        }

        public function MoveUp() {
            echo $this->name.": moves up.\n";
        }

        public function MoveDown() {
            echo $this->name.": moves down.\n";
        }

        final public function unsheathe() {
            echo $this->name.": unsheathes his weapon.\n";
        }

        public function getName() {
            return $this->name;
        }

        public function getLife() {
            return $this->life;
        }

        public function getAgility() {
            return $this->agility;
        }

        public function getStrength() {
            return $this->strength;
        }

        public function getWit() {
            return $this->wit;
        }

        public function getClasse() {
            return self::CLASSE;
        }
    }
?>