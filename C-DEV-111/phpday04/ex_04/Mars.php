<?php

    namespace chocolate {
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
    }

    namespace planet {
        class Mars
        {
            public static $id = 0;
            private $size;

            public function __construct($id_num = null, $size_par = null) {
                $this->id_num = self::$id++;
                if ($size_par != null)
                    $this->size = $size_par;
            }

            public function getId() {
                return $this->id_num;
            }

            public function setSize($size_par) {
                $this->size = $size_par;
            }

            public function getSize() {
                return $this->size;
            }
        }
    }
?>