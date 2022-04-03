<?php 

class Lga extends Database {

    protected function setLga ($lga, $stateid) {
        $stmt = $this->connect()->prepare('INSERT INTO lga (name, state_id) VALUES (?, ?);');

        if(!$stmt->execute(array($lga, $stateid))) {
            $stmt = null;
            header("location: ../add_lga.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }

    protected function checkLga($lga) {
        $stmt = $this->connect()->prepare('SELECT name FROM lga WHERE name = ?');

        if(!$stmt->execute(array($lga))) {
            $stmt = null;
            header("location: ../add_lga.php?error=stmtfailed");
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