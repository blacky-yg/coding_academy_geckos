<?php

    class Character
    {
        private $name;
        private $strength;
        private $magic;
        private $intelligence;
        private $life;
        static $id = 1;

        public function __construct($name = null, $id_par = null) {
            if ($name != null)
                $this->name = $name;
            else {
                $this->id_par = self::$id++;
                $this->name = "Character".$this->id_par;
            }
            $this->strength = 0;
            $this->magic = 0;
            $this->intelligence = 0;
            $this->life = 100;
        }

        public function __toString() {
            return "My name is ".$this->name.".\n";
        }

        // public function __get($attribute) {
        //     switch ($attribute) {
        //         case 'name':
        //             return $this->getName();
        //         break;
        //         case 'strength':
        //             return $this->getStrength();
        //         break;
        //         case 'magic':
        //             return $this->getMagic();
        //         break;
        //         case 'intelligence':
        //             return $this->getIntelligence();
        //         break;
        //         case 'life':
        //             return $this->getLife();
        //         break;
        //         default:
        //             break;
        //     }
        // }

        public static function getId() {
            return $this->id_par;
        }

        protected function getName() {
            return $this->name;
        }

        protected function getStrength() {
            return $this->strength;
        }

        protected function getMagic() {
            return $this->magic;
        }

        protected function getIntelligence() {
            return $this->intelligence;
        }

        protected function getLife() {
            return $this->life;
        }
    }
?>