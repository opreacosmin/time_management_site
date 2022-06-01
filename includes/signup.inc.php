<?php

if(isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $fullname = $_POST["name"];
    $passwordrepeat = $_POST["passwordrepeat"];

    include "../classes/dbh-classes.php";
    include "../classes/signup-classes.php";
    include "../classes/signup-contr-classes.php";


    $signup = new SignupContr($username,$password,$passwordrepeat,$email,$fullname);
    $signup = $signup->signupUser();

    header("location: ../index.php");

}
else{
    header("location: ../register.php");

}