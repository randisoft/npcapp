<?php

if(isset($_POST['add_ward'])){
    $ward = $_POST['ward'];
    $lgaid = $_POST['lgaid'];

    include '../classes/database.php';
    include '../classes/wardClass.php';
    include '../classes/wardController.php';
    $state = new wardController($ward, $lgaid);

    $state->addWard();

    header("location: ../add_ward.php?error=none");
}

if($_GET['del_id']) {
    $id = $_GET['del_id'];
    include '../classes/database.php';
    include '../classes/deleteClass.php';
    include '../classes/deleteController.php';
    $register = new DeleteController($id);

    $register->deleteWard($id);
    header("location: ../add_ward.php?error=none");
}