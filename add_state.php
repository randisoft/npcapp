<?php
session_start();
$page_title = 'Add a State | National Population Commission';
include_once "header.php";
include "classes/database.php";
include "classes/selectClass.php";
$statusShow = new Select();
$resultState = $statusShow->readState();
?>

<div class="container">
    <div class="row">
        <div class="col-sm-12 d-flex">
            <div class="well">
                <h3>Dashboard</h3>
                <p>Corper <?php echo($_SESSION['fullname']); ?></p>
                <ol class="breadcrumb">
                    <li><a href="/dashboard.php">Home</a></li>
                    <li class="active">Add State</li>
                </ol>
            </div>
            <div class="col-sm-6 d-flex">
            <h3>Add a State</h3>
                <form action="includes/add_state.php" method="post">
                    <div class="form-group">
                        <label for="state">Name of State</label>
                        <input type="text" name="state" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="add_state" class="btn btn-primary">Add Record</button>
                    </div>
                </form>
            </div>
            <div class="col-sm-6 d-flex">
                <h3>List of States</h3>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>State</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($resultState as $row) { ?>
                                <tr>
                                    <td><?php echo $row['name'] ?></td>
                                    <td><a href="includes/add_state.php?del_id=<?php echo $row['id'] ?>" class="btn btn-danger btn-sm">Delete</a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include_once "footer.php";
?>