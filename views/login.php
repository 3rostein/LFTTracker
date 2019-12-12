<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Login</title>
</head>

<body>
    <nav>
        <h1 id="logo"><a href="index.php">LFT</a></h1>
        <ul id="nav-list">
            <li class="nav-item">About</li>
            <li class="nav-item">Contact</li>
            <li class="nav-item" id="important"><a href="sign_up.php">Sign Up</a></li>
        </ul>
    </nav>


    <form action="login.php" method="post" id="login-form">
        <h1>Login</h1>
        <input type="hidden" name="action" value="login active">

        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" id="email-input" value="<?php htmlspecialchars($username) ?>">
        </div>

        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password" id="password-input" value="<?php htmlspecialchars($password) ?>">
        </div>

        <input type="submit" value="Log In">

        <div id="sign-up">
            <p>Don't have an account? <a href="sign_up.php">Sign Up</a></p>
        </div>

    </form>

    <?php if (isset($error_msg)) {
        ?>
        <h1 id="error_msg"><?php echo $error_msg ?></h1>
    <?php
    } ?>

</body>

</html>