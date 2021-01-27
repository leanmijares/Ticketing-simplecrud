<?php
include('dbconnection/connection.php');
include("assets/sweetalert.php");
 if(isset($_POST['passwordupdate'])){
	$id=$_SESSION['id'];
 
        $newpassword1 = trim($_POST['newpassword1']);
        $newpassword2 = trim($_POST['newpassword2']);
        $isValid = true;
        
        
        if($isValid) {
        $insertSQL="UPDATE user_account set password='$newpassword1' WHERE id='$id'";
        $result = mysqli_query($conn, $insertSQL);
        if($result){ ?>
           <script language="JavaScript">
           $(document).ready(function(){
	 
            swal("Password changed successfully!", {
            button: false
            });
		
		
            });
           </script>    
        <?php
           }
          else { ?>
           <script language="JavaScript">
           $(document).ready(function(){
	 
            swal("Error at changing password!", {
            button: false
            });
		
		
            });
           </script>
        <?php 
          
          }
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
                <li class="breadcrumb-item active font-weight-light" aria-current="page">Change Password</li>
            </ol>
        </nav>
            
     <div class="card shadow mb-5 m-2">     
        <form action="" method="POST" enctype="multipart/form-data" class="profileupdate" novalidate>
             <?php
                $edit=mysqli_query($conn,"select t1.*, t2.* from user_account t1 RIGHT JOIN user_information t2 ON t1.id=t2.user_account_id where t1.id='".$_SESSION['id']."'");
                $row=mysqli_fetch_array($edit);

            ?>
   
            <div class="card-body mt-4">
                <div class="p-sm-4">

                     <div class="form-group w-100">
                        <div class="input-group" id="npassword">
                            <input type="password" class="form-control" name="newpassword1" placeholder="New Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                           <div class="input-group-append"><span class="input-group-text"><i class="fa fa-eye-slash" aria-hidden="true"></i></span></div>
                           <div class="valid-feedback">Looks good!</div><div class="invalid-feedback">Password must contain 8 characters, uppercase and number! </div>
                        </div>
                  </div>
                    
                 <div class="form-group w-100">
                        <div class="input-group" id="ncpassword">
                            <input type="password" class="form-control" name="newpassword2" placeholder="Enter New Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                           <div class="input-group-append"><span class="input-group-text"><i class="fa fa-eye-slash" aria-hidden="true"></i></span></div>
                           <div class="valid-feedback">Looks good!</div><div class="invalid-feedback">Password must contain 8 characters, uppercase and number! </div>
                        </div>
                  </div> 
                </div>        
            </div>
            <div class="card-footer"> <button type="submit" name="passwordupdate" class="btn btn-danger">Change</button> </div>
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
    window.addEventListener('load', function() {
      var forms = document.getElementsByClassName('changepass');

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
  
    
    
$(document).ready(function() {
     $("#npassword span").on('click', function(event) {
        event.preventDefault();
        if($('#npassword input').attr("type") == "text"){
            $('#npassword input').attr('type', 'password');
            $('#npassword i').addClass( "fa-eye-slash" );
            $('#npassword i').removeClass( "fa-eye" );
        }else if($('#npassword input').attr("type") == "password"){
            $('#npassword input').attr('type', 'text');
            $('#npassword i').removeClass( "fa-eye-slash" );
            $('#npassword i').addClass( "fa-eye" );
        }
    });
    $("#ncpassword span").on('click', function(event) {
        event.preventDefault();
        if($('#ncpassword input').attr("type") == "text"){
            $('#ncpassword input').attr('type', 'password');
            $('#ncpassword i').addClass( "fa-eye-slash" );
            $('#ncpassword i').removeClass( "fa-eye" );
        }else if($('#ncpassword input').attr("type") == "password"){
            $('#ncpassword input').attr('type', 'text');
            $('#ncpassword i').removeClass( "fa-eye-slash" );
            $('#ncpassword i').addClass( "fa-eye" );
        }
    });
});
</script>


  </body>
</html>