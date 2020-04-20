<?php

require "classes/Person.php";
require "classes/Address.php";
require "classes/Student.php";


$address = new Address("75008", "Paris", "5 rue du Bac" );
$alice = new Person("Soltidon", "Alice", 27, $address);

$alice->setAge(30)->setName("Martin");

echo "<pre>";
var_dump($alice);
echo "</pre>";

echo $alice->getFullName();

$alice->setSex("M")->setFirstName("Pierre");

echo $alice->getFullName();

echo $alice->getAddressDetails();

$pierre = new Student(
    "PHP",
    "Leblanc",
    "Pierre",
    32,
    $address,
    "M"
);

echo $pierre->getFullName();




