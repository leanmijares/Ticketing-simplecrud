<?php
 include('dbconnection/connection.php');
 include('assets/sweetalert.php');

 if(isset($_POST['update'])){
	$id=$_GET['id'];
 
	$username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user_firstname = $_POST['user_firstname'];
        $user_lastname = $_POST['user_lastname'];
        $isValid = true;
        
        
        if($isValid){
	$insertSQL = "UPDATE user_account t1 INNER JOIN user_information t2 ON t1.id = t2.user_account_id SET t1.username='$username', t1.email='$email', t1.password='$password', t2.user_firstname='$user_firstname', t2.user_lastname='$user_lastname'  WHERE t1.id='$id'";
	$stmt=mysqli_query($conn,$insertSQL);
        if($stmt)        
           {
          ?>
        <script language="JavaScript">
           $(document).ready(function(){
	 
            swal("Update successfully!", {
            button: false
            });
		
		
            });
        </script>    
        <?php include("admin_user.php") ?>
        
    <?php 
           }
          else {
          ?>
        <script language="JavaScript">
           $(document).ready(function(){
	 
            swal("Update error!", {
            button: false
            });
		
		
            });
        </script> 
<?php include("admin_user.php") ?>  <?php
          }
        }
        
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