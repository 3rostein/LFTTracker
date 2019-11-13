<?php

class User {
    private $username, $password, $email;

    function __construct($username, $password, $email) {
        $this->username=$username;
        $this->password=$password;
        $this->email=$email;
    }

    function getUsername() {
        return $this->username;
    }
    function getEmail() {
        return $this->email;
    }
    function getPassword() {
        return $this->password;
    }


    function setUsername($userName) {
        $this->userName = $userName;
    }
    function setEmail($email) {
        $this->email = $email;
    }
    function setPassword($password) {
        $this->password = $password;
    }

}