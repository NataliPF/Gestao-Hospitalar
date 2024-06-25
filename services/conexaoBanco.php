<?php

header("Content-type: application/json");

class Database {

    protected static $db;

    public function __construct()
    {
        try{
            $db_host = "localhost";
            $db_usuario = "root";
            $db_senha = "";
            $db_nome = "gestao_hospitalar";

            self::$db = new PDO("mysql:host=$db_host; dbname=$db_nome", $db_usuario, $db_senha);
            self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$db->exec("SET NAMES utf8");
        } catch (PDOException $e){
            die("Connection Error: ". $e->getMessage());
        }
    }

    public static function conexao(){
        if(!self::$db){
            new Database();
        }

        return self::$db;
    }
}

?>