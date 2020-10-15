<?php

    class Skill
    {
    }

    class Gecko
    {
        public $friends;
        public $skills;

        public function __construct($friends, $skills) {
            if (is_array($friends) || is_null($friends) || is_a($skills, 'Skill')) {
                $this->friends = $friends;
                $this->skills = $skills;
            }
        }
    }
?>