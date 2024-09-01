<?php

require "functions.php";

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

dd($_SERVER);

$routes = [
  "/" => "controllers/index.php",
  "/about" => "controllers/about.php",
  "/contact" => "controllers/contact.php"
];

if (array_key_exists($uri, $routes)) {
  require $routes[$uri];
} else {
  http_response_code(404);
  echo "Sorry Page not found.";
  die();
}
