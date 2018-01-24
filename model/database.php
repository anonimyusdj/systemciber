<?php
class Database{
    
    public static function Connetion(){
        $host="localhost";
        $database="systemcyber";
        $port="3306";
        $user="root";
        $pass="";
        
        $pdo=new PDO("mysql:host=$host;dbname=$database;port=$port;charset=utf8",$user,$pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        return $pdo;
    }
}