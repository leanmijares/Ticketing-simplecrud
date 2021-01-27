<?php
session_start();


if(!isset($_SESSION['user_type'])){
   session_destroy();
   header("Location: index.php");
   exit;
}

include ("core/user_process.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Dashboard</title>
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
           
            
        <div class="row no-gutters">
           
          <div class="card col-lg-7 mb-3">
            <div class="card-header"><i class="far fa-chart-bar"></i> Ticket History</div>
                <div class="card-body">
                    <canvas id="myChart" width="500" height="300"></canvas>
                </div>
          </div>
          <div class=" col-lg-4 ml-auto">
           <div class="form-group">
            <div class="card text-muted mb-4" style="height: 150px;">
                <div class="card-body font-weight-light">
                    <?php
                       $edit=mysqli_query($conn,"select t1.*, t2.* from user_account t1 RIGHT JOIN user_information t2 ON t1.id=t2.user_account_id where t1.id='".$_SESSION['id']."'");
                       $row=mysqli_fetch_array($edit);
                         
                     ?>  <i class="fas fa-user-friends"></i>  <?php  echo $row['user_firstname'];
                     ?> <br> <i class="fas fa-envelope"></i>  <?php
                         echo $row['email'];
                     
                    ?>
                    <hr class="sidebar-divider">
                </div>
            </div>
                <div class="card text-muted">
                <div class="card-body font-weight-light">
                    <label>User Management</label><span class="badge badge-dark float-right"><?php echo allusers_byid(); ?></span>
                    <hr class="sidebar-divider m-0">
                    <label>Generate Ticket</label><span class="badge badge-dark float-right"></span>
                    <hr class="sidebar-divider m-0">
                    <label>Completed</label><span class="badge badge-dark float-right"></span>
                </div>
                </div>
  
          </div>
          </div>
        </div>
           <br><br>
      
           
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
  <script src="assets/js/charts.js"></script>

<script>
var canvas = document.getElementById('myChart');

var data = {
     labels: ['M', 'T', 'W', 'T', 'F', 'S', 'S'],
    datasets: [{
      label: '',
      data: [12, 19, 3, 17, 6, 3, 7],
      backgroundColor: "rgba(153,255,51,0.4)"
    }, {
      label: '',
      data: [2, 29, 5, 5, 2, 3, 10],
      backgroundColor: "rgba(255,153,0,0.4)"
    }]
};
var option = {
	scales: {
  	yAxes:[{
    		stacked:true,
        gridLines: {
        	display:true,
          color:"rgba(255,99,132,0.2)"
        }
    }],
    xAxes:[{
    		gridLines: {
        	display:true
        }
    }]
  }
};

var myBarChart = Chart.Line(canvas,{
	data:data,
  options:option
});
</script>

  </body>
</html>