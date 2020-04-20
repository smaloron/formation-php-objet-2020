<?php

//Auto chargement de toutes les classes
require "../vendor/autoload.php";

$app = new \m2i\customFramework\Application();
$app->setAppName("Touitaire");

echo $app->getAppName();