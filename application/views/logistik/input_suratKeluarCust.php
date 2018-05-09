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
          <a class="nav-link" href=" <?php echo base_url('/c_logistik/home');?> "><i class="fa fa-home"></i> Home</a>
          </li>
          <li class="nav-item nav-dropdown"> 
          <a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-file"></i> Kirim Surat </a>          
            <ul class="nav-dropdown-items">
              <li class="nav-item">
                 <a class="nav-link" href="#"><i class="fa fa-comment"></i> Customer </a>
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
                <a class="nav-link" href="#"><i class="fa fa-share"></i> Surat Keluar</a>
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
        <div class="card card-accent-success">
          <div class="card-header">
            <h5>  kirim surat ke customer </h5>
          </div>
  <!--   <div class="pull-right">

    <a href="<?php echo base_url('c_ulasan/viewUlasan')?>" class="btn btn-link pull-right"><i class="fa fa-history"> </i> History Ulasan saya </a>

    </div> -->
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
                                        <?php echo form_open_multipart(base_url('c_suratKeluar/inputSuratKeluarCustomer')) ;?>
                              
                                        <div class="form-group">
                    <!-- departemen -->
                   <div class="form-group ">
                      <label for="tipe" class="col-md-3 control-label">tujuan</label>
                      <div class="col-md-7 required">
                        <select class="form-control select2" style="min-width:250px;" required name="tujuan" id="tujuan">
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
                    <div class="form-group ">
                      <label for="tipe" class="col-md-3 control-label">Jenis Surat </label>
                      <div class="col-md-7 required">
                        <select class="form-control select2" style="min-width:250px;" required name="jenis_surat" id="">
                            <option>----pilih jenis surat----</option>
                            <option>SPH</option>          
                        </select>
                      </div>
                  </div>
                  <div class="form-group">
                            <label for="tipe" class="col-md-3 control-label">nomor surat</label>
                             <div class="col-md-7 required">
                             <input type="text" name="no_surat" class="form-control"  rows="7" cols="80" ></textarea>
                              </div>
                              </div>
                  <!-- tgl-->
                   <div class="form-group ">
                      <label for="tgl" class="col-md-3 control-label">Tanggal</label>
                      <div class="col-md-7 col-sm-12 required">
                        <div class="input-group date">
                          <input type="date" name="tgl_surat" class="form-control pull-right" id="datepickerNow" data-date-format="dd/mm/yyyy" required>
                        </div>
                      </div>
                  </div>
                  <div class="form-group">
                            <label for="tipe" class="col-md-3 control-label">upload</label>
                             <div class="col-md-7 required">
                             <input type="file" class="form-control" placeholder="choose file" name="file"  value="" required>
                              </div>
                              </div> 
                
                  <div class="form-group">
                            <label for="tipe" class="col-md-3 control-label">pesan</label>
                             <div class="col-md-7 required">
                             <textarea name="pesan" class="form-control"  rows="7" cols="80" ></textarea>
                              </div>
                              </div>

                                            <button type="submit" name="simpan" value="submit" class="btn btn-primary">Submit</button>
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
