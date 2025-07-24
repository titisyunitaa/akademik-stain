  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="<?php echo base_url('assets/')?>img/logo_stain.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SI Layanan Akademik</span>
    </a>

    <!-- query Menu berdasarkan role  -->
    <?php
        //mengambil data role dari session
        $role_id = $this->session->userdata('role_id');
        
        $queryMenu = "SELECT `user_menu`.`id`,`menu`
                      FROM `user_menu` JOIN `user_access_menu`
                      ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                      WHERE `user_access_menu`.`role_id` = $role_id
                      ORDER BY `user_access_menu`.`menu_id` ASC
        
                      ";

        $menu = $this->db->query($queryMenu)->result_array();
        
    ?>


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url('assets/')?>img/icon_user.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $user['nama']?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <?php foreach($menu as $m ) :?>
          <li class="nav-header"><?php echo $m['menu']?></li>

          <!-- Siapkan Sub Menu sesuai Menu -->
            <?php 

                $menuId = $m['id'];
                $querySubMenu = "SELECT *
                                FROM `user_sub_menu`
                                WHERE `menu_id` = $menuId
                                AND `is_active` = 1
                                ";
              $subMenu = $this->db->query($querySubMenu)->result_array();
            ?>

            <?php foreach($subMenu as $sm) : ?>
              <li class="nav-item">
                <a href="<?php echo base_url($sm['url']) ?>" 
                  class="nav-link <?php echo ($title == $sm['title']) ? 'active' : ''; ?>">
                  <i class="<?php echo $sm['icon'] ?>"></i>&nbsp;&nbsp;&nbsp;
                  <p><?php echo $sm['title'] ?></p>
                </a>
              </li>
            <?php endforeach; ?>


          <?php endforeach;?>


          
          
           <li class="nav-item">
            <a href="<?php echo base_url('auth/logout')?>" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>