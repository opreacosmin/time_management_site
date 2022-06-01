<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Time management site</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-banner">
        <div class="topnav">
            <a href="index.php"><img src="resources/logo.png"</a>
            <nav>
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
            </nav>
        </div>
        <div class="container1-form">
            <h1>Login</h1>
            <img src="resources/profileicon.png">
            <div class="form">
                <form method="post" action="includes/login.inc.php">

                    <div>
                        <label>
                            Username/email:
                            <input type="text" name="username" placeholder="enter username or email">
                        </label>
                    </div>

                    <div>
                        <label>
                            Password:
                            <input type="password" name="password" placeholder="enter password">
                        </label>
                    </div>
                    <button type="submit" name="submit">Login</button>
                </form>
            </div>

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

