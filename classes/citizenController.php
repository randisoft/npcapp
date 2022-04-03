<?php

class RegisterController extends Register {
    private $fullname;
    private $gender;
    private $address;
    private $phone;
    private $stateid;
    private $lgaid;
    private $wardid;

    public function __construct($fullname, $gender, $address, $phone, $stateid, $lgaid, $wardid) {
        $this->fullname = $fullname;
        $this->gender = $gender;
        $this->address = $address;
        $this->phone = $phone;
        $this->stateid = $stateid;
        $this->lgaid = $lgaid;
        $this->wardid = $wardid;
    }

    public function registerUser() {
        if($this->emptyInput() == false) {
            header("location: ../add_citizen.php?error=emptyInput");
            exit();
        }
        if($this->invalidFullname() == false) {
            header("location: ../add_citizen.php?error=fullname");
            exit();
        }
        if($this->invalidPhone() == false) {
            header("location: ../add_citizen.php?error=email");
            exit();
        }
        if($this->userExist() == false) {
            header("location: ../add_citizen.php?error=phonetaken");
            exit();
        }

        $this->setUser($this->fullname, $this->gender, $this->address, $this->phone, $this->stateid, $this->lgaid, $this->wardid);
    }

    public function emptyInput() {
        $result;
        if (empty($this->fullname) || empty($this->phone) || empty($this->address) || empty($this->gender) || empty($this->stateid) || empty($this->lgaid) || empty($this->wardid)) {
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
    
    private function invalidPhone() {
        $result;
        if (!preg_match("/^\d+\.?\d*$/", $this->phone) && strlen($this->phone) == 11){
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function userExist() {
        $result;
        if (!$this->checkUser($this->phone)){
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}