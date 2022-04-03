<?php

if(isset($_POST['add_state'])){
    $state = $_POST['state'];

    include '../classes/database.php';
    include '../classes/stateClass.php';
    include '../classes/stateController.php';
    $state = new StateController($state);

    $state->addState();

    header("location: ../add_state.php?error=none");
}

if($_GET['del_id']) {
    $id = $_GET['del_id'];
    include '../classes/database.php';
    include '../classes/deleteClass.php';
    include '../classes/deleteController.php';
    $register = new DeleteController($id);

    $register->deleteState($id);
    header("location: ../add_state.php?error=none");
}