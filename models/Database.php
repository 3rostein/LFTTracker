<?php
class Database {

    private static $dsn = "mysql:host=localhost;dbname=lfttracker";
    private static $username = "root";
    private static $password = '';
    private static $db;

    function getDB() {
        if(!isset(self::$db)) {
            try {
                self::$db = new PDO(self::$dsn, self::$username, self::$password);

                self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $e) {
                $error_message = $e->getMessage();
                exit();
            }
        }

        return self::$db;
    }

}