<?php
    include_once("Animal.php");
    $isidore = new Animal("Isidore", 4, Animal::MAMMAL);
    $isidor = new Animal("Isidore", 4, Animal::FISH);
    $isido = new Animal("Isidore", 4, Animal::FISH);
    $isidore->getNumberOfFishes()."\n";
    $isidor->getNumberOfFishes()."\n";
    $isido->getNumberOfFishes()."\n";
?>