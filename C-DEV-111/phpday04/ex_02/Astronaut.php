<?php
    class Astronaut
    {
        public static $id = 0;
        public $name;
        public $snacks;
        public static $destination = null;

        public function __construct($name, $snacks_par = null, $destination_par = null, $id_num = null) {
            $this->name = $name;
            $this->snakcs = 0;
            $this->destination_par = self::$destination;
            $this->id_num = self::$id++;
            echo $this->name." ready for launch !\n";
        }

        public function getId() {
            return $this->id_num;
        }

        public function getDestination() {
            return $this->destination_par;
        }
    }
?>