<?php
require_once __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . '/system/config.php';

$app = new \Slim\app();

$app->get('/', '\DEV\Controllers\HomeController:login');

$app->run();
?>