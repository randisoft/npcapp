<?php

class LgaController extends Lga {
    private $lga;
    private $stateid;

    public function __construct($lga, $stateid) {
        $this->lga = $lga;
        $this->stateid = $stateid;
    }

    public function addLga() {
        if($this->emptyInput() == false) {
            header("location: ../add_lga.php?error=emptyInput");
            exit();
        }
        if($this->invalidLganame() == false) {
            header("location: ../add_lga.php?error=lga");
            exit();
        }
        if($this->lgaExist() == false) {
            header("location: ../add_lga.php?error=lgaexist");
            exit();
        }

        $this->setLga($this->lga, $this->stateid);
    }

    public function emptyInput() {
        $result;
        if (empty($this->lga) || empty($this->stateid)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function invalidLganame() {
        $result;
        if (!preg_match("/^[a-zA-Z- ]*$/", $this->lga)){
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function lgaExist() {
        $result;
        if (!$this->checkLga($this->lga)){
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}