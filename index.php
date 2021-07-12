<?php

require __DIR__ . "/vendor/autoload.php";

use \CoffeeCode\Router\Router;

$route = new Router(url(), ":");
$route->namespace("Source\App");
$route->group(null);
$route->get("/", "Web:home");
$route->post("/search", "Web:post");

$route->dispatch();