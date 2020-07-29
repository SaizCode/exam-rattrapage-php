<?php





class DBFactory
{
  public static function getMysqlConnexionPDO()
  {
    $db = new PDO('mysql:host=localhost;dbname=exam-comment', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    return $db;
  }
  
  public static function getMysqlConnexionhMySQLi()
  {
    return new MySQLi('localhost', 'root', '', 'news');
  }
}