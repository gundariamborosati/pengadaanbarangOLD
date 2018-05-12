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
            <a class="nav-link" href="<?php echo base_url('/c_logistik/home');?>"><i class="fa fa-home"></i> Home</a>
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
                <a class="nav-link" href="<?php echo base_url('/c_progress/viewProgress');?>"><i class="fa fa-tasks"></i> Kelola progress pengadaan</a>
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
      <div class="container-fluid">
        <div class="card card-accent-success">
          <div class="card-header">
            <h3>  input status pesanan </h3>
          </div>
    <div class="pull-right">

<a href="<?php echo base_url('c_statusPesanan/viewStatuslog')?>" class="btn btn-primary pull-right"><i class="fa fa-eye"> </i> status pesanan </a>

    
    </div>
          <body>
                  <!-- Navigation -->
           
     <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                       
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                
                            </div>

                           <!--  <div class="panel-body"> -->
                           <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        
                                        <?php echo form_open('c_statusPesanan/inputStatusPesanan'); ?>
                                        
                          <!-- no -->
                  <div class="form-group ">
                      <label for="no" class="col-md-3 control-label">no pesanan</label>
                      <div class="col-md-7 col-sm-12 required">
                        <input type="text" value="<?php echo $no; ?>" class="form-control" name="txt_id" readonly required>
                      </div>
                  </div>
                  
                  
                  <!-- departemen -->
                  <div class="form-group ">
                      <label for="tipe" class="col-md-3 control-label">ke customer</label>
                      <div class="col-md-7 required">
                        <select class="form-control select2" style="min-width:250px;" required name="username" id="username">
                          <option></option>
                           <?php
                           if($username){
                             foreach($username as $d){
                               echo "<option value='$d->username'>$d->username</option>";
                              }
                            }
                          ?>
                        </select>
                      </div>
                  </div>
                  <!-- tgl-->
                

                  <div class="form-group ">
                      <label for="tgl" class="col-md-3 control-label">Tanggal</label>
                      <div class="col-md-7 col-sm-12 required">
                        <div class="input-group date">
                          <input type="date" name="txt_tgl" class="form-control pull-right" id="datepickerNow" data-date-format="dd/mm/yyyy" required>
                        </div>
                      </div>
                  </div>
              <div class="form-group ">
                      <label for="tipe" class="col-md-3 control-label">status</label>
                      <div class="col-md-7 required">
                        <select class="form-control select2" style="min-width:250px;" required name="status" id="">
                          <option>waiting</option>
                            <option>progress</option>
                              <option>finish</option>         
                        </select>
                      </div>
                  </div>
                    
                    <div class="form-group">
                            <label for="tipe" class="col-md-3 control-label">catatan</label>
                             <div class="col-md-7 required">
                             <textarea name="catatan" class="form-control"  rows="7" cols="80" ></textarea>
                              </div>
                              </div>
                   <div class="col-md-7 required">
                    <button type="submit" name="btnSimpan" class="btn btn-success"><i class="fa fa-check icon-white"></i> send </button>
                    </div>
                  </div>
                </form>
              
            </div>
            </div>
            </div>
            </main>
            </div>
          
    </div>
  </div>
</div>
</main>
</div>
