<?php
session_start();
$page_title = 'Login Corper | National Population Commission';
include_once "header.php";
?>
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3 d-flex">
          <h3>Register User</h3>
          <form action="includes/login.php" method="post">
            <fieldset>
              <legend>Register a new corp member</legend>
              <div class="form-group">
                <label for="email">Email Address</label>
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
                <button
                  type="submit"
                  name="signin"
                  class="btn btn-primary"
                >
                  Sign in
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