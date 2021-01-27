<?php include("dbconnection/connection.php");  ?>
<?php include("registerchecker.php");  ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Register</title>
  <?php include("assets/css.php"); ?>

  <!-- Custom styles for this template -->
  <link href="css/main.css" rel="stylesheet">
</head>
  <body class="bg-register">
 <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-register-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                  </div>
                    <form class="user" method="post" action="" novalidate>
                                      
                <div class="form-group row">
                 <div class="form-group w-100">
                    <input type="text" class="form-control form-control-user" name="user_firstname" id="user_firstname" placeholder="First Name" required>
                </div>
                    
                <div class="form-group w-100">
                    <input type="text" class="form-control form-control-user" name="user_lastname" id="user_lastname" placeholder="Last Name" required>
                </div>
                    
                <div class="form-group w-100">
                    <input type="text" class="form-control form-control-user" name="username" id="username" placeholder="Username" required>
                </div>
                    
                <div class="form-group w-100">
                    <input type="email" class="form-control form-control-user" name="email" id="email" placeholder="Email Address" required>
                </div>
                    
                  <div class="form-group w-100">
                      <div class="input-group" id="password">
                          <input type="password" class="form-control form-control-user" name="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                          <div class="input-group-append"><span class="input-group-text" style="border-top-right-radius: 50%; border-bottom-right-radius: 50%;"><i class="fa fa-eye-slash" aria-hidden="true"></i></span></div>
                          <div class="valid-feedback">Looks good!</div><div class="invalid-feedback">Password must contain 8 characters, uppercase and number! </div>
                      </div>
                  </div>
                    
 
                    
                <button type="submit" name="signup" class="btn btn-block btn-register" style="height: 40px;">Register Account</button>    
               </div>
                <hr>
              <div class="link pt-3">
                  <a href="index.php">Already have an account? Login!</a>
              </div>
            </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 
      
      
 <script src="assets/jquery/jquery.min.js"></script>
 <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
 <script src="assets/jquery-easing/jquery.easing.min.js"></script>
  <!-- Custom scripts for all pages-->
 <script src="assets/js/nav-admin.js"></script>
<script src="assets/register.js"></script>
<style>
.bg-register-image {
  background: url("img/create1.jpg");
  background-size: cover;
}

</style>
 </body>
 
</head>

<html>
