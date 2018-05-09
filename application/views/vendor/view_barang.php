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
     
      
      <div class="container-fluid">
        <div class="card card-accent-success">
          <div class="card-header">
            <h3>  Kelola Barang </h3>  
            <center><a href="<?php echo base_url('/c_barang/form_add');?>" class="btn btn-primary"> <i class="fa fa-plus"></i> Tambah Barang </a></center>
          </div>
          <div class="card-body">
            
            <div>
              
              <table id="dataBarang" class="table ">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Id Barang</th>
                    <th>Nama Barang</th>
                    <th>Jenis Barang</th>
                    <th>Gambar</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php              
                  $no = 0;
                  foreach($barang as $brg):
                  $no++;
                  ?>
                  
                  <tr>
                    <td><?php  echo $no; ?></td>
                    <td><?php echo $brg->idbarang ;?></td>
                    <td><?php echo $brg->namabarang ;?></td>                                     
                    <td><?php echo $brg->jenis ;?></td>                                     
                     <td> <img src="<?php echo base_url('asset/img/barang/').$brg->gambar; ?>" ></td>  
                    <td>                    
                        <a href="<?php echo base_url('/c_barang/edit_barang/'.$brg->idbarang);?>" class="btn btn-success"> <i class="fa fa-pencil"></i> Edit</a>
                        <a href="<?php echo base_url('/c_barang/delete_barang/'.$brg->idbarang);?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data?')"> <i class="fa fa-trash"> </i> Delete</a>
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
        </main>
      </div>