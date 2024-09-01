<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
  "/" => "controllers/index.php",
  "/about" => "controllers/about.php",
  "/contact" => "controllers/contact.php"
];

function routeToController($uri, $routes)
{

  if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
  } else {
    abort();
  }
}

function abort($error = 404)
{
  http_response_code($error);
  require "views/404.view.php";
  die();
}

routeToController($uri, $routes);
