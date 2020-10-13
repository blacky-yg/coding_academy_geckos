<?php
    require 'Mars.php';
    class Astronaut
    {
        public static $id = 0;
        public $name;
        public static $snacks;
        public static $destination = null;

        public function __construct($name, $snacks_par = null, $destination_par = null, $id_num = null) {
            $this->name = $name;
            $this->snacks_par = self::$snacks++;
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

        public function getSnacks() {
            return $this->snacks_par;
        }

        public function doActions($opt = null) {
            if ($opt == null)
                echo $this->name.": Nothing to do.\n";
            else {
                if ($opt instanceof planet\Mars)
                    echo $this->name.": started a mission !\n";
                else if ($opt instanceof chocolate\Mars)
                    echo $this->name." is eating mars number ".$opt->getId()."\n";
            }
        }

        public function __destruct() {
            if ($this->destination_par)
                echo $this->name.": Mission aborted !\n";
            else
                echo $this->name.": I may have done nothing, but I have ". $this->getSnacks()." Mars to eat at least !\n";
        }
    }
?>