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
          <a class="dropdown-item" href="<?php echo base_url('/c_vendor/keluar'); ?>"><i class="fa fa-sign-out"></i> Logout</a>
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
              <a class="nav-link" href="widgets.html"><i class="fa fa-home"></i> Kirim Surat </a>
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
            <a class="nav-link" href="<?php echo base_url('/c_barang/view_barang');?>"><i class="fa fa-square"></i> Kelola Barang </a>
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
        <li class="breadcrumb-item active">Tambah Barang</li>
        <!-- Breadcrumb Menu-->
      </ol>  
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5> <i class="fa fa-plus"></i> Tambah Barang</h5>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-9">              
                <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
                <div class="panel-body">
                  <div class="form-horizontal">
                    <form action="<?php echo base_url(). 'c_barang/add_barang'; ?>" enctype="multipart/form-data" method="post">
                      <div class="row">
                        <div class="col-md-6">
                          <!-- <div class="form-group">
                            <label class="control-label">Id Barang</label>
                            <div class="">
                              <input class="form-control" type="text" name="idbarang" value="" required>
                            </div>
                          </div> -->
                          <div class="form-group">
                            <label class="control-label">Nama Barang</label>
                            <div class="">
                              <input class="form-control" type="text" name="namabarang" value="" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="sel1" >Jenis</label>
                            <select name="jenis" class="form-control" id="sel1">
                            <option value="peralatan kantor">Peralatan kantor</option>
                            <option value="peralatan laboratorium">Peralatan Laboratorium</option>
                            <option value="Meubelair / furniture">Meubelair / furniture</option>
                            <option value="Jaringan IT dan Telekomunikasi" >Jaringan IT dan Telekomunikasi</option>
                            <option value="Peralatan wisuda dan pesta" >Peralatan wisuda dan pesta</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label class="control-label">Gambar</label>
                            <div>
                               <input type="file" class="form-control" placeholder="choose file" name="gambar" value="barang" required>
                            </div>
                          </div>                        
                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                              <button type="submit" class="btn-primary"><i class="fa fa-plus">Tambah</i></button>                              
                              <a class="btn btn-danger" href="<?php echo base_url('c_barang/view_barang')?>"><i class="fa fa-close"></i> Batal</a>
                              </div>
                          </div>
                        </div>                      
                      </div>                      
                    </form>
                    </div>  <!-- end form-horizontal -->
                    </div> <!-- end panel-body -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>
      </div>