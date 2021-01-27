<?php
include('dbconnection/connection.php');
include("assets/sweetalert.php");
 if(isset($_POST['profileupdate'])){
	$id=$_SESSION['id'];
 
	$username = $_POST['username'];
        $email = $_POST['email'];
        $user_firstname = $_POST['user_firstname'];
        $user_lastname = $_POST['user_lastname'];
        $user_contact = $_POST['user_contact'];
             
	$insertSQL = "UPDATE user_account t1 INNER JOIN user_information t2 ON t1.id = t2.user_account_id SET t1.username='$username', t1.email='$email', t2.user_firstname='$user_firstname', t2.user_lastname='$user_lastname', t2.user_contact='$user_contact'  WHERE t1.id='$id'";
	$stmt=mysqli_query($conn,$insertSQL);
        if($stmt){

        ?>
        <script language="JavaScript">
           $(document).ready(function(){
	 
            swal("Information updated!", {
            button: false
            });
		
		
            });
        </script>    
        
    <?php 
        }
        else {
        ?>
        <script language="JavaScript">
           $(document).ready(function(){
	 
            swal("Error at updating!", {
            button: false
            });
		
		
            });
        </script>    
        
    <?php  
          }
        
    }

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include("assets/css.php"); ?>
    <?php include("dbconnection/connection.php");  ?>
    
    <link rel="stylesheet" href="css/styles.css">
</head>
<body id="page-top">
    
   <div id="wrapper">
    <!-- Sidebar -->
    <?php include 'assets/sidebar_user.php'; ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php include 'assets/topbar_user.php'; ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container">
            
        <nav aria-label="breadcrumb" class="border-dark m-2">
            <ol class="breadcrumb bg-white font-weight-light">
                <li class="breadcrumb-item active font-weight-light" aria-current="page">Update Profile</li>
            </ol>
        </nav>
            
     <div class="card shadow mb-4 m-2">     
        <form action="" method="POST" enctype="multipart/form-data" class="profileupdate" novalidate>
             <?php
                $edit=mysqli_query($conn,"select t1.*, t2.* from user_account t1 RIGHT JOIN user_information t2 ON t1.id=t2.user_account_id where t1.id='".$_SESSION['id']."'");
                $row=mysqli_fetch_array($edit);

            ?>
   
            <div class="card-body">
                <div class="p-sm-4">
                     <div class="form-group w-100">
                        <div class="text-left">Username</div>
                        <input class="form-control" type="text" name="username" value="<?=$row['username']?>" required>
                        <div class="valid-feedback">Looks good!</div><div class="invalid-feedback">Please fill out </div>
                     </div>
                    
                     <div class="form-group w-100">
                        <div class="text-left">Email</div>
                            <input class="form-control" type="text" name="email"  value="<?=$row['email']?>" required>
                            <div class="valid-feedback">Looks good!</div><div class="invalid-feedback">Please fill out </div>
                     </div>
                    
                     <div class="form-group w-100">
                        <div class="text-left">First Name</div>
                            <input class="form-control" type="text" name="user_firstname"  value="<?=$row['user_firstname']?>" required>
                            <div class="valid-feedback">Looks good!</div><div class="invalid-feedback">Please fill out </div>
                     </div>
                    
                     <div class="form-group w-100">
                        <div class="text-left">Last Name</div>
                            <input class="form-control" type="text" name="user_lastname"  value="<?=$row['user_lastname']?>"required>
                            <div class="valid-feedback">Looks good!</div><div class="invalid-feedback">Please fill out </div>
                     </div>
                     
                     <div class="form-group w-100">
                        <div class="text-left">Contact</div>
                        <input class="form-control" type="text" name="user_contact"  value="<?=$row['user_contact']?>" maxlength="11" required>
                        <div class="valid-feedback">Looks good!</div><div class="invalid-feedback">Please fill out </div>
                     </div> 
                </div>
            </div>
            <div class="card-footer"><button class="btn btn-info " type="submit" name="profileupdate">Update</button></div>
       </form>
     </div>
                 
            
        </div>
        <!-- /.container-fluid -->
      </div>
       <nav class="navbar navbar-expand bg-white text-center shadow">
            <a class="navbar-brand text-muted font-weight-light mt-2 mb-2" style="font-size: 13px; margin:auto;"> Technological University of the Philippines<br>2019-2020</a>
       </nav>
      <!-- End of Main Content -->
    </div>
    <!-- End of Content Wrapper -->
  </div>
  <!-- End of Page Wrapper -->

   <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a> 
  
<!--Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-hidden="true">
      <?php include("assets/logout_modal.php"); ?>  
  </div>


   

  <script src="assets/jquery/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="assets/jquery-easing/jquery.easing.min.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="assets/js/nav-admin.js"></script>  

<script>
(function() {
    //Validation
    window.addEventListener('load', function() {
      var forms = document.getElementsByClassName('profileupdate');

      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
  
</script>

  </body>
</html>