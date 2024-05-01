<?php

require_once "Frog.php";
require_once "Ape.php";

$sheep = new animal("Shaun");
echo "Name : " .$sheep-> get_name();
echo "<br/> Legs : " .$sheep-> get_legs();
echo "<br/> Cold Blooded : " .$sheep-> get_cold_blooded();
echo "<br/>";
echo "<br/>";

$kodok = new Frog("Buduk");
$kodok->getFrogName();
$kodok->getFrogLegs();
$kodok->getFrogBlood();
$kodok->getFrogJump();
echo "<br/>";
echo "<br/>";

$ape = new Ape("Kera Sakti");
$ape->getApeName();
$ape->getApeLegs();
$ape->getApeBlood();
$ape->getApeYell();

?>