<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$routes = require "routes.php";

function routeToController(string $uri, array $routes = []): void
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        // Add abort fn
    }
}
routeToController($uri, $routes);