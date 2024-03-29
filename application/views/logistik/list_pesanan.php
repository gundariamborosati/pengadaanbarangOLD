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
          <a class="dropdown-item" href="<?php echo base_url('/c_logistik/form_update');?>"><i class="fa fa-user"></i> <?php echo $this->session->userdata('username');?></a>
          <a class="dropdown-item" href="<?php echo base_url('c_logistik/keluar'); ?>"><i class="fa fa-sign-out"></i> Logout</a>
        </div>
      </li>
    </ul>
  </header>
  <div class="app-body">
    <div class="sidebar">
      <nav class="sidebar-nav">
        <ul class="nav">
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
           <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/c_pesanan/listPesanan');?>"><i class="fa fa-shopping-cart"></i> Pesanan </a>
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
          </li>
           <li class="nav-item nav-dropdown"> 
          <a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-file"></i>Dokumen</a>          
            <ul class="nav-dropdown-items">		
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/c_suratKeluar/viewSuratKeluarLogistik');?>"><i class="fa fa-share"></i> Surat Keluar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href=" <?php echo base_url('/c_suratMasuk/surat_masukLogistik/');?>" > <i class="fa fa-download"></i> Kotak Masuk</a>
              </li>
          
            </ul>
          </li>   
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
        <li class="breadcrumb-item active">Kelola Pesanan</li>

        <!-- Breadcrumb Menu-->
      </ol>
      <!-- /.conainer-fluid -->
     
      <div class="container-fluid">
        <div class="card card-accent-success">
          <div class="card-header">
            <h3>  Kelola Pesanan </h3>
            <center><a href="<?php echo base_url('/c_pesanan/formadd');?>" class="btn btn-primary"> <i class="fa fa-plus"></i> Tambah Pesanan </a></center>
          </div>
          <div class="card-body">
          
              <table id="dataPesanan" class="table ">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>ID Pesanan</th>
                    <th>Nama Perusahaan</th>
                    <th>Nama Pesanan</th>
                    <th>Tanggal Pesanan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $dataPesanan = json_decode(json_encode($pesanan), true);
                  $no = 0;
                  foreach($dataPesanan as $pecah):
                  $no++;
                  ?>
                  
                  <tr>
                    <td><?php  echo $no; ?></td>
                    <td><?php  echo $pecah['id_pesanan']; ?></td>
                    <td><?php echo $pecah['nama_perusahaan'];?></td>                     
                    <td><?php echo $pecah['nama_pesanan'];?></td>                     
                    <td><?php echo $pecah['tanggal'];?></td>                     
                     <td>  
                       <a href="<?php echo base_url('/c_detilpesanan/detil_pesanan/'.$pecah['id_pesanan']);?>" class="btn btn-success"> <i class="fa fa-external-link"> </i> detail</a>
                       <!--  <a href="<?php echo base_url('/c_pesanan/edit_pesanan/'.$pecah['id_pesanan']);?>" class="btn btn-primary"> <i class="fa fa-pencil"></i> Edit</a> -->

                        <a href="javascript:;"
                            data-id_pesanan = "<?php echo $pecah['id_pesanan'];?>"
                            data-nama_perusahaan = "<?php echo $pecah['nama_perusahaan'];?>"
                            data-vendor = "<?php echo $pecah['vendor'];?>"
                            data-nama_pesanan = "<?php echo $pecah['nama_pesanan'];?>"                            
                            data-toggle="modal" data-target="#edit-pesanan"> 
                        <button data-toggle="modal" data-target="#ubah-data" class="btn btn-primary"> <i class="fa fa-pencil">Edit  </button></a></i>
                        <a href="<?php echo base_url('/c_surat/suratSPPH/'.$pecah['id_pesanan']);?>" class="btn btn-primary"> <i class="fa fa-print"></i> Print</a>
                        <a href="<?php echo base_url('/c_pesanan/edit_pesanan/'.$pecah['id_pesanan']);?>" class="btn btn-primary"> <i class="fa fa-share-square-o"></i> Kirim</a>
                    </td>
                  </tr>
                  <?php
                  endforeach;
                  ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>

  <div id="edit-pesanan" class=" modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- konten modal-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <h4>Edit Pesanan</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
          
        </div>
        <!-- body modal -->
        <!--  tambah container -->
        <div class="container-fluid">
          
          
          <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
          
          <form action="<?php echo base_url(). 'c_pesanan/update_pesanan/'.$pecah['id_pesanan'] ; ?>" method="post">
            <input type="hidden" id="id_pesanan" name="id_pesanan">
            <table class="table-form" width="100%">
              <br>
              <tr>
                <td width="20%">Nama Pesanan</td>
                <td><b><input type="text"  id="nama_pesanan" name="nama_pesanan" class="form-control" style="width: 200px" required></b></td>
              </tr>
              <tr>
                <td width="30%">Nama Perusahaan </td>
                <td><!-- <b><input type="text area" id="nama_perusahaan" name="nama_perusahaan"  class="form-control" style="width:200px"  required></b> -->
                </td>
              </tr>
              <tr><td colspan="2">
                
                <tr>
                  <td width="40%">Vendor</td>
                  <td><b><input type="text" id="vendor" name="vendor" class="form-control" style="width:200px"  required></b></td>
                </tr>
                <tr><td colspan="2">                
                  <br>
                  
                  <!-- footer modal -->
                  <div class="modal-footer">
                    <button type="submit"  class="btn btn-success" value="submit"><i class="fa fa-check icon-white"></i> Simpan</button>
                  </form>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                </div>
              </table>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>
</div>