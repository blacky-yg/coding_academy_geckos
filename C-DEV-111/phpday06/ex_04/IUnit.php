<?php
    interface IUnit {
        public function equip($name);
        public function attack($name);
        public function receiveDamage($damage);
        public function moveCloseTo($name);
        public function recoverAP($apcost);
    }

?>