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
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Sign up</a></li>
                <li><a href="#">About</a></li>

            </ul>
        </nav>
</div>

    <div class="form">
        <h1>Register</h1>
        <form method="post" action="includes/signup.inc.php">
            <div>
                <label>
                    Username:
                    <input type="text" name="username" value=""/>
                </label>
            </div>
            <div>
                <label>
                    Full name:
                    <input type="text" name="name" value=""/>
                </label>
            </div>
            <div>
                <label>
                    Email:
                    <input type="text" name="email" value=""/>
                </label>
            </div>
            <div>
                <label>

                    Password:
                    <input type="password" name="password" value=""/>
                </label>
            </div>
            <button type="submit">Register</button>
        </form>
    </div>
</div>

