<?php
include('dbconnection/connection.php');
$error_message = "";$success_message = "";
if(!isset($_SESSION['user_type'])){
   session_destroy();
   header("Location: index.php");
   exit;
}

 if(isset($_POST['prioritylevel'])){
 
        $priority_name = trim($_POST['priority_name']);
        $isValid = true;
        
        
        if($isValid) {
        $insertSQL="INSERT INTO ticket_priority set priority_name=' $priority_name'";
        $result = mysqli_query($conn, $insertSQL);
        if($result==true){
        $success_message = "Added successfully.";
         }
        else {
        $error_message = "Please Try Again.";
        }   
        }
 }

?>


<!doctype html>
<html lang="en">
  <head>
    <title>Priority Statuses</title>
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
        
    <div class="container">
        <div class="row">
          <div class="col-8">
            <div class="card">
              <form class="" method="post">
                <div class="card-body m-2">
                    <h6 class="card-subtitle mb-2 text-muted">Add Priority Level</h6>
                <p class="card-text">
                    <div class="form-group row">
                        <label class="mb-2 text-muted">Label Display Name</label>
                        <div class="form-group w-100 mb-0">
                            <input type="text" class="form-control" name="priority_name" style="border-radius: 0;" required>
                        </div>
                    </div>
                </p>
                <?php 
                    // Display Error message
                    if(!empty($error_message)){
                    ?>
                    <div class="alert alert-danger">
                    <strong>Error!</strong> <?= $error_message ?>
                    </div>

                    <?php
                    }
                    ?>

                    <?php 
                    // Display Success message
                    if(!empty($success_message)){
                    ?>
                    <div class="alert alert-success">
                    <strong>Success!</strong> <?= $success_message ?>
                    </div>

                    <?php
                    }
                    ?>
                </div>
              <div class="card-footer"><button type="submit" name="prioritylevel" class="btn" style="background-color: #44649c; font-size: 13px;">Add New Level</button></div>
              </form>
            </div>
         </div>  
       </div>
    </div>
    
        
    <br><br><br>
    <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 text-muted">Priority Lists</h6>
                </div>
                <div class="card-body m-2">
                <table class="table table-bordered table-responsive-md" id="tablelevel">
                <thead class="thead-light">
                    <tr>

                        <th>ID</th>
                        <th>Level Display Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    
                     <?php
                     $query = $conn->query("SELECT * FROM ticket_priority");
                     while($result = $query->fetch_array()) { ?> 
                    <tr>
                        <td><?php echo $result['priority_id'] ?></td>
                        <td class="hidetext"><?php echo $result['priority_name'] ?></td>
                        <td> <div class="text-center">
                                <a href="admin_priority_level_delete.php?priority_id=<?php echo $result["priority_id"]; ?>" class="btn btn-danger btn-circle" data-toggle="tooltip"
                               data-placement="top" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                               <i class="fas fa-trash-alt"></i></a>
                            </div>
                        </td>
                    </tr>
                  <?php } ?>
                </tbody>
            </table>
                </div>
            </div>

    </div>
        <nav class="navbar navbar-expand bg-white text-center shadow">
            <a class="navbar-brand text-muted font-weight-light mt-2 mb-2" style="font-size: 13px; margin:auto;"> Technological University of the Philippines<br>2019-2020</a>
        </nav>
        <!-- Scroll to Top Button-->
  
      </div>
      <!-- End of Main Content -->
    </div>
    <!-- End of Content Wrapper -->
  </div>
  <!-- End of Page Wrapper -->
  
  
  
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
 <link href="assets/DataTables/DataTables/css/responsive.bootstrap4.min.css" type="text/css" rel="stylesheet">
<link href="assets/DataTables/DataTables/css/datatables.bootstrap4.min.css" type="text/css" rel="stylesheet">
<script src="assets/DataTables/DataTables/js/jquery.datatables.min.js"></script>
<script src="assets/DataTables/DataTables/js/datatables.bootstrap4.min.js"></script>
<script>

$(document).ready( function () {
    $('#tablelevel').DataTable({
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