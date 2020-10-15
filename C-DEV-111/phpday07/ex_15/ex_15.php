<?php

    namespace Imperium {
        class Soldier
        {
            private $hp;
            private $attack;
            private $name;

            public function __construct($name, $hp = null, $attack = null) {
                $this->name = $name;
                $this->hp = 50;
                $this->attack = 12;
            }

            public function __set($attribute, $value) {
                switch ($attribute) {
                    case 'hp':
                        return $this->setHp($value);
                    break;
                    case 'attack':
                        return $this->setAttack($value);
                    break;
                    case 'name':
                        return $this->setName($value);
                    break;
                    default:
                        break;
                }
            }

            public function __get($attribute) {
                switch ($attribute) {
                    case 'hp':
                        return $this->getHp($attribue);
                    break;
                    case 'attack':
                        return $this->getAttack($attribue);
                    break;
                    case 'name':
                        return $this->getName($attribue);
                    break;
                    default:
                        break;
                }
            }

            public function __toString() {
                return $this->name." the ".__NAMESPACE__." Space Marine : ".$this->hp." HP.";
            }

            public function doDamage($soldier) {
                $soldier->hp = $soldier->hp - $this->attack;
            }

            public function setHp($hp) {
                $this->hp = $hp;
            }

            public function getHp() {
                return $this->hp;
            }

            public function setAttack($attack) {
                $this->attack = $attack;
            }

            public function getAttack() {
                return $this->attack;
            }

            public function setName($name) {
                $this->name = $name;
            }

            public function getName() {
                return $this->name;
            }
        }
    }

    namespace Chaos {
        class Soldier
        {
            private $hp;
            private $attack;
            private $name;

            public function __construct($name, $hp = null, $attack = null) {
                $this->name = $name;
                $this->hp = 70;
                $this->attack = 12;
            }

            public function __set($attribute, $value) {
                switch ($attribute) {
                    case 'hp':
                        return $this->setHp($value);
                    break;
                    case 'attack':
                        return $this->setAttack($value);
                    break;
                    case 'name':
                        return $this->setName($value);
                    break;
                    default:
                        break;
                }
            }

            public function __get($attribute) {
                switch ($attribute) {
                    case 'hp':
                        return $this->getHp($attribute);
                    break;
                    case 'attack':
                        return $this->getAttack($attribute);
                    break;
                    case 'name':
                        return $this->getName($attribute);
                    break;
                    default:
                        break;
                }
            }

            public function __toString() {
                return $this->name." the ".__NAMESPACE__." Space Marine : ".$this->hp." HP.";
            }

            public function doDamage(Soldier $soldier) {
                $soldier->hp = $soldier->hp - $this->attack;
            }

            public function setHp($hp) {
                $this->hp = $hp;
            }

            public function getHp() {
                return $this->hp;
            }

            public function setAttack($attack) {
                $this->attack = $attack;
            }

            public function getAttack() {
                return $this->attack;
            }

            public function setName($name) {
                $this->name = $name;
            }

            public function getName() {
                return $this->name;
            }
        }
    }
?>