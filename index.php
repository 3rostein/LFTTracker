<?php
    require_once 'models/Database.php';
    require_once 'models/validation.php';
    require_once 'models/UserDA.php';

    $action = filter_input(INPUT_POST, 'action');

    if($action == NULL) {
        $action = filter_input(INPUT_GET, 'action');
        if($action == NULL) {
            $action = 'home';
        }

    }


    switch($action) {
        case 'home':
            
            include('view/home.php');
            break;

        case 'login':
            $email = filter_input(INPUT_POST, 'email');
            $password = filter_input(INPUT_POST, 'password');
            $message = "";

            $message .= Validation::isNotEmpty($email, "Email");
            $message .= Validation::isNotEmpty($password, "Password");
            include('view/login.php');
            break;

        case 'sign_up':

            $username = filter_input(INPUT_POST, 'username');
            $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
            $password = filter_input(INPUT_POST, 'password');
            $message = "";

            UserDA::insert_user($username, $password_hash, $email);
            include("view/profile.php");
            break;

            // $message .= Validation::isNotEmpty($username, "Username");
            // $message .= Validation::isNotEmpty($email, "Email");
            // $message .= Validation::isNotEmpty($password, "Password");

            // $message .= Validation::validUsername($username, "Username");

            // $password_hash = Validation::passwordValidation($password);

            // if(!UserDA::isEmailAvailable($email)) {
            //     $message .= "Email is taken" . "\n";
            // }
            
            // if(!UserDA::isUserAvailable($username)) {
            //     $message .= "Username is taken" . "\n";
            // }
            
            // if($password_hash === false) {
            //     $message .= "Password requires a digit, special character, an uppercase letter, and must be 10+ characters long" . "\n";
            // }

            // if($message == "") {
                
            // } else {
            //     include("view/sign_up.php");
            // }
    
        

    }
?>
