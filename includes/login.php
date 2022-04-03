<?php

if(isset($_POST['signin'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    include '../classes/database.php';
    include '../classes/loginClass.php';
    include '../classes/loginController.php';
    $login = new LoginController($email, $password);

    $login->loginUser();

    header("location: ../dashboard.php?error=none");
}