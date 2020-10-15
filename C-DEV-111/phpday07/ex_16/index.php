<?php
    include_once("ex_15.php");
    include_once("ex_16.php");

    $spaceMarine = new \Imperium\Soldier("Gessart");
    $chaosSpaceMarine = new \Chaos\Soldier("Ruphen");
    $new = new Scanner();
    $new->scan($chaosSpaceMarine);
    // echo $spaceMarine.PHP_EOL;
    // echo $chaosSpaceMarine.PHP_EOL;
    // $spaceMarine->doDamage($chaosSpaceMarine);
    // echo $spaceMarine.PHP_EOL;
    // echo $chaosSpaceMarine.PHP_EOL;
?>