<?php

class Connection
{
    private static $host = "localhost";
    private static $user = "root";
    private static $pwd = "";
    private static $database = "eadvisorDB";

    public function selectData($r) {
        $connex = new PDO("mysql:host=".self::$host.";dbname=".self::$database.";", self::$user, self::$pwd);
        $ex = $connex->query($r);
        return $ex;
    }

    public function updateData($r) {
        $connex = new PDO("mysql:host=".self::$host."dbname=".self::$database, self::$user, self::$pwd); 
        $ex = $connex->exec($r);
        return $ex;
    }

}
