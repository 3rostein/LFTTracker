<?php

class Login extends Controller
{
    // public static function log_in($username, $password)
    // { }

    public static function isUser(User $user)
    {
        $sql = "SELECT * FROM user WHERE user.username=:username";
        $conn = Database::newDB();

        $statement = $conn->prepare($sql);
        $statement->bindValue(':username', $user::getUsername());
        $statement->execute();
        $user = $statement->fetch();
        $statement->closeCursor();

        if (!empty($user)) {
            return true;
        } else {
            return false;
        }
    }

    public static function getUser($username)
    {
        $sql = "SELECT * FROM user WHERE user.username=:username";
        $conn = Database::newDB();

        $statement = $conn->prepare($sql);
        $statement->bindValue(':username', $username);
        $statement->execute();
        $user = $statement->fetch();
        $statement->closeCursor();

        return $user;
    }

    public static function emailAvail($email)
    {
        $conn = Database::newDB();
        $query = 'SELECT * FROM user WHERE email = :email';
        $statement = $conn->prepare($query);
        $statement->bindValue(':email', $email);
        $statement->execute();
        $results = $statement->fetchAll();
        $statement->closeCursor();

        if (empty($results)) {
            return true;
        } else {
            return false;
        }
    }
}
