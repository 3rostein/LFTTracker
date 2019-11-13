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

<form action="../index.php" method="post">
    <input type="hidden" name="action" value="sign_up">
    
    <label>Username</label>
    <input type="text" name="username" id="username-input">

    <label>Email</label>
    <input type="text" name="email" id="email-input">
    <br>
    <label>Password</label>
    <input type="text" name="password" id="password-input">

    <input type="submit" value="Sign Up">
    

</form>


    
</body>
</html>