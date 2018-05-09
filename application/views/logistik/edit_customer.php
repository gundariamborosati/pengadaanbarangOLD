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
          <a class="dropdown-item" href="<?php echo base_url('/c_logistik/viewProfile');?>"><i class="fa fa-user"></i> <?php echo $this->session->userdata('username');?></a>
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
            <a class="nav-link" href=""><i class="fa fa-home"></i> Home</a>
          </li>
          <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-file"></i>Dokumen</a>
            <ul class="nav-dropdown-items">
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-share"></i> Send Dokumen</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-download"></i> Receive Dokumen</a>
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
                <a class="nav-link" href="#"><i class="fa fa-tasks"></i> Kelola progress pengadaan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/c_statusPesanan/input');?>"><i class="fa fa-shopping-cart"></i> Kelola status pesanan</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('/c_ulasan/viewUlasanlog');?>"><i class="fa fa-comment"></i>View Ulasan</a>
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
      <!-- /.conainer-fluid -->
<?php foreach($user as $detail): ?>
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5> <i class="fa fa-check"></i>Detail Customer</h5>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-9">
                <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>        
                <div class="panel-body">
                  <div class="form-horizontal">
                    <form action="<?php echo base_url(). 'c_customer/update_user/'.$detail->username; ?>" method="post">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="control-label">Nama Perusahaan</label>
                            <div class="">
                              <input class="form-control" type="text" name="nama_perusahaan" value="<?php echo $detail->nama_perusahaan ;?>" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label">Alamat Perusahaan</label>
                            <div>
                              <input class="form-control" type="text" name="alamat_perusahaan" value="<?php echo $detail->alamat_perusahaan ;?>" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label">Email</label>
                            <div>
                              <input class="form-control" type="text" name="email" value="<?php echo $detail->email ;?>" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label">Contact</label>
                            <div>
                              <input class="form-control" type="text" name="contact" value="<?php echo $detail->contact ;?>" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label">Username</label>
                            <div>
                              <input class="form-control" type="text" name="username" value="<?php echo $detail->username ;?>" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label">Status</label>
                            <div>
                            <?php if ($detail->status=='aktif') {?>
                              <label class="radio-inline"><input type="radio" name="status" checked="<?= $detail->status=='aktif'?'checked':'';?>" value="aktif"> Aktif</input></label>
                              <label class="radio-inline"><input type="radio" name="status"  value="tidak aktif">Tidak Aktif</input></label>
                            <?php } else { ?>
                              <label class="radio-inline"><input type="radio" name="status"  value="aktif">Aktif</input></label>
                              <label class="radio-inline"><input type="radio" name="status" checked="<?= $detail->status=='aktif'?'checked':'';?>" value="tidak aktif"> Tidak Aktif</input></label>                    
                            <?php } ?>                                                    
                            </div>
                          </div>

                           <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                             <a href=""><button class="btn btn-primary"> <i class="fa fa-pencil">Edit</i></button></a>
                              <a href="<?php echo base_url('c_logistik/kelola_user')?>" class="btn btn-danger"> Cancel </a>
                            </div>
                          </div>

                        </div>
                          <div class="col-md-6">
                            <h2>NPWP</h2>
                              <div class="col-md-6">
                                <img style="width:200%" class="img-responsive" src="<?php echo base_url('asset/img/npwp/'.$detail->npwp)?>" alt="">
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