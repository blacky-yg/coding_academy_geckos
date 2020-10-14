<?php
    abstract class AWeapon
    {
        public string $name;
        public int $apcost;
        public int $damage;
        public bool $melee = false;
        public abstract function attack();

        public function __construct($name, $apcost, $damage, $melee) {
            if (!is_string($name) || !is_int($apcost) || !is_int($damage) || !is_bool($melee))
                throw new Exception("Error in AWeapon constructor. Bad parameters.");
            else {
                $this->name = $name;
                $this->apcost = $apcost;
                $this->damage = $damage;
                $this->melee = $melee;
            }
        }

        public function getName() {
            return $this->name;
        }

        public function getApcost() {
            return $this->apcost;
        }

        public function getDamage() {
            return $this->damage;
        }

        public function isMelee() {
            return $this->melee;
        }
    }

    class Weapon extends Aweapon {
    }
?>