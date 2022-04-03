<?php
$page_title = 'Create Corper Profile | National Population Commission';
include_once "header.php";
?>
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3 d-flex">
          <h3>Register User</h3>
          <form action="includes/register.php" method="post">
            <fieldset>
              <legend>Add a new corp member</legend>
              <?php echo (isset($error)) ? '<div class="alert alert-warning">'.$error.'</div>' : ""; ?>
              <div class="form-group">
                <label for="fullname">Fullname</label>
                <input
                  type="text"
                  id="fullname"
                  name="fullname"
                  class="form-control"
                />
              </div>
              <div class="form-group">
                <label for="email">Email address</label>
                <input
                  type="text"
                  id="email"
                  name="email"
                  class="form-control"
                />
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input
                  type="password"
                  id="password"
                  name="password"
                  class="form-control"
                />
              </div>
              <div class="form-group">
                <button type="submit" name="signup" class="btn btn-primary">
                  Add User
                </button>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
<?php
include_once "footer.php";
?>