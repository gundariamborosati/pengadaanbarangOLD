
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
        <a class="nav-link" href="<?php echo base_url('/c_customer/home');?>">Dashboard</a>
      </li>
    </ul>
    <ul class="nav navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          Welcome <?php echo $this->session->userdata('username');?>
        </a>
         <!--  <img src="" class="img-avatar" alt="Customer">
        </a> -->
        <div class="dropdown-menu dropdown-menu-right">
          
          
          <div class="dropdown-header text-center">
            <strong>Settings</strong>
          </div>
          <a class="dropdown-item" href="<?php echo base_url('c_customer/viewProfile'); ?>"><i class="fa fa-user"></i> <?php echo $this->session->userdata('username');?>
        </a></a>
          <!-- <a class="dropdown-item" href="<?php echo base_url('c_customer/update_profile'); ?>"><i class="fa fa-wrench"></i> Settings</a> -->
          <a class="dropdown-item" href="<?php echo base_url('c_customer/keluar'); ?>"><i class="fa fa-lock"></i> Logout</a>
        </div>
      </li>
    </ul>

  </header>

  <div class="app-body">
    <div class="sidebar">
      <nav class="sidebar-nav">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('/c_customer/home');?>"><i class="icon-speedometer"></i>customer Dashboard </a>
          </li>

        <li class="nav-title">
            Menu
          </li>

          <li class="nav-item">  
          <a class="nav-link" href=" <?php echo base_url('/c_customer/home');?> "><i class="fa fa-home"></i> Home</a>
          </li>
          <li class="nav-item nav-dropdown"> 
          <a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-file"></i> Kirim Surat </a>          
            <ul class="nav-dropdown-items">
              <li class="nav-item">
                  <a class="nav-link" href=" <?php echo base_url('/c_suratKeluar/inputSuratDirektur');?>"><i class="fa fa-paper-plane"></i> direktur </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href=" <?php echo base_url('/c_suratKeluar/inputSuratLogistik');?>"><i class="fa fa-paper-plane"></i>logistik</a>
              </li> 
            </ul>
          </li>  
          </li>
          </li>

            <li class="nav-item nav-dropdown"> 
          <a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-file"></i> Kelola dokumen</a>          
            <ul class="nav-dropdown-items">
              <li class="nav-item">
                 <a class="nav-link" href=" <?php echo base_url('/c_suratKeluar/viewSuratKeluarCustomer');?>"><i class="fa fa-share"></i> Surat Keluar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/c_suratMasuk/surat_masukCustomer');?>"><i class="fa fa-download"></i> Kotak Masuk</a>
              </li> 
            </ul>
          </li>  
           <li class="nav-item">
           <a class="nav-link" href="<?php echo base_url('/c_statusPesanan/viewStatusPesanan');?>"><i class="fa fa-cart-arrow-down"></i> melihat status pesanan</a>
            <a class="nav-link" href="<?php echo base_url('/c_ulasan/input');?>"><i class="fa fa-comment"></i> ulasan saya </a>
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
        <li class="breadcrumb-item"><a href="#">Customer</a></li>
        <li class="breadcrumb-item active">Dashboard</li>

        <!-- Breadcrumb Menu-->
      </ol>
  <?php foreach($profile as $user): ?>
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h5> <i class="fa fa-check"></i> Profil Perusahaan</h5> 
           <h3>Profil Perusahaan</h3>
                <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
                <hr>
                <div class="panel-body">
                  <div class="form-horizontal">
                    <form action="<?php echo base_url(). 'c_customer/updateProfile'; ?>" method="post">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="control-label">Nama Perusahaan</label>
                            <div class="">
                              <input class="form-control" type="text" name="nama_perusahaan" value="<?php echo $user['nama_perusahaan']; ?>" >
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label">Alamat Perusahaan</label>
                            <div>
                              <input class="form-control" type="text" name="alamat_perusahaan" value="<?php echo $user['alamat_perusahaan']; ?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label">Email</label>
                            <div>
                              <input class="form-control" type="text" name="email" value="<?php echo $user['email']; ?>" >
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label">Contact</label>
                            <div>
                              <input class="form-control" type="text" name="contact" value="<?php echo $user['contact']; ?>" >
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label">Username</label>
                            <div>
                              <input class="form-control" type="text" name="username" placeholder="<?php echo $user['username']; ?>" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                
 
                              <button class="btn btn-primary"> <i class="fa fa-check"> UPDATE </i></button>
                                <!-- Tombol untuk menampilkan modal-->
                            <button type="button"  class="btn btn-success" data-toggle="modal" data-target="#myModal" ><i class="fa fa-pencil"> UBAH PASSWORD</i></button>
                            </div>
                           <div class="col-sm-offset-2 col-sm-10">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <h2>NPWP</h2>
                          <div class="col-md-6">

                          <!--  -->
                            <img style="width:200%" class="img-responsive" src="<?php echo base_url('asset/img/npwp/'.$user['npwp'])?>" alt="">
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
<!-- Modal -->

  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- konten modal-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <h4>Change Password</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
       
        </div>
        <!-- body modal -->
       
  <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
      
        <form action="<?= base_url('c_customer/updatePassword'); ?>" method="POST">
  

          <table class="table-form" width="100%">
  <tr><td width="20%">Password Lama</td><td><b><input type="password"  name="curr_password"  class="form-control" style="width: 200px" required></b></td></tr>   

  <tr><td width="30%">Password Baru </td><td><b><input type="password" name="new_password"  class="form-control" style="width:200px"  required></b></td></tr> 
  <tr><td colspan="2">
  
  <tr><td width="40%">konfirmasi password baru </td><td><b><input type="password" name="conf_password"  class="form-control" style="width:200px"  required></b></td></tr> 
  <tr><td colspan="2">
  <br>
         
        <!-- footer modal -->
        <div class="modal-footer">
      <button type="submit"  class="btn btn-success" value="submit"><i class="fa fa-check icon-white"> </i> Simpan</button>
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
</div>
    </main>
</div>
