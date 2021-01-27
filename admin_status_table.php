<?php
if(!isset($_SESSION)) { 
  session_start(); 
} 

if(!isset($_SESSION['user_type'])){
   session_destroy();
   header("Location: index.php");
   exit;
}

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Status</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include("assets/css.php"); ?>
    <?php include("dbconnection/connection.php");  ?>
    
    <link rel="stylesheet" href="css/styles.css">
</head>
<body id="page-top">
    
   <div id="wrapper">
    <!-- Sidebar -->
    <?php include 'assets/sidebar.php'; ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php include 'assets/topbar.php'; ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 text-muted">Pending List</h6>
                </div>
                <div class="card-body">

                    <br><br>
                  <table id="table" class="table table-bordered table-responsive-md">
                <thead class="thead-light">
                    <tr>
                        <th>Ticket ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Title</th>
                        <th>Comment</th>
                        <th>File</th>
                        <th>Priority</th>
                        <th>Date Created</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td> <div class="text-center">
                               <!--EDIT USER -->
                               <a href=""  data-toggle="modal" class="btn btn-success btn-circle text-white" data-toggle="tooltip"
                              data-placement="top" title="Edit"><i class="fas fa-pen"></i></a>
                               <!--DELETE USER -->
                               <a href="" class="btn btn-danger btn-circle" data-toggle="tooltip"
                               data-placement="top" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                               <i class="fas fa-trash-alt"></i></a>
                               
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
                </div>
              </div>
           
        </div>
        <!-- /.container-fluid -->
      </div>
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
 <script src="assets/js/sweetalert.min.js"></script>
<script src="assets/js/nav-admin.js"></script>

  </body>
</html>