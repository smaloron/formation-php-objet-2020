<?php

spl_autoload_register(function ($className){
   require "classes/$className.php";
});


$address = new PostalAddress("75008", "Paris", "5 rue du Bac" );
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

$prof = new Teacher("Adams", "Niels", 46
                ,new EmailAddress("prof@moi.com")
                ,"M", ["Java"]);


echo "<pre>";
echo $prof->getAddressDetails();
echo "</pre>";



