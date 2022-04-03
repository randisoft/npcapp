<?php
session_start();
$page_title = 'Add a Ward | National Population Commission';
include_once "header.php";
include "classes/database.php";
include "classes/selectClass.php";
$statusShow = new Select();
$results = $statusShow->readLga();
$resultWard = $statusShow->readWard();

?>

<div class="container">
    <div class="row">
        <div class="col-sm-12 d-flex">
            <div class="well">
                <h3>Dashboard</h3>
                <p>Corper <?php echo($_SESSION['fullname']); ?></p>
                <ol class="breadcrumb">
                    <li><a href="/dashboard.php">Home</a></li>
                    <li class="active">Add Ward</li>
                </ol>
            </div>
            <div class="col-sm-6 d-flex">
            <h3>Add a Ward</h3>
                <form action="includes/add_ward.php" method="post">
                    <div class="form-group">
                        <label for="lga">Select LGA</label>
                        <select name="lgaid" class="form-control">
                            <option value="" selected disabled>Select Local Govt.</option>
                            <?php foreach ($results as $row) { ?>
                            <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="ward">Name of Ward</label>
                        <input type="text" name="ward" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="add_ward" class="btn btn-primary">Add Record</button>
                    </div>
                </form>
            </div>
            <div class="col-sm-6 d-flex">
                <h3>List of Wards</h3>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Wards</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($resultWard as $row) { ?>
                                <tr>
                                    <td><?php echo $row['name'] ?></td>
                                    <td><a href="includes/add_ward.php?del_id=<?php echo $row['id'] ?>" class="btn btn-danger btn-sm">Delete</a></td>
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