<?php

class WardController extends Ward {
    private $ward;
    private $lgaid;

    public function __construct($ward, $lgaid) {
        $this->ward = $ward;
        $this->lgaid = $lgaid;
    }

    public function addWard() {
        if($this->emptyInput() == false) {
            header("location: ../add_ward.php?error=emptyInput");
            exit();
        }
        if($this->invalidWardname() == false) {
            header("location: ../add_ward.php?error=ward");
            exit();
        }
        if($this->wardExist() == false) {
            header("location: ../add_ward.php?error=wardexist");
            exit();
        }

        $this->setWard($this->ward, $this->lgaid);
    }

    public function emptyInput() {
        $result;
        if (empty($this->ward) || empty($this->lgaid)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function invalidWardname() {
        $result;
        if (!preg_match("/^[a-zA-Z0-9- ]*$/", $this->ward)){
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function WardExist() {
        $result;
        if (!$this->checkWard($this->ward, $this->lgaid)){
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}