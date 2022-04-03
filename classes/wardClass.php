<?php 

class Ward extends Database {

    protected function setWard ($ward, $lgaid) {
        $stmt = $this->connect()->prepare('INSERT INTO wards (name, lga_id) VALUES (?, ?);');

        if(!$stmt->execute(array($ward, $lgaid))) {
            $stmt = null;
            header("location: ../add_ward.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }

    protected function checkWard($ward, $lgaid) {
        $stmt = $this->connect()->prepare('SELECT name FROM wards WHERE name = ? AND lga_id = ?');

        if(!$stmt->execute(array($ward, $lgaid))) {
            $stmt = null;
            header("location: ../add_ward.php?error=stmtfailed");
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