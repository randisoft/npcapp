<?php

if(isset($_POST['signup'])){
    $fullname = $_POST['fullname'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $stateid = $_POST['stateid'];
    $lgaid = $_POST['lgaid'];
    $wardid = $_POST['wardid'];

    include '../classes/database.php';
    include '../classes/citizenClass.php';
    include '../classes/citizenController.php';
    $register = new RegisterController($fullname, $gender, $address, $phone, $stateid, $lgaid, $wardid);

    $register->registerUser();

    header("location: ../add_citizen.php?error=none");
}

if($_GET['del_id']) {
    $id = $_GET['del_id'];
    include '../classes/database.php';
    include '../classes/deleteClass.php';
    include '../classes/deleteController.php';
    $register = new DeleteController($id);

    $register->deleteUser($id);
    header("location: ../add_citizen.php?error=none");
}