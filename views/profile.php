<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <title><?php echo $user['username']; ?> | LFT Page</title>
</head>

<body>
    <nav>
        <h1 id="logo"><a href="index.php">LFT</a></h1>
        <!-- <ul id="nav-list">
            <li class="nav-item">About</li>
            <li class="nav-item">Contact</li>
            <li class="nav-item" id="important"><a href="sign_up.php">Sign Up</a></li>
        </ul> -->
    </nav>

    <div class="user-profile">
        <h1><?php echo $user['username']; ?></h1>
    </div>




</body>

</html>