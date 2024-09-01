<?php

require "functions.php";

// require "router.php";

// my sql database connection
// PDO = php data objects
// $dsn = data source name (port to connection to database)

$dsn = "mysql:host=localhost;port=3306;dbname=dbdemo";

$username = 'root';
$password = 'root';

$pdo = new PDO($dsn, $username, $password);

$statement = $pdo->prepare("SELECT * FROM posts");

$statement->execute();

$posts = $statement->fetchAll();

dd($posts);
