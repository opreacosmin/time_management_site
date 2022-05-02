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
                    <li><a href="login.php">Login</a></li>
                    <li><a href="register.php">Sign up</a></li>
                    <li><a href="#">About</a></li>

                </ul>
            </nav>
        </div>

        <div class="form">
            <h1>Login</h1>
            <form method="post" action="includes/login.inc.php">

                <div>
                    <label>
                        Email
                        <input type="text" name="email" value=""/>
                    </label>
                </div>
                <div>
                    <label>

                        Password:
                        <input type="password" name="password" value=""/>
                    </label>
                </div>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
</body>

