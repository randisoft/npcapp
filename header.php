<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $page_title; ?></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button
            type="button"
            class="navbar-toggle collapsed"
            data-toggle="collapse"
            data-target="#bs-example-navbar-collapse-1"
            aria-expanded="false"
          >
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">NPC Application</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
              <li>
                <a href="/index.php">Home <span class="sr-only">(current)</span></a>
              </li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
          <?php
            if(isset($_SESSION['userid'])){ ?>
              <button type="button" class="btn btn-info navbar-btn">
                Signed in as <?php echo $_SESSION['fullname']; ?>
              </button>
              <button type="button" onclick="location.href='logout.php'" class="btn btn-danger navbar-btn">
                Logout
              </button>
          <?php } else { ?>
              <button type="button" onclick="location.href='signin.php'" class="btn btn-info navbar-btn">
                Sign in
              </button>
              <button type="button" onclick="location.href='signup.php'" class="btn btn-info navbar-btn">
                Sign Up
              </button>
          <?php } ?>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>