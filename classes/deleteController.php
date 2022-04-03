<?php

class DeleteController extends Delete {
    private $id;

    public function __construct($id) {
        $this->id = $id;
    }

    public function deleteUser() {
        $this->delUser($this->id);
    }
    public function deleteState() {
        $this->delState($this->id);
    }
    public function deleteLga() {
        $this->delLga($this->id);
    }
    public function deleteWard() {
        $this->delWard($this->id);
    }
}