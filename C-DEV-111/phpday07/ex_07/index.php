<?php
// include_once("Mage.php");
// include_once("Warrior.php");

//EXO 1

// $perso = new Character ("Jean -Luc");
// echo $perso->getName() , PHP_EOL ;
// echo $perso->getLife() , PHP_EOL ;
// echo $perso->getAgility() , PHP_EOL ;
// echo $perso->getStrength() , PHP_EOL ;
// echo $perso->getWit() , PHP_EOL ;
// echo $perso->getClasse() , PHP_EOL ;
// displays : "Jean -Luc ", "50" , "2" , "2" , "2" and " Character "


// EXO 2
// $warrior = new Warrior("Jean-Luc");
// $mage = new Mage("Robert");
// $warrior->attack();
// $mage->attack();

// EXO 3

// $warrior = new Warrior("Jean-Luc");
// $warrior->moveRight();
// $warrior->moveLeft();
// $warrior->moveUp();
// $warrior->moveDown();

// EXO 4
// $warrior = new Warrior("Jean-Luc");
// $warrior->moveRight();
// $warrior->moveLeft();
// $warrior->moveUp();
// $warrior->moveDown();

// $mage = new Mage("Luc");
// $mage->moveRight();
// $mage->moveLeft();
// $mage->moveUp();
// $mage->moveDown();

// EXO 5
// $perso = new Mage("Jean-Luc");
// $perso->unsheathe();

// EXO 6
include_once("Pony.php");

$pony = new Pony("Male", "Pony", "Blue");

$pony->yo();
$pony->speak();
?>