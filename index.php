<?php
session_start();
if(isset($_SESSION['userid'])) {
  header("location: dashboard.php");
}
$page_title = 'Welcome | National Population Commission';
include_once "header.php";
?>


    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3 d-flex">
          <div class="well">
            <h1>National Population Commission Application.</h1>

            <p>Choose an action from the links in the menu pane</p>
          </div>
        </div>
      </div>
    </div>

<?php
include_once "footer.php";
?>