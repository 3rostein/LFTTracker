<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="view/styles/style.css">
    <title></title>
</head>
<body>

<nav>
    <h1 id="logo">LFT</h1>

    <ul id="nav-list">
        <li class="nav-item">About</li>
        <li class="nav-item">Contact</li>
        <li class="nav-item" id="important"><a href="view/login.php">Login</a></li>
    </ul>
</nav>

<header>
    <div id="title-block">
        <h1 id="title">LOOKING FOR TEAM</h1>
        <h3 id="subtitle">Where Players and Teams Meet</h3>
        <button id="get-started">Get Started</button>
    </div>
</header>


<section id="about">
    <h1 class="section-header">About</h1>

    <?php 

        if(empty($all_users)) {
            echo "No Users";
        } else {

        foreach($all_users as $user) {
            ?> 
            <li><?php echo $user["username"]; ?></li>
            <?php
        }
    }
    ?>


</section>


    
</body>
</html>