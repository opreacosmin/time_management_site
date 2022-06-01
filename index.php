<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Time management site</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>

<body>


<div class="index-banner">
    <div class="topnav">
        <a href="index.php"> <img src="resources/logo.png"</a>
        <ul>
            <?php
            if(isset($_SESSION["userid"]))
            {
                ?>
                <li><a href="includes/logout.inc.php">Logout</a></li>

                <?php
            }
            else{
                ?>
                <li><a href="login.php">Login</a></li>
                <?php
            }
            ?>
            <li><a href="register.php">Sign up</a></li>
            <li><a href="planner.php">My planner</a></li>

        </ul>
    </div>

    <h2> Start plannning now !</h2>

    <div class="btn-group">
        <?php
        if(isset($_SESSION["userid"]))
        {
            ?>
            <button onclick="location.href='planner.php'"> get started</button>
            <button onclick="location.href='register.php'">signup</button>
            <?php
        }
        else{
            ?>
            <button>login</button>
            <button>signup</button>
            <?php
        }
        ?>

    </div>




</div>

<div class="footer">
    <div class="footer-content">
        <h1>"The key is in not spending time, but in investing it." -- Stephen R. Covey</h1>
   <h2> About </h2>
        <p> Plan your weekly tasks</p>
    <div class="copyright">oprea cosmin © 2022</div>
    </div>
</div>


</body>
</html>


