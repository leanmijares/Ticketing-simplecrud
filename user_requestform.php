<!doctype html>
<html lang="en">
  <head>
    <title>Request Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include("assets/css.php"); ?>
    <?php include("dbconnection/connection.php");  ?>
    <?php include("core/user_form_process.php") ?>
    
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
            
            
     <div class="card shadow mb-4 m-3">     
        <form action="" method="POST" enctype="multipart/form-data" class="profileupdate" novalidate>
             <?php
                $edit=mysqli_query($conn,"select t1.*, t2.* from user_account t1 RIGHT JOIN user_information t2 ON t1.id=t2.user_account_id where t1.id='".$_SESSION['id']."'");
                $row=mysqli_fetch_array($edit);

            ?>
   
            <div class="card-body">
                <div class="p-sm-4">
                    <label class="font-weight-light text-muted">Priority</label>
                    <select class="custom-select" name="ticket_priority_id" required>
                        <option value="selected"></option>
                        <?php
                            $sql = mysqli_query($conn, "SELECT * FROM ticket_priority");
                            $row = mysqli_num_rows($sql);
                        while ($row = mysqli_fetch_array($sql)){ ?>
                            <option name="ticket_priority_id" value="<?php echo $row['0']; ?>"><?php echo $row['1'] ?></option>
                        <?php }?>
                    </select><br><br>
                    
                    <label class="font-weight-light text-muted">Briefly describe your issue</label>
                    <div class="form-group">
                        <input type="text" class="form-control" name="ticket_title" required>
                    </div>
                    
                    <label class="font-weight-light text-muted">Provide details</label>
                    <div class="form-group">
                        <textarea class="form-control" rows="10" name="ticket_text" required></textarea>
                    </div>
                    
                    <label class="font-weight-light text-muted">Type of Request</label>
                    <select class="custom-select" name="ticket_type_request" required>
                        <option value="selected"></option>
                        <?php
                            $sql = mysqli_query($conn, "SELECT * FROM ticket_request");
                            $row = mysqli_num_rows($sql);
                        while ($row = mysqli_fetch_array($sql)){ ?>
                            <option name="ticket_priority_id" value="<?php echo $row['0']; ?>"><?php echo $row['1'] ?></option>
                        <?php }?>
                    </select><br><br>
                    
                    <label class="font-weight-light text-muted">Attachment of File</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>            
            </div>
            <div class="card-footer"><button class="btn btn-info" type="submit" name="profileupdate">Open New Ticket</button></div>
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

  </body>
</html>