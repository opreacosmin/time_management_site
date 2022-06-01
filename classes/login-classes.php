<?php

class Login extends Dbh {

    protected function getUser($username, $pwd){
        $statement = $this->connect()->prepare('select psw from users 
            where username=? or email=?;');

        if(!$statement->execute(array($username,$pwd))){
            $statement = null;
            header("location: ../login.php?error=somethingfailed");
            exit();
        }

        if($statement->rowCount() == 0){
            $statement = null;
            echo '<script type="text/javascript"> ';
            echo '  if (confirm("Account not found!")) {';
            echo '    document.location = "../login.php";';
            echo '  }';
            echo '</script>';
            exit();
        }

        $pwdhashed = $statement->fetchAll(PDO::FETCH_ASSOC);
        $checkpwd = password_verify($pwd, $pwdhashed[0]["psw"]);

        if($checkpwd == false){
            $statement = null;
            echo '<script type="text/javascript"> ';
            echo '  if (confirm("Account not found!")) {';
            echo '    document.location = "../login.php";';
            echo '  }';
            echo '</script>';
            exit();
        }
        elseif ($checkpwd == true){
            $statement = $this->connect()->prepare('select * from users 
            where username=? or email=? and psw=?;');
            if(!$statement->execute(array($username,$username,$pwd))){
                $statement = null;
                header("location: ../login.php?error=somethingfailed");
                exit();
            }

            $user = $statement->fetchAll(PDO::FETCH_ASSOC);
            session_start();
            $_SESSION["userid"]=$user[0]["id"];
            $_SESSION["username"]=$user[0]["username"];


        }

        $statement = null;
    }

}