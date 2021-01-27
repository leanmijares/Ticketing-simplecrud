
<?php
include("dbconnection/connection.php");
 include('assets/sweetalert.php');

if(isset($_POST['add_user'])){
 
    try{
        $username = trim($_POST['username']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        
        $isValid = true;
        
        if($isValid){

        // Check if Email and Username already exists
        $stmt = $conn->prepare("SELECT * FROM user_account WHERE email = ? AND username = ?");
        $stmt->bind_param("ss", $email, $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();
        if($result->num_rows > 0){
        $isValid = false;
        ?>
        <script language="JavaScript">
           $(document).ready(function(){
	 
            swal("Email and username already exist!", {
            button: false
            });
		
		
            });
        </script>    
        
    <?php 
        }
        }
        
        if($isValid) {
     $insertSQL = "INSERT INTO user_account(username,email,password, user_type) values('$username','$email','$password', 'user')";
     $stmt=mysqli_query($conn,$insertSQL);
     $user_account_id =  mysqli_insert_id($conn);
     if($stmt){
            $user_firstname = $_POST['user_firstname'];
            $user_lastname= $_POST['user_lastname'];   
          $qry="INSERT INTO user_information (user_account_id, user_firstname, user_lastname) VALUES ('$user_account_id', '$user_firstname', '$user_lastname') ";
          $result=mysqli_query($conn,$qry);
          
          if($result)        
           {?>
           <script language="JavaScript">
           $(document).ready(function(){
	 
            swal("Success at Registering!", {
            button: false
            });
		
		
            });
           </script>    
           <?php }
          else {
           ?>
           <script language="JavaScript">
           $(document).ready(function(){
	 
            swal("Error at Registering!", {
            button: false
            });
		
		
            });
           </script>
        <?php 
          }
            }
        }
    }    
    catch(Exception $exception){
        die('ERROR: ' . $exception->getMessage());
    }
}


// Count All Users by ID
   function allusers_byid () 
    {
    global $conn;
    $sql = "SELECT COUNT(id) FROM user_account WHERE user_type='user'";
    $result = mysqli_query($conn,$sql);
    $rows = mysqli_fetch_row($result);
    return $rows[0];
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

