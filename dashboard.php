<?php
session_start();
$page_title = 'Welcome | National Population Commission';
include_once "header.php";
include "classes/database.php";
include "classes/selectClass.php";
$statusShow = new Select();
$citizenCount = $statusShow->citizenRowCount();
$stateCount = $statusShow->stateRowCount();
$lgaCount = $statusShow->lgaRowCount();
$wardCount = $statusShow->wardRowCount();
?>

<div class="container">
    <div class="row">
        <div class="col-sm-12 d-flex">
            <div class="well">
                <h3>Dashboard</h3>
                <p>Corper <?php  echo($_SESSION['fullname']); ?></p>
            </div>
            <div class="col-sm-12 d-flex">
                <h3>Links</h3>
                <div class="col-sm-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Register a Citizen </h3>
                            <div class="pull-right">
                                <span class="badge"><?php echo $citizenCount ?></span>
                            </div>
                        </div>
                        <div class="panel-body">
                            <button class="btn btn-primary" onclick="location.href='add_citizen.php'">Add</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3 class="panel-title">Add a State </h3>
                            <div class="pull-right">
                                <span class="badge"><?php echo $stateCount ?></span>
                            </div>
                        </div>
                        <div class="panel-body">
                            <button class="btn btn-primary" onclick="location.href='add_state.php'">Add</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Add a L.G.A</h3>
                            <div class="pull-right">
                                <span class="badge"><?php echo $lgaCount ?></span>
                            </div>
                        </div>
                        <div class="panel-body">
                            <button class="btn btn-primary" onclick="location.href='add_lga.php'">Add</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h3 class="panel-title">Add a Ward</h3>
                            <div class="pull-right">
                                <span class="badge"><?php echo $wardCount ?></span>
                            </div>
                        </div>
                        <div class="panel-body">
                            <button class="btn btn-primary" onclick="location.href='add_ward.php'">Add</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include_once "footer.php";
?>