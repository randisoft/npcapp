<?php 

class Register extends Database {

    protected function setUser ($fullname, $gender, $address, $phone, $stateid, $lgaid, $wardid) {
        $stmt = $this->connect()->prepare('INSERT INTO citizens (fullname, gender, address, phone, state_id, lga_id, ward_id) VALUES (?, ?, ?, ?, ?, ?, ?);');

        if(!$stmt->execute(array($fullname, $gender, $address, $phone, $stateid, $lgaid, $wardid))) {
            $stmt = null;
            header("location: ../add_citizen.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }

    protected function checkUser($phone) {
        $stmt = $this->connect()->prepare('SELECT phone FROM citizens WHERE phone = ?');

        if(!$stmt->execute(array($phone))) {
            $stmt = null;
            header("location: ../add_citizen.php?error=stmtfailed");
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