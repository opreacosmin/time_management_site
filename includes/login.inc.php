<?php


if(isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    include "../classes/dbh-classes.php";
    include "../classes/login-classes.php";
    include "../classes/login-contr-classes.php";


    $login = new LoginContr($username,$password);

    $login = $login->loginUser();

    header("location: ../index.php");

}