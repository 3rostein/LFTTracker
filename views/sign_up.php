<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/sign_up.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="assets/scripts/scripts.js"></script>
    <title>Document</title>
</head>

<body>
    <nav>
        <h1 id="logo"><a href="index.php">LFT</a></h1>
        <ul id="nav-list">
            <li class="nav-item">About</li>
            <li class="nav-item">Contact</li>
            <li class="nav-item" id="important"><a href="login.php">Login</a></li>
        </ul>
    </nav>
    <h1 class="page-heading">Sign Up</h1>
    <div id="team-player-signup">
        <h3 class="active">Player</h3>
        <h3>Team</h3>
    </div>

    <form action="sign_up.php" method="post" id="team-form" class="login-form">
        <h3>Team Form</h3>
        <input type="hidden" name="action" value="sign_up">

        <div class="input-group">
            <label>First Name</label>
            <input type="text" name="firstname" id="email-input" value="<?php htmlspecialchars($firstname) ?>">
        </div>

        <div class="input-group">
            <label>Last Name</label>
            <input type="text" name="lastname" id="email-input" value="<?php htmlspecialchars($lastname) ?>">
        </div>

        <div class="input-group">
            <label>Email</label>
            <input type="text" name="email" id="email-input" value="<?php htmlspecialchars($email) ?>">
        </div>

        <div class="input-group">
            <label>Username/Team Name</label>
            <input type="text" name="username" id="email-input" value="<?php htmlspecialchars($username) ?>">
        </div>

        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password" id="password-input" value="<?php htmlspecialchars($password) ?>">
        </div>

        <div class="input-group">
            <label>Confirm Password</label>
            <input type="password" name="confirm_password" id="password-input">
        </div>

        <input type="hidden" name="user_type" value="team">

        <input type="submit" value="Sign Up">

        <div id="sign-up">
            <p>Already have an account? <a href="login.php">Login</a></p>
        </div>

    </form>


    <form action="sign_up.php" method="post" id="player-form" class="active login-form">
        <h3>Player Form</h3>
        <input type="hidden" name="action" value="sign_up">

        <div class="input-group">
            <label>First Name</label>
            <input type="text" name="firstname" id="email-input" value="<?php htmlspecialchars($firstname) ?>">
        </div>

        <div class="input-group">
            <label>Last Name</label>
            <input type="text" name="lastname" id="email-input" value="<?php htmlspecialchars($lastname) ?>">
        </div>

        <div class="input-group">
            <label>Email</label>
            <input type="text" name="email" id="email-input" value="<?php htmlspecialchars($email) ?>">
        </div>

        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" id="email-input" value="<?php htmlspecialchars($username) ?>">
        </div>

        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password" id="password-input" value="<?php htmlspecialchars($password) ?>">
        </div>

        <div class="input-group">
            <label>Confirm Password</label>
            <input type="password" name="confirm_password" id="password-input">
        </div>

        <input type="hidden" name="user_type" value="player">

        <input type="submit" value="Sign Up">

        <div id="sign-up">
            <p>Already have an account? <a href="login.php">Login</a></p>
        </div>

    </form>

    <?php if ($error_msg) {
        ?>
        <h1 id="error_msg"><?php echo $error_msg ?></h1>
    <?php
    } ?>
</body>

</html>