<?php
class Db
{
  public static function connect()
  {
    try {
      $dsn = "mysql:dbname=test;host=db;";
      $user = "root";
      $password = "password";
      $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
      ];
      $dbh = new PDO($dsn, $user, $password, $options);
      $dbh->query('SET NAMES utf8');
      return $dbh;
    } catch (\Throwable $th) {
      throw $th;
      var_dump($th);
    }
  }
}