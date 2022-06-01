<?php

class Signup extends Dbh{

    protected function setUser($username,$pwd,$email,$fullname){

        $statement = $this->connect()->prepare('insert into users(username,psw,email,fullname) values (?,?,?,?);');
        $hashedpwd = password_hash($pwd,PASSWORD_DEFAULT);

        if(!$statement->execute(array($username,$hashedpwd
        ,$email,$fullname))){
            $statement = null;
            header("location: ../register.php?error=somethingfailed");
            exit();
        }
        $statement = null;

    }

    protected function checkUser($username,$email){
        $statement = $this->connect()->prepare('select username from users where username = ? or email = ?;');
        if(!$statement->execute(array($username,$email))){
            $statement = null;
            header("location: ../register.php?error=somethingfailed");
            exit();
        }

        $resultCheck = null;
        if($statement->rowCount() > 0){
            $resultCheck = false;
        }
        else{
            $resultCheck = true;
        }

        return $resultCheck;

    }

}