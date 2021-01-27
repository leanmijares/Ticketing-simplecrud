<?php
include("dbconnection/connection.php");
$error_message = "";$success_message = "";
if(isset($_POST['request_form'])){
    
    try{
        $ticket_priority_id = $_POST['ticket_priority_id'];
        $ticket_title = $_POST['ticket_title'];
        $ticket_text = $_POST['ticket_text'];
        $ticket_text = $_POST['ticket_type_request'];
        
        $filename = $_FILES['myfile']['name'];

        // destination of the file on the server
        $destination = 'uploads/' . $filename;

        // get the file extension
        $extension = pathinfo($filename, PATHINFO_EXTENSION);

        // the physical file on a temporary uploads directory on the server
        $file = $_FILES['myfile']['tmp_name'];
        $size = $_FILES['myfile']['size'];
        
        $isValid = true;
        
        
    if($isValid) {
            $insertSQL = "INSERT INTO ticket_process(ticket_title,ticket_priority_id,ticket_text, ticket_type_request) values('$ticket_title','$ticket_priority_id','$ticket_text')";
            $stmt=mysqli_query($conn,$insertSQL);

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
    catch(Exception $exception){
        die('ERROR: ' . $exception->getMessage());
    }
}

?>
