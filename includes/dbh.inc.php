<?php

class Dbh
{
    private $host = "localhost";
    private $dbname = ""; // CHANGE
    private $dbusername = "root";
    private $dbpassword = "";

    private static $connection = null;

    protected function __construct(){}

    public static function connect(){
        if(!self::$connection){
            try{
                $pdo = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->dbusername, $this->dbpassword);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$connection = $pdo;
            } catch(PDOException $e) {
                die("Connection failed: " . $e->getMessage());
            }
        }
        return self::$connection;
    }

    public static function close(){
        if(self::$connection) {
            self::$connection = null;
        }
        return null;
    }
}