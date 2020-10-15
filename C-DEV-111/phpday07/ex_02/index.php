<?php
include_once("Mage.php");
include_once("Warrior.php");

$warrior = new Warrior("Jean-Luc");
$mage = new Mage("Robert");

$warrior->attack();
$mage->attack();
// $perso = new Character ("Jean -Luc");

// echo $perso->getName() , PHP_EOL ;
// echo $perso->getLife() , PHP_EOL ;
// echo $perso->getAgility() , PHP_EOL ;
// echo $perso->getStrength() , PHP_EOL ;
// echo $perso->getWit() , PHP_EOL ;
// echo $perso->getClasse() , PHP_EOL ;
// displays : "Jean -Luc ", "50" , "2" , "2" , "2" and " Character "

?>