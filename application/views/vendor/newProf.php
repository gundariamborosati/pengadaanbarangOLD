<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
  <header class="app-header navbar">
    <button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button">
      <span class="navbar-toggler-icon"></span>
    </button>
      <style type="text/css">
    body { font-family: sans-serif; }
   </style>
    <ul class="nav navbar-nav d-md-down-none">
      <li class="nav-item px-3">
        <a class="nav-link" href="<?php echo base_url('/c_vendor/home');?>">Dashboard</a>
      </li>
    </ul>
    <ul class="nav navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          Selamat datang <?php echo $this->session->userdata('username');?>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <div class="dropdown-header text-center">
            <strong>Account</strong>
          </div>      
          <a class="dropdown-item" href="<?php echo base_url('/c_vendor/viewProfile');?>"><i class="fa fa-user"></i> <?php echo $this->session->userdata('username');?></a>
          <div class="dropdown-header text-center">
            <strong>Settings</strong>
          </div>
          <a class="dropdown-item" href="<?php echo base_url('/c_vendor/setting');?>"><i class="fa fa-wrench"></i> Setting </a>
          <a class="dropdown-item" href="<?php echo base_url('c_vendor/keluar'); ?>"><i class="fa fa-sign-out"></i> Logout</a>
        </div>
      </li>
    </ul>

  </header>

  <div class="app-body">
    <div class="sidebar">
      <nav class="sidebar-nav">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('/c_vendor/home');?>"><i class="icon-speedometer"></i>Vendor Dashboard </a>
          </li>

          <li class="nav-title">
            Menu
          </li>

          <li class="nav-item">
            <a class="nav-link" href="widgets.html"><i class="fa fa-home"></i> Home </a>                      
          </li>

          <li class="nav-item nav-dropdown"> 
          <a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-file"></i> Kelola dokumen</a>          
            <ul class="nav-dropdown-items">
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-share"></i> Send Dokumen</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-download"></i> Receive Dokumen</a>
              </li> 
            </ul>
          </li>          

          <li class="nav-item">          
            <a class="nav-link" href="widgets.html"><i class="fa fa-square"></i> Kelola Barang </a>
          </li>
          <li class="divider"></li>

        </ul>
      </nav>
      <button class="sidebar-minimizer brand-minimizer" type="button"></button>
    </div>

    <!-- Main content -->
    <main class="main">

      <!-- Breadcrumb -->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item"><a href="#">Vendor</a></li>
        <li class="breadcrumb-item active">Dashboard</li>

        <!-- Breadcrumb Menu-->
      </ol>
    <?php foreach($profile as $user): ?>
<div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <i class="fa fa-user-o"></i> Profil perusahaan
                </div>
                <div class="card-body">
                  <table class="table table-responsive-sm table-striped">   
                    <thead>
                      <tr>                      
                        <th>Nama Perusahaan</th>
                        <th>Alamat Perusahaan</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Username</th>
                      </tr>
                    </thead>     
                    <tbody>
                      <tr>                      
                        <td><?php echo $user['nama_perusahaan']; ?></td>
                        <td><?php echo $user['alamat_perusahaan']; ?></td> 
                        <td><?php echo $user['email']; ?></td> 
                        <td><?php echo $user['contact']; ?></td> 
                        <td><?php echo $user['username']; ?></td> 
                      </tr>
                    </tbody>                                      
                  </table>
                  <?php endforeach; ?>
          </div>
              </div>
            </div>
            <!--/.col-->
          </div>
          <!--/.row-->
        </div>
    </main>
</div>