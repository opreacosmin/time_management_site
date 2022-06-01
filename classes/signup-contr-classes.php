<?php


class SignupContr extends Signup
{

    private $username;
    private $pwd;
    private $pwdrepeat;
    private $email;
    private $fullname;


    public function __construct($username, $pwd, $pwdrepeat, $email, $fullname)
    {
        $this->username = $username;
        $this->pwd = $pwd;
        $this->pwdrepeat = $pwdrepeat;
        $this->email = $email;
        $this->fullname = $fullname;

    }


    private function emptyInput(){
        $result = null;
        if(empty($this->username) || empty($this->pwd) || empty($this->pwdrepeat)
            || empty($this->email) || empty($this->fullname)){

            $result = false;
        }
        else{
            $result = true;
        }

        return $result;

    }

    private function invalidUsername(){
        $result = null;
        if(!preg_match("/^[a-zA-Z0-9]*$/",$this->username)){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }

    private function invalidEmail(){
        $result = null;
        if(!filter_var($this->email,FILTER_VALIDATE_EMAIL)){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }

    private function pwdMatch(){
        $result = null;
        if($this->pwdrepeat !== $this->pwd){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }

    private function usernameTaken(){
        $result = null;
        if(!$this->checkUser($this->username,$this->email)){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }

    public function signupUser(){
        if($this->emptyInput()==false){
            echo '<script type="text/javascript"> ';
            echo '  if (confirm("Please complete all fields! Try again.")) {';
            echo '    document.location = "../register.php";';
            echo '  }';
            echo '</script>';
            exit();
        }
        if($this->invalidUsername()==false){
            echo '<script type="text/javascript"> ';
            echo '  if (confirm("Invalid username adress! Try again.")) {';
            echo '    document.location = "../register.php";';
            echo '  }';
            echo '</script>';
            exit();
        }
        if($this->invalidEmail()==false){
            echo '<script type="text/javascript"> ';
            echo '  if (confirm("Invalid email adress! Try again.")) {';
            echo '    document.location = "../register.php";';
            echo '  }';
            echo '</script>';
            exit();
        }
        if($this->pwdMatch()==false){
            echo '<script type="text/javascript"> ';
            echo '  if (confirm("Passwords do not match! Try again.")) {';
            echo '    document.location = "../register.php";';
            echo '  }';
            echo '</script>';
            exit();
        }
        if($this->usernameTaken()==false){
           echo '<script type="text/javascript"> ';
            echo '  if (confirm("Username or email already taken! Try again.")) {';
            echo '    document.location = "../register.php";';
            echo '  }';
            echo '</script>';


            exit();
        }

        $this->setUser($this->username,$this->pwd,$this->email,$this->fullname);

    }



}