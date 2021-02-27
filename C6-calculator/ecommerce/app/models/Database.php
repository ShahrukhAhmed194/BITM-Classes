<?php
namespace App\models;
use mysqli;

class Database
{
  protected $hostName = 'localhost';
  protected $userName = 'root';
  protected $password = '';
  protected $dbname = 'ecommerce_app';

  protected $dbConnection;

  public function __construct()
  {
     $dbConnection = new mysqli(
         $this->hostName,
         $this->userName,
         $this->password,
         $this->dbname
     );
     $this->dbConnection = $dbConnection;
  }

  public function select($selectQuery)
  {
      $result = $this->dbConnection->query($selectQuery);
      $data = $result->fetch_All(MYSQLI_ASSOC);
      return $data;
  }
}