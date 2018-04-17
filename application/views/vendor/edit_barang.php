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
        <li class="breadcrumb-item active">Dashboard</li>
        <!-- Breadcrumb Menu-->
      </ol>
            <!-- /.conainer-fluid -->
      <?php foreach($barang as $detail): ?>
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5> <i class="fa fa-check"></i> Barang</h5>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-9">                             
                <div class="panel-body">
                  <div class="form-horizontal">
                    <form action="<?php echo base_url(). 'c_barang/update_barang/'.$detail->idbarang; ?>" method="post">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="control-label">NId Barang</label>
                            <div class="">
                              <input class="form-control" type="text" name="idbarang" value="<?php echo $detail->idbarang ;?>" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label">Nama Barang</label>
                            <div>
                              <input class="form-control" type="text" name="namabarang" value="<?php echo $detail->namabarang ;?>" >
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label">Jenis</label>
                            <div>
                              <input class="form-control" type="text" name="jenis" value="<?php echo $detail->jenis ;?>" >
                            </div>
                          </div>              
                           <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                             <a href=""><button class="btn btn-primary"> <i class="fa fa-pencil">Edit</i></button></a>
                              <a href=""><button class="btn btn-danger"> Cancel </button></a>
                            </div>
                          </div>

                        </div>
                        <div class="col-md-6">
                          <h2>Gambar</h2>
                          <div class="col-md-6">
                          <!--  -->
                            <img style="width:200%" class="img-responsive" src="<?php echo base_url('barang/'.$detail->gambar)?>" alt="">
                          </div>
                        </div>
                      </div>
                      <?php endforeach; ?>
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