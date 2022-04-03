<?php
class Database {
    public function connect(){
        try {
            $username = 'root';
            $password = '';
            $database = new PDO('mysql:host=localhost;dbname=npc_corps', $username, $password);
            return $database;
        } catch (PDOException $e) {
            print "Error: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}
