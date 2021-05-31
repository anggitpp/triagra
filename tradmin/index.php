<?php
  include 'global.php';
  if(isset($_SESSION['username'])){
    echo "<script>window.location = 'dashboard.php';</script>";
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Triagra Login</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content" style="padding: 20px;">
            <form method="post" action="login.php">
              <h1>Login Form</h1>
              <div>
                <input type="text" name="lusername" class="form-control" placeholder="Username" required/>
              </div>
              <div>
                <input type="password" name="lpassword" class="form-control" placeholder="Password" required/>
              </div>
              <div>
                <button class="btn btn-success submit" type="submit" value="login" name="login">Log in</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1 onclick="window.location='http://triagra.co.id';">Triagra.co.id</h1>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form method="post" action="daftar.php">
              <h1>Create Account</h1>
              <div>
                <input type="text" name="username" class="form-control" placeholder="Username" required/>
              </div>
              <div>
                <input type="email" name="email" class="form-control" placeholder="Email" required/>
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required/>
              </div>
              <div>
                <button class="btn btn-primary submit" type="submit" name="daftar" value="daftar">Register</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1 onclick="window.location='http://triagra.co.id';">Triagra.co.id</h1>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
