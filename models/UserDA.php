<?php

require_once 'Database.php';

class UserDA {
    

    public static function select_all() {       
        $db = Database::getDB();
        
        $query = 'SELECT * FROM user';
        $statement = $db->prepare($query);
        $statement->execute();
        $results = $statement->fetchAll();
        
        $statement->closeCursor();
        
        return $results;
    }

    public static function insert_user($username, $password, $email) {
        $db = Database::getDB();

        $query = 'INSERT INTO user(username, password, email) VALUES(:username, :password, :email)';
        $statement = $db->prepare($query);
        $statement->bindValue(':username', $username);
        $statement->bindValue(':password', $password);
        $statement->bindValue(':email', $email);
        $statement->execute();
        $statement->closeCursor();
    }

    public static function isUserAvailable($username) {
        $db = Database::getDB();

        $query = 'SELECT username FROM user WHERE user.username = :username';
        $statement = $db->prepare($query);
        $statement->bindValue(':username', $username);
        $statement->execute();
        $users = $statement->fetchAll();
        $statement->closeCursor();
        if(empty($users)) {
            return true;
        } else {
            return false;
        }
    }

    public static function isEmailAvailable($email)   {
        $db = Database::getDB();
        $query = 'SELECT email FROM user WHERE user.email = :email';
        $statement = $db->prepare($query);
        $statement->bindValue(':email', $email);
        $statement->execute();
        $users = $statement->fetchAll();
        $statement->closeCursor();
        if(empty($users)) {
            return true;
        } else {
            return false;
        }
    }


    public static function validPassword($username, $password) {
        $db = Database::getDB();
        
        $query = "SELECT password FROM user WHERE user.username = :username";
        $statement = $db->prepare($query);
        $statement->bindValue(':username', $username);
        $statement->execute();
        $hash = $statement->fetchAll();
        $statement->closeCursor();
        if ($hash != false && !empty($hash)) {
            $hashString = $hash[0]["password"];
            
            if (password_verify($password, $hashString)) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

}