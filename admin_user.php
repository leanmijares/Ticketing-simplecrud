<?php 
include('dbconnection/connection.php');
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
    <title>User Management</title>
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
        <div class="container">
            <div class="card shadow mb-4">
              <form action="" method="post">
                <div class="card-header py-3">
                  <h6 class="m-0 text-muted">User Management Lists</h6>
                </div>
                <div class="card-body">
                    
                  <button data-toggle="modal" data-target="#user_add" class="btn btn-info btn-circle" data-toggle="tooltip"
                    data-placement="top" title="Create">
                    <span class="icon text-white-50"><i class="fas fa-arrow-right"></i> </span>
                  </button>
                    
                  <div class="modal fade" id="user_add" tabindex="-1" role="dialog" aria-hidden="true">
                      <?php include("admin_user_add.php") ?>
                  </div>
                    <br><br>
                  <table class="table table-bordered table-responsive-md" id="table">
                <thead class="thead-light">
                    <tr>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Role</th>
                        <th>Date Created</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    
                     <?php
                     $query = $conn->query("SELECT t2.user_info_id, t2.user_firstname, t2.user_lastname, t1.id, t1.username, t1.email, t1.password,t1.user_type,t1.created_at
                                            FROM user_account t1 RIGHT JOIN user_information t2 ON t1.id=t2.user_account_id WHERE t1.user_type = 'user' ORDER BY t1.id ASC");
                     while($result = $query->fetch_array()) { 
                         ?> 
                    <tr>
                        <td><a class="text-dark" style="text-decoration:none;"href="#user<?php echo $result['id']; ?>" data-toggle="modal"><?php echo $result['username'] ?> </a>
                            <?php include('modal/admin_user_view.php'); ?>
                        </td>
                        <td><?php echo $result['email'] ?></td>
                        <td class="hidetext"><?php echo $result['password'] ?></td>
                        <td><span class="badge badge-info p-1"><?php echo $result['user_type'] ?></span></td>
                        <td><?php echo $result['created_at'] ?></td>
                        <td> <div class="text-center">
                               <!--EDIT USER -->
                               <a href="#user_edit<?php echo $result['id']; ?>"  data-toggle="modal" class="btn btn-success btn-circle text-white" data-toggle="tooltip"
                              data-placement="top" title="Edit"><i class="fas fa-pen"></i></a>
                               <!--DELETE USER -->
                               <a href="admin_user_delete.php?id=<?php echo $result["id"]; ?>" class="btn btn-danger btn-circle" data-toggle="tooltip"
                               data-placement="top" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                               <i class="fas fa-trash-alt"></i></a>
                               
                               <?php include('modal/admin_update_modal.php'); ?>
                            </div>
                        </td>
                    </tr>
                  <?php } ?>
                </tbody>
            </table>
              </div>
                  <div class="card-footer"></div>
                </form>
            </div>
        </div>
        <!-- /.container-fluid -->
            <nav class="navbar navbar-expand bg-white text-center shadow">
                <a class="navbar-brand text-muted font-weight-light mt-2 mb-2" style="font-size: 13px; margin:auto;"> Technological University of the Philippines<br>2019-2020</a>
            </nav>
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
 
<style>
.hidetext { 
    -webkit-text-security: disc; 
}
    
</style>
 <script src="assets/jquery/jquery.min.js"></script>
 <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
 <script src="assets/jquery-easing/jquery.easing.min.js"></script>
  <!-- Custom scripts for all pages-->
 <script src="assets/js/nav-admin.js"></script>
 <script src="assets/js/sweetalert.min.js"></script>
 
<link href="assets/DataTables/DataTables/css/responsive.bootstrap4.min.css" type="text/css" rel="stylesheet">
<link href="assets/DataTables/DataTables/css/datatables.bootstrap4.min.css" type="text/css" rel="stylesheet">
<script src="assets/DataTables/DataTables/js/jquery.datatables.min.js"></script>
<script src="assets/DataTables/DataTables/js/datatables.bootstrap4.min.js"></script>
<script>

$(document).ready( function () {
    $('#table').DataTable({
        responsive: true,
        bPaginate: true,
        bFilter: true,
        bInfo: true,
    	ordering: false,
    	autoWidth: true,
        lengthMenu: [5, 10, 25, 50],
        
    });
} );


</script>
  </body>
</html>