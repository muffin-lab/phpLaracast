<?php

// my sql database connection
// PDO = php data objects
// $dsn = data source name (port to connection to database)

class Database
{
  public $connection;
  public function __construct($config, $username = 'root', $password = 'root')
  {
    $dsn = 'mysql:' . http_build_query($config, '', ';');

    $this->connection = new PDO($dsn, $username, $password, [
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
  }
  public function query($query, $params = [])
  {
    $statement = $this->connection->prepare($query);

    $statement->execute($params);

    return $statement;
  }
}