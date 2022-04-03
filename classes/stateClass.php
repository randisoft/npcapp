<?php 

class State extends Database {

    protected function setState ($state) {
        $stmt = $this->connect()->prepare('INSERT INTO states (name) VALUES (?);');

        if(!$stmt->execute(array($state))) {
            $stmt = null;
            header("location: ../add_state.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }

    protected function checkState($state) {
        $stmt = $this->connect()->prepare('SELECT name FROM states WHERE name = ?');

        if(!$stmt->execute(array($state))) {
            $stmt = null;
            header("location: ../add_state.php?error=stmtfailed");
            exit();
        }

        $resultCheck;
        if($stmt->rowCount() > 0) {
            $resultCheck = false;
        } else {
            $resultCheck = true;
        }

        return $resultCheck;
    }
}