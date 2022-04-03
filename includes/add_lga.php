<?php

if(isset($_POST['add_lga'])){
    $lga = $_POST['lga'];
    $stateid = $_POST['stateid'];

    include '../classes/database.php';
    include '../classes/lgaClass.php';
    include '../classes/lgaController.php';
    $state = new LgaController($lga, $stateid);

    $state->addLga();

    header("location: ../add_lga.php?error=none");
}

if($_GET['del_id']) {
    $id = $_GET['del_id'];
    include '../classes/database.php';
    include '../classes/deleteClass.php';
    include '../classes/deleteController.php';
    $register = new DeleteController($id);

    $register->deleteLga($id);
    header("location: ../add_lga.php?error=none");
}