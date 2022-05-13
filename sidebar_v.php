  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link" style="display:flex">
      <img src="http://www.motherhood.com.my/external/MMY%20LOGO-01.svg" alt="MMY" class="brand-image" style="width:100%;max-height:unset;">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item <?php echo (isset($arr_pathinfo['filename']) && in_array($arr_pathinfo['filename'], array('webinar_list', 'webinar_form'))) ? 'menu-open' : '' ?>">
            <a href="#" class="nav-link <?php echo (isset($arr_pathinfo['filename']) && in_array($arr_pathinfo['filename'], array('webinar_list', 'webinar_form'))) ? 'active' : '' ?>">
              <i class="fas fa-book nav-icon"></i>
              <p>
                Webinar
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="webinar_list.php" class="nav-link <?php echo (isset($arr_pathinfo['filename']) && $arr_pathinfo['filename'] == 'webinar_list') ? 'active' : '' ?>">
                  <p>List Webinar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="webinar_form.php" class="nav-link <?php echo (isset($arr_pathinfo['filename']) && $arr_pathinfo['filename'] == 'webinar_form') ? 'active' : '' ?>">
                  <p>Add Webinar</p>
                </a>
              </li>
            </ul>
          </li> 
          <li class="nav-item <?php echo (isset($arr_pathinfo['filename']) && in_array($arr_pathinfo['filename'], array('workshop_list', 'workshop_form'))) ? 'menu-open' : '' ?>">
            <a href="#" class="nav-link <?php echo (isset($arr_pathinfo['filename']) && in_array($arr_pathinfo['filename'], array('workshop_list', 'workshop_form'))) ? 'active' : '' ?>">
              <i class="fas fa-chalkboard-teacher nav-icon"></i>
              <p>
                Workshop
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="workshop_list.php" class="nav-link <?php echo (isset($arr_pathinfo['filename']) && $arr_pathinfo['filename'] == 'workshop_list') ? 'active' : '' ?>">
                  <p>List Workshop</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="workshop_form.php" class="nav-link <?php echo (isset($arr_pathinfo['filename']) && $arr_pathinfo['filename'] == 'workshop_form') ? 'active' : '' ?>">
                  <p>Add Workshop</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item <?php echo (isset($arr_pathinfo['filename']) && in_array($arr_pathinfo['filename'], array('worksheet_list', 'worksheet_form'))) ? 'menu-open' : '' ?>">
            <a href="#" class="nav-link <?php echo (isset($arr_pathinfo['filename']) && in_array($arr_pathinfo['filename'], array('worksheet_list', 'worksheet_form'))) ? 'active' : '' ?>">
              <i class="fas fa-school nav-icon"></i>
              <p>
                Worksheet
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="worksheet_list.php" class="nav-link <?php echo (isset($arr_pathinfo['filename']) && $arr_pathinfo['filename'] == 'worksheet_list') ? 'active' : '' ?>">
                  <p>List Worksheet</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="worksheet_form.php" class="nav-link <?php echo (isset($arr_pathinfo['filename']) && $arr_pathinfo['filename'] == 'worksheet_form') ? 'active' : '' ?>">
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