<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button">
        <i class="fas fa-bars"></i>
      </a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="<?= base_url('dashboard'); ?>" class="nav-link">Home</a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto align-items-center" style="gap: 15px;"> <!-- sejajarkan semua item -->
    
    <!-- Notifications -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#" style="position: relative;">
        <i class="far fa-bell" style="font-size: 22px; color: #333;"></i>
        <span class="badge badge-warning" 
              style="position:absolute; top:-5px; right:-5px; font-size:11px; padding:5px 7px; border-radius:6px;">
          3
        </span>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <span class="dropdown-header">3 Notifikasi</span>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="fas fa-envelope mr-2"></i> 1 pesan baru
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item dropdown-footer">Lihat Semua</a>
      </div>
    </li>

    <!-- User Profile Dropdown -->
    <li class="nav-item dropdown user-menu" style="display: flex; align-items: center;">
      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" style="padding: 0;">
        <div class="bg-primary d-flex align-items-center justify-content-center" 
             style="width:40px; height:40px; border-radius:10px;">
          <i class="far fa-user text-white" style="font-size:18px;"></i>
        </div>
      </a>
      <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <li class="user-header bg-primary">
          <img src="<?= base_url('assets/img/profile/default.jpg'); ?>" class="img-circle elevation-2" alt="User Image">
          <p>
            <?= $this->session->userdata('username'); ?><br>
            <small><?= $this->session->userdata('role_name'); ?></small>
          </p>
        </li>
        <li class="user-footer">
          <a href="<?= base_url('user/profile'); ?>" class="btn btn-default btn-flat">Profil</a>
          <a href="<?= base_url('auth/logout'); ?>" class="btn btn-default btn-flat float-right text-danger">Logout</a>
        </li>
      </ul>
    </li>
  </ul>
</nav>
<!-- /.navbar -->
