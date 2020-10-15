<?php
    include_once("ex_18.php");

    $gecko = new Gecko("Gecko");
    echo $gecko->getName(). " starts to check:\n";
    $soldat = new Soldier("James Francis Ryan");
    $gecko->correct($soldat);

?>