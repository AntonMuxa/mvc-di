<?php
require_once('app/bootstrap.php');

$factory = new \system\Factory\Factory();
$objectManager = new \system\ObjectManager($factory);
$app = $objectManager->create(\App::class);
//$app = new App;
$app->run();