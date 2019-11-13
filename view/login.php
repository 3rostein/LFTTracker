<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/login.css">
    <title>Login</title>
</head>
<body>

<nav>
    <h1 id="logo">LFT</h1>

    <ul id="nav-list">
        <li class="nav-item">About</li>
        <li class="nav-item">Contact</li>
        <li class="nav-item" id="important"><a href="view/sign_up.php">Sign Up</a></li>
    </ul>
</nav>

<form action="index.php" method="post" id="login-form">
    <input type="hidden" name="action" value="login">
    
    <label>Email</label>
    <input type="text" name="email" id="email-input">
    <br>
    <label>Password</label>
    <input type="text" name="password" id="password-input">

    <input type="submit" value="Log In">
    <div id="sign-up">
        <p>Don't have an account? <a href="sign_up.php">Sign Up</a></p>  
    </div>
    

</form>


    
</body>
</html>