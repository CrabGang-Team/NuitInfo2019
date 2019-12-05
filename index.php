<?php 

require __DIR__ . "/vendor/autoload.php";

$router = new AltoRouter();

$router->map( 'GET', '/', function() {
    require __DIR__ . '/views/home.php';
});

