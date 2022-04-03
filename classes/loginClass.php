<?php

class Login extends Database {

    protected function getUser ($email, $password) {
        $stmt = $this->connect()->prepare('SELECT * FROM users WHERE email = ?;');

        if(!$stmt->execute(array($email))) {
            $stmt = null;
            header("location: ../signin.php?error=stmtfailed");
            exit();
        }

        if($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: ../signin.php?error=notfound");
            exit();
        }

        $passHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPass = password_verify($password, $passHashed[0]['password']);

        if($checkPass == false) {
            $stmt = null;
            header("location: ../signin.php?error=wrong");
            exit();
        }
        if($checkPass == true) {
            
            session_start();
            $_SESSION['userid'] = $passHashed[0]['id'];
            $_SESSION['fullname'] = $passHashed[0]['name'];
            
            $stmt = null;

        }

        
    }

}