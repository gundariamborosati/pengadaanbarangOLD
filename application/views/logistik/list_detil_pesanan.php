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
            <a class="nav-link" href=""><i class="fa fa-home"></i> Home</a>
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
            <h3>  Detail Pesanan</h3>
          </div>
          <div class="card-body">
          
              <table id="detilPesanan" class="table ">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Id</th>
                    <th>Nama Barang</th>
                    <th>Spesifikasi Barang</th>
                    <th>Volume</th>
                    <th>Satuan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $detilPesanan = json_decode(json_encode($detil_pesan), true);
                  $no = 0;
                  foreach($detilPesanan as $pecah):
                  $no++;
                  ?>
                  
                  <tr>
                    <td><?php  echo $no; ?></td>
                    <td><?php  echo $pecah['id_detil_pesanan']; ?></td>
                    <td><?php  echo $pecah['nama_barang']; ?></td>
                    <td><?php echo $pecah['spesifikasi_barang'];?></td>                     
                    <td><?php echo $pecah['volume_barang'];?></td>                     
                    <td><?php echo $pecah['satuan'];?></td>                     
                     <td>  
                        <a href="<?php echo base_url('/c_detilpesanan/edit_detail_pesanan/'.$pecah['id_detil_pesanan']);?>" class="btn btn-primary" data-toggle="modal" data-target="#myModal"> <i class="fa fa-pencil"></i> Edit</a>
                     
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


      <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- konten modal-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <h4>Edit Detil Pesanan</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
       
        </div>
        <!-- body modal -->
       
  <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
      
    <form action="<?php echo base_url(). 'c_detilpesanan/update_detilpesanan/'.$pecah['id_detil_pesanan']; ?>" method="post">
        
          <table class="table-form" width="100%">
          <br>
  <tr>
  <td width="20%">Nama Barang</td>
  <td><b><input type="text"  name="nama_barang" value="<?php  echo $pecah['nama_barang']; ?>" class="form-control" style="width: 200px" required></b></td>
  </tr>   

  <tr>
  <td width="30%">Spesifikasi Barang </td>
  <td><b><input type="text area" name="spesifikasi_barang"  value="<?php echo $pecah['spesifikasi_barang'];?>" class="form-control" style="width:200px"  required></b></td>
  </tr> 
  <tr><td colspan="2">
  
  <tr>
  <td width="40%">Volume Barang</td>
  <td><b><input type="text" name="volume_barang" value="<?php echo $pecah['volume_barang'];?>" class="form-control" style="width:200px"  required></b></td>
  </tr> 
  <tr><td colspan="2">

  <tr>
  <td width="40%">Satuan Barang</td>
  <td><b><input type="text" name="satuan"  value="<?php echo $pecah['satuan'];?>" class="form-control" style="width:200px"  required></b></td
  ></tr> 
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
</td>
</tr>
</table>
</form>
      </div>

    </div>
  </div>

</main>
</div>