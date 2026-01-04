<?php

require_once ("Animal.php");
require_once ("Frog.php");
require_once ("Ape.php");

// membuat object dari class Animal
$sheep = new Animal("shaun");

// menampilkan properti
echo "Name : " . $sheep->name . "<br>";
echo "Legs : " . $sheep->legs . "<br>";
echo "Cold Blooded : " . $sheep->cold_blooded;

echo "<br><br>-------------------------------------<br><br>";

$kodok = new Frog("buduk");
echo "Name : " . $kodok->name . "<br>";
echo "Legs : " . $kodok->legs . "<br>";
echo "Cold Blooded : " . $kodok->cold_blooded . "<br>";
echo "Jump : " . $kodok->jump();

echo "<br><br>-------------------------------------<br><br>";

$sungokong = new Ape("kera sakti");
echo "Name : " . $sungokong->name . "<br>";
echo "Legs : " . $sungokong->legs . "<br>";
echo "Cold Blooded : " . $sungokong->cold_blooded . "<br>";
echo "Yell : " . $sungokong->yell();

?>