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
              <div class="col-md-12">
                <div class="panel-body">
                  <div class="form-horizontal">
                    <div class="row">
                      <div class="col-md-12">
                        <form   action="<?php echo base_url(). 'c_barang/update_barang/'.$detail->idbarang; ?>" enctype="multipart/form-data" method="post">
                          <div class="row">
                            <div class="col-md-6">
    
                              <div class="form-group">
                                <label class="control-label">Nama Barang</label>
                                <div class="">
                                  <input class="form-control" type="text" name="namabarang" value="<?php echo $detail->namabarang ;?>" required>
                                </div>
                              </div>

                              <div class="form-group">
                                <label for="sel1" >Jenis</label>
                                <select name="jenis" class="form-control" id="sel1">
                                  <?php
                                  if( $detail->jenis == 'peralatan kantor') {
                                    echo '<option value="peralatan kantor" selected>Peralatan kantor</option>';
                                    echo '<option value="peralatan laboratorium">Peralatan Laboratorium</option>
                                    <option value="Meubelair / furniture">Meubelair / furniture</option>
                                    <option value="Jaringan IT dan Telekomunikasi" >Jaringan IT dan Telekomunikasi</option>
                                    <option value="Peralatan wisuda dan pesta" >Peralatan wisuda dan pesta</option>';
                                  } elseif ( $detail->jenis == 'peralatan laboratorium') {
                                    echo '<option value="peralatan laboratorium" selected>Peralatan Laboratorium</option>';
                                    echo '<option value="peralatan kantor">Peralatan kantor</option>
                                    <option value="Meubelair / furniture">Meubelair / furniture</option>
                                    <option value="Jaringan IT dan Telekomunikasi" >Jaringan IT dan Telekomunikasi</option>
                                    <option value="Peralatan wisuda dan pesta" >Peralatan wisuda dan pesta</option>';
                                  } elseif ($detail->jenis == 'Meubelair / furniture') {
                                    echo ' <option value="Meubelair / furniture">Meubelair / furniture</option>';
                                    echo '<option value="peralatan kantor">Peralatan kantor</option>
                                    <option value="Meubelair / furniture">Meubelair / furniture</option>
                                    <option value="Jaringan IT dan Telekomunikasi" >Jaringan IT dan Telekomunikasi</option>
                                    <option value="Peralatan wisuda dan pesta" >Peralatan wisuda dan pesta</option>';
                                  } elseif ($detail->jenis == 'Jaringan IT dan Telekomunikasi') {
                                    echo '<option value="Jaringan IT dan Telekomunikasi" >Jaringan IT dan Telekomunikasi</option>';
                                    echo '<option value="peralatan kantor">Peralatan kantor</option>
                                    <option value="peralatan laboratorium">Peralatan Laboratorium</option>
                                    <option value="Meubelair / furniture">Meubelair / furniture</option>                                  
                                    <option value="Peralatan wisuda dan pesta" >Peralatan wisuda dan pesta</option>';
                                  } elseif ($detail->jenis == 'Peralatan wisuda dan pesta') {
                                    echo '<option value="Peralatan wisuda dan pesta" >Peralatan wisuda dan pesta</option>';
                                    echo '<option value="peralatan kantor">Peralatan kantor</option>
                                    <option value="peralatan laboratorium">Peralatan Laboratorium</option>
                                    <option value="Meubelair / furniture">Meubelair / furniture</option>
                                    <option value="Jaringan IT dan Telekomunikasi" >Jaringan IT dan Telekomunikasi</option>';
                                  }  ;?>                                  
                                </select>
                              </div>
                            <div class="form-group">
                              <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-plus">Edit</i></button>
                                <a class="btn btn-danger" href="<?php echo base_url('c_barang/view_barang')?>"><i class="fa fa-close"></i> Batal</a>
                              </div>
                            </div>

                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="control-label">Gambar</label>
                                <div>
                                  <img style="width:50%" class="img-responsive" src="<?php echo base_url('asset/img/barang/'.$detail->gambar)?>" alt="">
                                  <!-- <input type="file" class="form-control" placeholder="ganti gambar" name="gambar" value="barang" > -->
                                </div>
                                <button type="button"  class="btn btn-success" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil">Ubah Gambar</i></button>
                              </div>                              
                            </div>                            
                          </div>
                        </div>
                        <?php endforeach; ?>
                      </form>
                      
                    </div>
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
          <h4>Change Gambareeeee</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
       
        </div>
        <!-- body modal -->
      
    <form action="<?php echo base_url(). 'c_barang/update_gambar'; ?>" method="post">
   <center>     
   <div>
    <img style="width:50%" class="img-responsive" src="<?php echo base_url('asset/img/barang/'.$detail->gambar)?>" alt="">
    <input type="file" class="form-control" placeholder="ganti gambar" name="gambar" value="barang" >
  </div>
  </center>
        <!-- footer modal -->
        <div class="modal-footer">
      <!--tombol upload file-->
      
      <!--button upload end-->
      <button type="submit"  class="btn btn-success" value="submit"><i class="fa fa-check icon-white"></i> Simpan</button>
         </form>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Batall</button>
        </div>
        </table>
  </fieldset>
</form>
</div>
</td>
</tr>
</form>
      </div>

    </div>
  </div>
</div>
    </main>
</div>

