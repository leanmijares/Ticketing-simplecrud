
<!--Update Modal -->

 <div class="modal fade" id="user<?php echo $result['id']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header no-border">
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
           <?php
                    $edit=mysqli_query($conn,"select t1.*, t2.* from user_account t1 RIGHT JOIN user_information t2 ON t1.id=t2.user_account_id where t1.id='".$result['id']."'");
                    $row=mysqli_fetch_array($edit);
            ?>
          <form class="user-update" method="post">
        <div class="modal-body p-5">
                
                <div class="form-group w-100">
                    <div class="text-left">
                    <label>Name</label>
                    </div>
                  <input type="text" class="form-control form-control-user" name="user_firstname" id="user_firstname" placeholder="First Name" value="<?php echo $row['user_firstname']." ". $row['user_lastname']; ?>" readonly>
                </div>
                    
                <div class="form-group">
                    <div class="text-left">
                    <label>Username</label>
                    </div>
                  <input type="text" class="form-control form-control-user" name="username" id="username" placeholder="Username" value="<?php echo $row['username']; ?>" readonly>
                </div>
        
                <div class="form-group">
                    <div class="text-left">
                    <label>Email</label>
                    </div>
                  <input type="email" class="form-control form-control-user" name="email" id="email" placeholder="Email Address"  value="<?php echo $row['email']; ?>" readonly>
                </div>
            
                <div class="form-group">
                    <div class="text-left">
                    <label>Password</label>
                    </div>
                  <input type="text" class="form-control form-control-user" name="password" id="password" placeholder="Password"  value="<?php echo $row['password']; ?>" readonly>
                </div>
            
                <div class="form-group">
                    <div class="text-left">
                    <label>Contact No.</label>
                    </div>
                  <input type="text" class="form-control form-control-user" name="user_contact" id="contact" placeholder="Contact No."  value="<?php echo $row['user_contact']; ?>" readonly>
                </div>
            
             
                    
        </div>
        </form>
      </div>
    </div>
     
   

<style>
.no-border {
        border:none;
}

.btn:focus, .btn:active:focus, .btn.active:focus {
    box-shadow: none !important;
}
</style>
