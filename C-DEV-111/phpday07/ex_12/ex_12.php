<?php

    class Dolly
    {
        public $age;
        public $animal;
        public $doctor;

        public function __construct($age, $animal, $doctor) {
            $this->age = $age;
            $this->animal = $animal;
            $this->doctor = $doctor;
        }

        public function __clone() {
            echo "I will survive !\n";
        }
    }

    function clone_object($obj) {
        return (clone $obj);
    }

    $dolly = new Dolly(12, "Chien", "Good Doctor");
?>