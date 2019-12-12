<?php

class User
{
    private static $firstname;
    private static $lastname;
    private static $username;
    private static $email;
    private static $password;
    private static $user_type;


    public function __construct()
    { }

    public static function setFirstname($firstname)
    {
        self::$firstname = self::validateFirstname($firstname);
    }

    public static function setLastname($lastname)
    {
        self::$lastname = self::validateLastname(($lastname));
    }

    public static function setUsername($username)
    {
        self::$username = self::validateUsername($username);
    }

    public static function setEmail($email)
    {
        self::$email = self::validateEmail($email);
    }

    public static function setPassword($password)
    {
        self::$password = self::validatePassword($password);
    }

    public static function setUserType($user_type)
    {
        self::$user_type = self::validUserType($user_type);
    }

    public static function getFirstname()
    {
        return self::$firstname;
    }

    public static function getLastname()
    {
        return self::$lastname;
    }

    public static function getUsername()
    {
        return self::$username;
    }

    public static function getEmail()
    {
        return self::$email;
    }

    public static function getPassword()
    {
        return self::$password;
    }

    public static function getUserType()
    {
        return self::$user_type;
    }

    public static function validateEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return $email;
        } else {
            return false;
        }
    }

    public static function validateUsername($username)
    {
        if (preg_match('/^[a-zA-Z0-9]+$/', $username)) {
            return $username;
        } else {
            return false;
        }
    }

    public static function validatePassword($password)
    {
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number = preg_match('@[0-9]@', $password);

        if ($uppercase && $lowercase && $number && strlen($password) > 10) {
            return password_hash($password, PASSWORD_BCRYPT);
        } else {
            return false;
        }
    }

    public static function validateFirstname($firstname)
    {
        if (preg_match('/^[a-zA-Z]+$/', $firstname) && strlen($firstname) > 1) {
            return $firstname;
        } else {
            return false;
        }
    }

    public static function validateLastname($lastname)
    {
        if (preg_match('/^[a-zA-Z]+$/', $lastname)) {
            return $lastname;
        } else {
            return false;
        }
    }

    public static function validUserType($user_type)
    {
        if (!$user_type === "team" || !$user_type === "player") {
            return false;
        } else {
            return $user_type;
        }
    }

    public static function createUser($firstname, $lastname, $email, $username, $password, $confirm_password, $user_type)
    {
        $user = new User();
        $errors = "";

        $user::setFirstname($firstname);
        $user::setLastname($lastname);
        $user::setEmail($email);
        $user::setUsername($username);
        $user::setUserType($user_type);

        if ($password == $confirm_password) {
            $user::setPassword($password);
        } else {
            $errors .= "Passwords do not match <br/>";
        }

        if (!$user::getFirstname()) {
            $errors .= "Firstname cannot be empty, and must made of letters. <br/>";
        }

        if (!$user::getLastname()) {
            $errors .= "Lastname cannot be empty, and must made of letters. <br/>";
        }

        if (!$user::getUsername()) {
            $errors .= "Username cannot be empty, and cannot have special characters. <br/>";
        }

        if (!$user::getEmail()) {
            $errors .= "Invalid Email. <br/>";
        }

        if (!$user::getPassword()) {
            $errors .= "Password must contain a lowercase letter, uppercase letter, number, special character, and be longer then 10 characters. <br/>";
        }

        if (!$user::getUserType()) {
            $errors .= "User Type is invalid";
        }

        if (!empty($errors)) {
            return $errors;
        } else {
            return $user;
        }
    }
}
