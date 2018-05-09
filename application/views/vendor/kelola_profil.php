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
        <li class="breadcrumb-item active">Kelola Profil</li>
        <!-- Breadcrumb Menu-->
      </ol>
      <?php foreach($profile as $user): ?>
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5> <i class="fa fa-check"></i> Profil Perusahaan</h5>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-9">              
                <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
                <div class="panel-body">
                  <div class="form-horizontal">
                    <form action="<?php echo base_url(). 'c_vendor/updateProfile'; ?>" method="post">
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
                            <label class="control-label">Status</label>
                            <div>
                              <input class="form-control" type="text" name="username" placeholder="<?php echo $user['status']; ?>" disabled>
                            </div>
                          </div>

                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                              <button class="btn btn-primary"> <i class="fa fa-check">Update</i></button>
                              <!--  <a href="<?php echo base_url(). 'c_vendor/form_update'; ?>" class="btn btn-success" ><i class="fa fa-pencil">Ubah Password</i></a>    -->          
                              <button type="button"  class="btn btn-success" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil">Ubah Password</i></button>            
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <h2>Akte Perusahaan</h2>
                          <div class="col-md-6">

                          <!--  -->
                            <img style="width:200%" class="img-responsive" src="<?php echo base_url('asset/img/akte/'.$user['akte_pendiri'])?>" alt="">
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
      
    <form action="<?php echo base_url(). 'c_vendor/update_password'; ?>" method="post">
        
          <table class="table-form" width="100%">
  <tr><td width="20%">Password Lama</td><td><b><input type="password"  name="curr_password"  class="form-control" style="width: 200px" required></b></td></tr>   

  <tr><td width="30%">Password Baru </td><td><b><input type="password" name="new_password"  class="form-control" style="width:200px"  required></b></td></tr> 
  <tr><td colspan="2">
  
  <tr><td width="40%">konfirmasi password baru </td><td><b><input type="password" name="conf_password"  class="form-control" style="width:200px"  required></b></td></tr> 
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
</div>
    </main>
</div>

    