<?php

class LoginContr extends Login
{
    private $username;
    private $pwd;

    public function __construct($username,$pwd){
        $this->username = $username;
        $this->pwd = $pwd;

    }

    public function loginUser(){
        if($this->emptyInput()==false){
            echo '<script type="text/javascript"> ';
            echo '  if (confirm("Please complete all fields! Try again.")) {';
            echo '    document.location = "../login.php";';
            echo '  }';
            echo '</script>';
            exit();
        }
        $this->getUser($this->username, $this->pwd);
    }

    private function emptyInput()
    {
        $result = null;
        if (empty($this->username) || empty($this->pwd)) {

            $result = false;
        } else {
            $result = true;
        }

        return $result;

    }

}