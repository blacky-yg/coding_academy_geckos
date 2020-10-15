<?php

    class Imperium
    {

    }

    class SpaceMarine extends Imperium
    {

    }

    class Heretic
    {

    }

    abstract class Apothecary
    {
        function heal($soldier) {
            if ($soldier instanceof \imperium || $soldier instanceof \imperium\SpaceMarine)
                echo "No servant of the Emperor shall fall if I can help it.\n";
            else
                echo "The ennemies of the Emperor shall be destroyed!\n";
        }
    }

    Apothecary::heal(new Imperium());
    Apothecary::heal(new SpaceMarine());
    Apothecary::heal(new Heretic());
?>