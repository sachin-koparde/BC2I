<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="assets/icons/bc2i-64.ico">

    <title>Login | BC2I</title>

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/floating-labels/"> -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Custom CSS -->
    <link href="assets/css/login.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Teko&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alatsi&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Play&display=swap" rel="stylesheet">


  </head>
  <body>

      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
          <div class="container">
              <img class="img-icon" src="assets/icons/bc2i-64.ico" alt="img-bc2i">&nbsp
              <a style="font-family: 'Play', sans-serif;" class="navbar-brand p-1" href="index.php">BC2I</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="#">Login
                      <span class="sr-only">(current)</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        


<div class="container">
<?php
if(isset($_GET['registered']))
{?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <center>You have registered successfully. Login now!</center>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php }?>
<?php
if(isset($_GET['authentication']))
{?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <center>Invalid username or password</center>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php }?>
<div class="row">
<div class="col-md-3">
</div>
<div class="col col-md-6 col-md-offset-4">
   <form class="form-signin" action="authenticate-login.php" method="POST">
      <div class="text-center mb-4">
        <img class="mb-4" src="assets/icons/secure.png" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal login-title">LOGIN</h1>
      </div>

      <div class="form-label-group">
        <input type="email" id="inputEmail" class="form-control form-custom username" name="username" placeholder="Email address"  required autofocus>
        <label for="inputEmail">Email address</label>
      </div>

      <div class="form-label-group">
        <input type="password" id="inputPassword" class="form-control password" name="password" placeholder="Password"  required>
        <label for="inputPassword">Password</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit"><span class="submit-text">SUBMIT</span></button>
      <p class="pt-2 mt-3 mb-3">Not registered?&nbsp;<a href="register.php"><strong><span class="register-now-text">Register Now</span></strong></a></p>
    </form>
</div>
<div class="col-md-3">

</div>
</div>
</div>
    <div class="space">
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
    </div>
    <footer class="bg-dark mt-5" id="footer">
        <div class="container">
          <p class="m-0 text-center text-white">Copyright &copy; BC2I 2019</p>
          <p class="text-center text-white">Bureau of Cyber Crime Investigation</p>
        </div>
        <!-- end of Footer container -->
      </footer>
<script src="assets/js/login.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
