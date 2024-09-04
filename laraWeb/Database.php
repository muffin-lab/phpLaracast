<?php

// my sql database connection
// PDO = php data objects
// $dsn = data source name (port to connection to database)

class Database
{
  public $connection;
  public function __construct()
  {
    $dsn = "mysql:host=localhost;port=3306;dbname=mydb";

    $username = 'admin';
    $password = '';

    $this->connection = new PDO($dsn, $username, $password);
  }
  public function query($query)
  {
    $statement = $this->connection->prepare($query);

    $statement->execute();

    return $statement;
  }
}