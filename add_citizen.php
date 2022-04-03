<?php
session_start();
$page_title = 'Add Citizen | National Population Commission';
include_once "header.php";
include "classes/database.php";
include "classes/selectClass.php";
$statusShow = new Select();
$resultState = $statusShow->readState();
$resultLga = $statusShow->readLga();
$resultWard = $statusShow->readWard();
$resultCitizen = $statusShow->readCitizens();
?>

<div class="container">
    <div class="row">
        <div class="col-sm-12 d-flex">
            <div class="well">
                <h3>Dashboard</h3>
                <p>Corper <?php  echo($_SESSION['fullname']); ?></p>
                <ol class="breadcrumb">
                    <li><a href="/dashboard.php">Home</a></li>
                    <li class="active">Add Citizen</li>
                </ol>
            </div>
            <div class="col-sm-4 d-flex">
            <h3>Register a Citizen</h3>
                <form action="/includes/add_citizen.php" method="post">
                    <div class="form-group">
                        <label for="fullname">Full name</label>
                        <input type="text" name="fullname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" name="address" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="state">Select Gender</label>
                        <select name="gender" id="" class="form-control">
                            <option value="">Select a Gender</option>
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="state">Select state</label>
                        <select name="stateid" class="form-control">
                            <option value="" selected disabled>Select state</option>
                            <?php foreach ($resultState as $row) { ?>
                            <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="state">Select lga</label>
                        <select name="lgaid" class="form-control">
                            <option value="" selected disabled>Select lga</option>
                            <?php foreach ($resultLga as $row) { ?>
                            <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="state">Select ward</label>
                        <select name="wardid" class="form-control">
                            <option value="" selected disabled>Select ward</option>
                            <?php foreach ($resultWard as $row) { ?>
                            <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <button name="signup" class="btn btn-primary">Add Record</button>
                    </div>
                </form>
            </div>
            <div class="col-sm-8 d-flex">
                <h3>List of Citizens</h3>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Fullname</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Gender</th>
                                <th>State</th>
                                <th>LGA</th>
                                <th>Ward</th>
                                <th>Date Created</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($resultCitizen as $row) { ?>
                                <tr>
                                    <td><?php echo $row['fullname'] ?></td>
                                    <td><?php echo $row['phone'] ?></td>
                                    <td><?php echo $row['address'] ?></td>
                                    <td><?php echo $row['gender'] == 1 ? 'Male' : 'Female' ?></td>
                                    <td><?php foreach ($resultState as $state) { if ($row['state_id'] == $state['id']) { echo $state['name']; } } ?></td>
                                    <td><?php foreach ($resultLga as $lga) { if ($row['lga_id'] == $lga['id']) { echo $lga['name']; } } ?></td>
                                    <td><?php foreach ($resultWard as $ward) { if ($row['ward_id'] == $ward['id']) { echo $ward['name']; } } ?></td>
                                    <td><?php echo $row['date_reg'] ?></td>
                                    <td><a href="includes/add_citizen.php?del_id=<?php echo $row['id'] ?>" class="btn btn-danger btn-sm">Delete</a></td>
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