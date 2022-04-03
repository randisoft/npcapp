<?php

class RegisterController extends Register {
    private $fullname;
    private $email;
    private $password;

    public function __construct($fullname, $email, $password) {
        $this->fullname = $fullname;
        $this->email = $email;
        $this->password = $password;
    }

    public function registerUser() {
        if($this->emptyInput() == false) {
            header("location: ../signup.php?error=emptyInput");
            exit();
        }
        if($this->invalidFullname() == false) {
            header("location: ../signup.php?error=fullname");
            exit();
        }
        if($this->invalidEmail() == false) {
            header("location: ../signup.php?error=email");
            exit();
        }
        if($this->userExist() == false) {
            header("location: ../signup.php?error=emailtaken");
            exit();
        }

        $this->setUser($this->fullname, $this->email, $this->password);
    }

    public function emptyInput() {
        $result;
        if (empty($this->fullname) || empty($this->email) || empty($this->password)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function invalidFullname() {
        $result;
        if (!preg_match("/^[a-zA-Z ]*$/", $this->fullname)){
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
    
    private function invalidEmail() {
        $result;
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function userExist() {
        $result;
        if (!$this->checkUser($this->email)){
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}