<?php include("core/user_process.php") ?>

    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header no-border">
          <h5 class="modal-title text-gray">Add User</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
          <form class="user-add" method="post" novalidate>
        <div class="modal-body p-5">
            
                <div class="form-group w-100">
                  <input type="text" class="form-control form-control-user" name="user_firstname" id="user_firstname" placeholder="First Name" required>
                </div>
                    
                <div class="form-group w-100">
                  <input type="text" class="form-control form-control-user" name="user_lastname" id="user_lastname" placeholder="Last Name" required>
                </div>
            
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="username" id="username" placeholder="Username" required>
                </div>
            
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" name="email" id="email" placeholder="Email Address" required>
                </div>
            
                <div class="form-group">
                    <div class="input-group" id="pass">
                        <input type="password" class="form-control form-control-user" name="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                        <div class="input-group-append"><span class="input-group-text"><i class="fa fa-eye-slash" aria-hidden="true"></i></span></div>
                        <div class="valid-feedback">Looks good!</div><div class="invalid-feedback">Password must contain 8 characters, uppercase and number! </div>
                    </div>    
                </div>

        </div> 
        <div class="modal-footer no-border">
          <button class="btn btn-info" class="close" data-dismiss="modal">Cancel</button>
           <button type="submit" name="add_user" class="btn btn-warning">Add</button>    
        </div>
        </form>
      </div>
    </div>

<script src="assets/jquery/jquery.min.js"></script>
<script src="assets/admin_useradd.js"></script>

<style>
.no-border {
        border:none;
}

.btn:focus, .btn:active:focus, .btn.active:focus {
    box-shadow: none !important;
}
</style>
