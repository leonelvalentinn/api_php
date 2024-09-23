<?php
  class UsersDatabase {
    private $host = '127.0.0.1';
    private $username = 'root';
    private $password = '';
    private $nameDB = 'users';

    public function getConnection() {
      $hostDB = 'mysql:host=' . $this->host . ';dbname=' . $this->nameDB . ';';
      
      try {
        $connection = new PDO($hostDB, $this->username, $this->password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connection;
      } catch (PDOException $e) {
        die('Error Connection' . $e->getMessage());
      }
    }
  }