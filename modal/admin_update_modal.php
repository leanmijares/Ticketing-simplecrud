
 <div class="modal fade" id="user_edit<?php echo $result['id']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header no-border">
          <h5 class="modal-title text-gray">Update User</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
           <?php
                    $edit=mysqli_query($conn,"select t1.*, t2.* from user_account t1 RIGHT JOIN user_information t2 ON t1.id=t2.user_account_id where t1.id='".$result['id']."'");
                    $row=mysqli_fetch_array($edit);
            ?>
          <form class="user-update" method="post" action="admin_user_update.php?id=<?php echo $result["id"]; ?>" novalidate>
        <div class="modal-body p-5">
                
                <div class="form-group w-100">
                    <div class="text-left">
                    <label>First Name</label>
                    </div>
                  <input type="text" class="form-control form-control-user" name="user_firstname" id="user_firstname" placeholder="First Name" value="<?php echo $row['user_firstname']; ?>" required>
                </div>
                    
                <div class="form-group w-100">
                    <div class="text-left">
                    <label>Last Name</label>
                    </div>
                  <input type="text" class="form-control form-control-user" name="user_lastname" id="user_lastname" placeholder="Last Name" value="<?php echo $row['user_lastname']; ?>" required>
                </div>
            
                <div class="form-group">
                    <div class="text-left">
                    <label>Username</label>
                    </div>
                  <input type="text" class="form-control form-control-user" name="username" id="username" placeholder="Username" value="<?php echo $row['username']; ?>" required>
                </div>
        
                <div class="form-group">
                    <div class="text-left">
                    <label>Email</label>
                    </div>
                  <input type="email" class="form-control form-control-user" name="email" id="email" placeholder="Email Address"  value="<?php echo $row['email']; ?>" required>
                </div>
            
                  <div class="form-group">
                    <div class="text-left"><label>Password</label></div>
                    <div class="input-group" id="pword">
                        <input type="text" class="form-control form-control-user" name="password" placeholder="Password"  value="<?php echo $row['password']; ?>" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                        <div class="input-group-append"><span class="input-group-text"><i class="fa fa-eye-slash" aria-hidden="true"></i></span></div>
                        <div class="valid-feedback">Looks good!</div><div class="invalid-feedback">Password must contain 8 characters, uppercase and number! </div>
                    </div> 
                  </div>
                 
             
                    
        </div>
        <div class="modal-footer no-border">
          <button class="btn btn-info" class="close" data-dismiss="modal">Cancel</button>
           <button type="submit" name="update" class="btn btn-warning">Add</button>    
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
<script>
(function() {
    window.addEventListener('load', function() {
      var forms = document.getElementsByClassName('user-update');

      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
  
  
  $(document).ready(function() {
     $("#pword span").on('click', function(event) {
        event.preventDefault();
        if($('#pword input').attr("type") == "text"){
            $('#pword input').attr('type', 'password');
            $('#pword i').addClass( "fa-eye-slash" );
            $('#pword i').removeClass( "fa-eye" );
        }else if($('#pword input').attr("type") == "password"){
            $('#pword input').attr('type', 'text');
            $('#pword i').removeClass( "fa-eye-slash" );
            $('#pword i').addClass( "fa-eye" );
        }
    });
});
</script>
