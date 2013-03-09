<?php
//Instantiating an object
$tim = new Person("brown", "6'3", "Kenyan", 230, "Big Money Tim", 33);
echo $tim->height."<br>";

$tom = new Person("blue", "5'4", "American", 195, "Big Fat Tom", 31);

$paul = new WebDeveloper("blue", "5'4", "American", 165, "Big Sexy Paul", 29, array("PHP, JavaScript, Ruby"));

//accessor methods
$paul->setProfession("Web Developer for Infosurv");
$paul->getProfession();
//echo $paul->profession;