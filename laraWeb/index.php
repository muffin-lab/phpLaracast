<?php

require "functions.php";

// require "router.php";

// my sql database connection
// PDO = php data objects
// $dsn = data source name (port to connection to database)

$dsn = "mysql:host=localhost;port=3306;dbname=mydb";

$username = 'admin';
$password = '';

$pdo = new PDO($dsn, $username, $password);

$statement = $pdo->prepare("SELECT * FROM posts");

$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
  echo "<li>" . $post['title'] . "</li>";
}
