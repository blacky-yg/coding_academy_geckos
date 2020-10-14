<?php
    include_once("AWeapon.php");

    class PowerFist extends AWeapon {

        public function __construct() {
            $this->name = "Power Fist";
            $this->damage = 50;
            $this->apcost = 8;
            $this->melee = true;
        }

        public function attack() {
            echo "SBAM\n";
        }
    }
?>