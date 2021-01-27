<?php 
include("assets/css.php");
include("assets/sweetalert.php");

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
include "dbconnection/connection.php";
$username = $_POST['username'];
$password = $_POST['password'];
$op = $_GET['op'];

if($op=="in"){
    $sql = mysqli_query($conn,"SELECT a.*, b.* FROM user_account a INNER JOIN user_information b ON a.id=b.user_account_id WHERE (email='$username' OR username='$username') AND password='$password' LIMIT 1");
    if(mysqli_num_rows($sql)==1){
        $qry = mysqli_fetch_array($sql);
        $_SESSION['id'] = $qry['id'];
        $_SESSION['username'] = $qry['username'];
        $_SESSION['user_type'] = $qry['user_type'];
        if($qry['user_type']=="admin"){
            header("location:admin_dashboard.php");
        }else if($qry['user_type']=="user"){
              $user_firstname = $_POST['user_firstname'];
              $user_lastname = $_POST['user_lastname'];
              $_SESSION['user_firstname'] = $qry['user_firstname'];
              $_SESSION['user_lastname'] = $qry['user_lastname'];
            header("location:user_dashboard.php");
        }
    }else{
        ?>
        <script language="JavaScript">
           $(document).ready(function(){
	 
            swal("Invalid Username and Password!", {
            button: false
            });
		
		
	});
        </script>
     <?php include("index.php") ?>
<?php
    }
}else if($op=="out"){
    unset($_SESSION['id']);
    unset($_SESSION['user_type']);
    header("location:index.php");
}
?>

<style>
  .swal-button {
  padding: 7px 19px;
  border-radius: 2px;
  background-color: #4962B3;
  font-size: 12px;
  border: 1px solid #3e549a;
  text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.3);
}
</style>
