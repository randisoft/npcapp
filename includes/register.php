<?php

if(isset($_POST['signup'])){
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    include '../classes/database.php';
    include '../classes/registerClass.php';
    include '../classes/registerController.php';
    $register = new RegisterController($fullname, $email, $password);

    $register->registerUser();

    header("location: ../signup.php?error=none");
}