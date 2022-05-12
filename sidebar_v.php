  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link" style="display:flex">
      <img src="http://www.motherhood.com.my/external/MMY%20LOGO-01.svg" alt="MMY" class="brand-image" style="width:100%;max-height:unset;">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item <?php echo (isset($arr_url['filename']) && in_array($arr_url['filename'], array('index.php', ''))) ? 'menu-open' : '' ?>">
            <a href="#" class="nav-link <?php echo (isset($arr_url['filename']) && in_array($arr_url['filename'], array('index.php', ''))) ? 'active' : '' ?>">
              <i class="fas fa-book nav-icon"></i>
              <p>
                Webinar
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo (isset($arr_url['basename']) && $arr_url['basename'] != '') ? "/" . $arr_url['basename'] : '#' ?>" class="nav-link <?php echo (isset($arr_url['filename']) && in_array($arr_url['filename'], array('index.php', ''))) ? 'active' : '' ?>">
                  <p>List Webinar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <p>Add Webinar</p>
                </a>
              </li>
            </ul>
          </li> 
          <li class="nav-item <?php echo (isset($arr_url['filename']) && in_array($arr_url['filename'], array('workshop_list', 'workshop_form'))) ? 'menu-open' : '' ?>">
            <a href="#" class="nav-link <?php echo (isset($arr_url['filename']) && in_array($arr_url['filename'], array('workshop_list', 'workshop_form'))) ? 'active' : '' ?>">
              <i class="fas fa-chalkboard-teacher nav-icon"></i>
              <p>
                Workshop
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="workshop_list.php" class="nav-link <?php echo (isset($arr_url['filename']) && $arr_url['filename'] == 'workshop_list') ? 'active' : '' ?>">
                  <p>List Workshop</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="workshop_form.php" class="nav-link <?php echo (isset($arr_url['filename']) && $arr_url['filename'] == 'workshop_form') ? 'active' : '' ?>">
                  <p>Add Workshop</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-school nav-icon"></i>
              <p>
                Worksheet
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <p>List Worksheet</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <p>Add Worksheet</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>