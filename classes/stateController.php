<?php

class StateController extends State {
    private $state;

    public function __construct($state) {
        $this->state = $state;
    }

    public function addState() {
        if($this->emptyInput() == false) {
            header("location: ../add_state.php?error=emptyInput");
            exit();
        }
        if($this->invalidStatename() == false) {
            header("location: ../add_state.php?error=state");
            exit();
        }
        if($this->stateExist() == false) {
            header("location: ../add_state.php?error=stateexist");
            exit();
        }

        $this->setState($this->state);
    }

    public function emptyInput() {
        $result;
        if (empty($this->state)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function invalidStatename() {
        $result;
        if (!preg_match("/^[a-zA-Z- ]*$/", $this->state)){
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function stateExist() {
        $result;
        if (!$this->checkState($this->state)){
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}