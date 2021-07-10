<!DOCTYPE html>
<html>
<?php

session_start();
include('adminpartials/head.php');

include('../partials/connect.php');

$msg="";



if (isset($_POST['login'])) {

  



  $email = $_POST['email'];
  $password = $_POST['password'];
  $role=$_POST['role'];
  $sql = "SELECT * from admin WHERE email='$email' AND password='$password' AND role='$role'";


  $results = $connect->query($sql) or die($connect->error);
  $final = $results->fetch_assoc();



  $_SESSION['email'] = $final['email'];
  $_SESSION['password'] = $final['password'];
  $_SESSION['role'] = $final['role'];

  if ($email = $final['email'] and $password = $final['password'] and $role = $final['role']) {
    header('location:adminindex.php');
  } else {


    echo '<script type="text/javascript">
    
    alert("Incorrect email or password !");
    window.location.href = "adminlogin.php";
    </script>';
  }
}

?>

<body class="bg-light-blue color-palette">


  <div class="row ">
    <div class="col-sm-4 ">


    </div>

    <div class="col-sm-4">

      <!-- Horizontal Form -->
      <div class="login-box">
        <div class="login-logo">
          <a href="#"><b>SuperAdmin</b>LOGIN</a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
          <p class="login-box-msg">Sign in to start your session</p>

          <form action="adminlogin.php" method="POST">
            <div class="form-group has-feedback">
              <input type="email" class="form-control" placeholder="Email" name="email">
              <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>

            <div class="form-group has-feedback">
              <input type="password" class="form-control" placeholder="Password" name="password">
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>



            <div class="form-group">
            
            <div class="form-group">
                  <div class="radio">
                    <label>
                      <input type="radio" name="role" id="optionsRadios1" value="admin" required>
                      Admin
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="role" id="optionsRadios2" value="viewer" required>
                      Viewer
                    </label>
                  </div>

            </div>
            <div class="row">

              <!-- /.col -->

              <div class="col-xs-4 ">

                <button type="submit" class="btn btn-primary btn-block btn-flat btn-sm " name="login">Sign In</button>
              </div>

              <!-- /.col -->
            </div>



          </form>
        </div>


      </div>
      <div class="col-sm-4">


      </div>

    </div>

</body>

</html>