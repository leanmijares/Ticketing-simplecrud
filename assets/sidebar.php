    <!-- Sidebar -->
    <ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
       <a class="sidebar-brand mt-3" href="">
        <div class="sidebar-heading">Core</div>
      </a>

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="admin_dashboard.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      
      <!-- Nav Item - Tables -->
      <li class="nav-item">
          <a class="nav-link" href="admin_user.php">
          <i class="fas fa-fw fa-table"></i>
          <span>User Management</span></a>
      </li>
      <hr class="sidebar-divider">
      
      
      <li class="nav-item">
          <a class="nav-link" href="admin_status_table.php">
          <i class="fas fa-fw fa-clipboard-list"></i>
          <span>Tickets</span></a>
      </li>
      
      
      <hr class="sidebar-divider">
      <div class="sidebar-heading">Account</div>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Status</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Ticket</h6>
            <a class="collapse-item" href="admin_type_request.php">Type of Request</a>
            <a class="collapse-item" href="admin_priority_level.php">Priority Levels</a>
          </div>
        </div>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>