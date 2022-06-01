<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Time management site</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>


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
        <h1>Register</h1>
        <img src="resources/profileicon.png">

        <div class="form">
            <form method="post" action="includes/signup.inc.php">
                <div>
                    <label>
                        Username:
                        <input type="text" name="username" placeholder="enter username">
                    </label>
                </div>
                <div>
                    <label>
                        Full name:
                        <input type="text" name="name" placeholder="enter your full name">
                    </label>
                </div>
                <div>
                    <label>
                        Email:
                        <input type="text" name="email" placeholder="enter email">
                    </label>
                </div>
                <div>
                    <label>

                        Password:
                        <input type="password" name="password" placeholder="enter password">
                    </label>
                    <label>

                        Repeat password:
                        <input type="password" name="passwordrepeat" placeholder="re-enter password">
                    </label>
                </div>
                <button type="submit" name="submit">Register</button>
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

