<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    
          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn text-muted d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>  
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>
              
            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>
             
            <div class="topbar-divider d-none d-sm-block"></div>
            
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" id="dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small" style="cursor: pointer; letter-spacing: 1px;">
            <?php
                $edit=mysqli_query($conn,"select t1.*, t2.* from user_account t1 RIGHT JOIN user_information t2 ON t1.id=t2.user_account_id where t1.id='".$_SESSION['id']."'");
                $row=mysqli_fetch_array($edit);
            ?>
            <?=$row['user_firstname']." ". $row['user_lastname']?></span></a>
               
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="dropdown">
                <a role="button" class="dropdown-item small"  data-toggle="modal" data-target="#logoutModal" style="cursor: pointer">
                 <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"></i>Log Out </a>
            </div>
            </li>

          </ul>
        </nav>


