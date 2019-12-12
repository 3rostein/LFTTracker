<?php

class Database
{
    private static $host = "localhost";
    private static $dbname = "lfttracker";
    private static $username = "root";
    private static $password = "";

    public static function newDB()
    {
        $host = self::$host;
        $dbname = self::$dbname;
        $db = new PDO("mysql:host={$host};dbname={$dbname}", self::$username, self::$password);
        return $db;
    }
}
