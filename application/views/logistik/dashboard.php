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
        <a class="nav-link" href="<?php echo base_url('/c_logistik/home');?>">Dashboard</a>
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
          <a class="dropdown-item" href="<?php echo base_url('/c_logistik/update_password');?>"><i class="fa fa-user"></i> <?php echo $this->session->userdata('username');?></a>
          <a class="dropdown-item" href="<?php echo base_url('c_logistik/keluar'); ?>"><i class="fa fa-sign-out"></i> Logout</a>
        </div>
      </li>
    </ul>

  </header>

  <div class="app-body">
    <div class="sidebar">
      <nav class="sidebar-nav">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('/c_logistik/home');?>"><i class="icon-speedometer"></i>Logistik Dashboard </a>
          </li>

          <li class="nav-title">
            Menu
          </li>

          <li class="nav-item">  
          <a class="nav-link" href=" <?php echo base_url('/c_logistik/home');?> "><i class="fa fa-home"></i> Home</a>
          </li>
          <li class="nav-item nav-dropdown"> 
          <a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-file"></i> Kirim Surat </a>          
            <ul class="nav-dropdown-items">
              <li class="nav-item">
                 <a class="nav-link" href="<?php echo base_url('/c_suratKeluar/inputSuratCustomer');?>"><i class="fa fa-comment"></i> Customer </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-download"></i> Vendor </a>
              </li> 
            </ul>
          </li>  
          </li>
          
          <li class="nav-item nav-dropdown"> 
          <a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-file"></i>Dokumen</a>          
            <ul class="nav-dropdown-items">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/c_suratKeluar/viewSuratKeluarLogistik');?>"><i class="fa fa-share"></i> Surat Keluar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href=" <?php echo base_url('/c_suratMasuk/surat_masukLogistik');?>" > <i class="fa fa-download"></i> Kotak Masuk</a>
              </li> 
            </ul>
          </li>     

          <li class="nav-item nav-dropdown"> 
          <a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-pencil"></i>Kelola</a>          
            <ul class="nav-dropdown-items">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/c_logistik/kelola_user');?>"><i class="fa fa-user"></i> Kelola user</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/c_progress/viewProgress');?>"><i class="fa fa-tasks"></i> Kelola progress pengadaan</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/c_statusPesanan/input');?>"><i class="fa fa-shopping-cart"></i> Kelola status pesanan</a>
              </li> 
            </ul>
          </li>  

          <li class="nav-item">                                            
            <a class="nav-link" href=" <?php echo base_url('/c_ulasan/viewUlasanlog');?> "><i class="fa fa-comment"></i>View Ulasan</a>                 
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
        <li class="breadcrumb-item"><a href="#">Logistik</a></li>
        <li class="breadcrumb-item active">Dashboard</li>

        <!-- Breadcrumb Menu-->
      </ol>

      <div class="container-fluid">
        <div class="animated fadeIn">
             <div class="card-footer">
              <ul>
                <li>
                  <div class="text-muted">Visits</div>
                  <strong>29.703 Users (40%)</strong>
                  <div class="progress progress-xs mt-2">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </li>
                <li class="d-none d-md-table-cell">
                  <div class="text-muted">Unique</div>
                  <strong>24.093 Users (20%)</strong>
                  <div class="progress progress-xs mt-2">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </li>
                <li>
                  <div class="text-muted">Pageviews</div>
                  <strong>78.706 Views (60%)</strong>
                  <div class="progress progress-xs mt-2">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </li>
                <li class="d-none d-md-table-cell">
                  <div class="text-muted">New Users</div>
                  <strong>22.123 Users (80%)</strong>
                  <div class="progress progress-xs mt-2">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </li>
                <li class="d-none d-md-table-cell">
                  <div class="text-muted">Bounce Rate</div>
                  <strong>40.15%</strong>
                  <div class="progress progress-xs mt-2">
                    <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </li>
              </ul>
            </div>
        </div>
      </div>
      <!-- /.conainer-fluid -->
    </main>
    </div>
    </body>
    



  </div> 