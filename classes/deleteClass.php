<?php 

class Delete extends Database {

    protected function delUser ($id) {
        $stmt = $this->connect()->prepare('DELETE FROM citizens WHERE id = ?;');

        if(!$stmt->execute(array($id))) {
            $stmt = null;
            header("location: ../add_citizen.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }

    protected function delState ($id) {
        $stmt = $this->connect()->prepare('DELETE FROM states WHERE id = ?;');

        if(!$stmt->execute(array($id))) {
            $stmt = null;
            header("location: ../add_state.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }

    protected function delLga ($id) {
        $stmt = $this->connect()->prepare('DELETE FROM lga WHERE id = ?;');

        if(!$stmt->execute(array($id))) {
            $stmt = null;
            header("location: ../add_lga.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }

    protected function delWard ($id) {
        $stmt = $this->connect()->prepare('DELETE FROM wards WHERE id = ?;');

        if(!$stmt->execute(array($id))) {
            $stmt = null;
            header("location: ../add_ward.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }
}