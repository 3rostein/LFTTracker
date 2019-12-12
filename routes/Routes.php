<?php
session_start();

Router::set('index.php', function () {
    include('./views/index.php');
});

Router::set('login.php', function () {

    $action = filter_input(INPUT_POST, 'action');

    if ($action == 'login') {
        $username = filter_input(INPUT_POST, 'username');
        $_SESSION['username'] = $username;

        $password = filter_input(INPUT_POST, 'password');
        $error_msg = "";

        $user = new User();
        $user::setUsername($username);

        if (Login::isUser($user)) {
            $this_user = Login::getUser($user::getUsername());
            $user_pass = $this_user['password'];
            echo $password . "<br>";
            echo $user_pass;
            if (password_verify($password, $user_pass)) {
                header("Location: ./profile.php");
                include("./views/profile.php");
            } else {
                $error_msg = "Invalid Password";
                include('./views/login.php');
            }
        } else {
            $error_msg = "User does not exist";
            include('./views/login.php');
        }
    } else {
        $username = "";
        $password = "";
        $error_msg = "";
        include('./views/login.php');
    }
});

Router::set('sign_up.php', function () {
    $action = filter_input(INPUT_POST, 'action');
    if ($action == 'sign_up') {

        $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
        $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $username = filter_input(INPUT_POST, 'username');
        $password = filter_input(INPUT_POST, 'password');
        $confirm_password = filter_input(INPUT_POST, 'confirm_password');
        $user_type = filter_input(INPUT_POST, 'user_type');
        $error_msg = "";
        $user = User::createUser($firstname, $lastname, $email, $username, $password, $confirm_password, $user_type);
        if (is_a($user, 'User')) {
            if (!Login::isUser($user)) {
                SignUp::addUserDB($user);
                header("Location: ./profile.php");
                include('./views/profile.php');
            } else {
                $error_msg .= "Username is taken";
            }
        } else {
            $error_msg .= $user;
            include('./views/sign_up.php');
        }
    } else {
        $firstname = "";
        $lastname = "";
        $email = "";
        $username = "";
        $password = "";
        $error_msg = "";
        include('./views/sign_up.php');
    }
});

Router::set('profile.php', function () {
    $username = $_SESSION['username'];
    $user = Login::getUser($username);
    include('./views/profile.php');
});
