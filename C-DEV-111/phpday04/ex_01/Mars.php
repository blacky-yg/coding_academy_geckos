<?php
    class Mars
    {
        public static $id = 0;

        public function __construct($id_num = null) {
            $this->id_num = self::$id++;
        }

        public function getId() {
            return $this->id_num;
        }
    }
?>