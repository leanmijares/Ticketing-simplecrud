 <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
          <div class="login-form-title" style="background-image: url(img/background1.jpg);">
		<span class="login-form-image"></span>
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr bg-white">
                        <div class="rl bg-white"></div>
                    </div>
                </div>
          </div>
          <form class="login-form" action="loginchecker.php?op=in" method="POST">
                <div class="modal-body">
                 <div class="wrap-login">
                        
                    <div class="wrap-input">
                        <input class="input" type="text" name="username" placeholder="Email" required>
			<span class="focus-input"></span>
			<span class="symbol-input">
                            <span class="fas fa-envelope"></span>
                        </span>
		    </div>
                
                    <div class="wrap-input">
			<input id="password-field"  class="input" type="password" name="password" placeholder="Password" required>
                        <span class="focus-input"></span>
			<span class="symbol-input">
                            <span class="fas fa-lock"></span>
			</span>
                     
                    </div>
                    
                     <br><br>     
                <div class="container-login-form-btn p-t-15">
                    <button class="btn btn-block btn-register" type="submit" value="LOGIN">Login Account</button>
		</div>
                         
                  <div class="pt-4"
                        <p> Don't have an account? <a href="registration.php" style="text-decoration: none;">Create now</a> <p>
                  </div>          
            </div>
        </div>
       </form>
      </div>
    </div>

 
 
 