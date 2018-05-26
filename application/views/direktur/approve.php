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
        <a class="nav-link" href="<?php echo base_url('/c_direktur/home');?>">Dashboard</a>
      </li>
    </ul>
    <ul class="nav navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          Welcome <?php echo $this->session->userdata('username');?>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          
          
          <div class="dropdown-header text-center">
            <strong>Settings</strong>
            
          </div>
          <a class="dropdown-item" href="<?php echo base_url('c_direktur/viewProfile'); ?>"><i class="fa fa-user"></i> Profile</a>
          <a class="dropdown-item" href="#"><i class="fa fa-wrench"></i> Settings</a>
          <a class="dropdown-item" href="<?php echo base_url('c_direktur/keluar'); ?>"><i class="fa fa-lock"></i> Logout</a>
        </div>
      </li>
    </ul>

  </header>

  <div class="app-body">
    <div class="sidebar">
      <nav class="sidebar-nav">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('/c_direktur/home');?>"><i class="icon-speedometer"></i>Direktur Dashboard </a>
          </li>

          <li class="nav-title">
            Menu
          </li>

          <li class="nav-item">  
          <a class="nav-link" href=" <?php echo base_url('/c_direktur/home');?> "><i class="fa fa-home"></i> Home</a>
          </li>
           <li class="nav-item">  
         <a class="nav-link" href="<?php echo base_url('/c_suratMasuk/surat_masukDirektur');?>"><i class="fa fa-download"></i> approve surat</a>
          </li>


         <!--  <li class="nav-item nav-dropdown"> 
          <a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-file"></i> Kelola dokumen</a>          
            <ul class="nav-dropdown-items">
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-share"></i> Send Dokumen</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/c_suratMasuk/surat_masukDirektur');?>"><i class="fa fa-download"></i> Receive Dokumen</a>
              </li> 
            </ul>
          </li>   -->
           <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('/c_progress/viewProgress_direktur');?>"><i class="fa fa-cart-arrow-down"></i> melihat progress pengadaan </a>
            
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

      <!-- /.conainer-fluid -->
      <div class="container-fluid">
        <div class="card card-accent-success">
          <div class="card-header">
            <h3>  APPROVE </h3>
          </div>
    <div class="pull-right">

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
 
  <form action="<?php echo base_url().'c_suratMasuk/simpan_approve/'.$approve[0]->id_surat ?>" method="post">
               <div class="form-group ">

               
                  </div>

                    <div class="form-group ">
                      <label for="tipe" class="col-md-3 control-label"> Approve </label>
                      <div class="col-md-7 required">
                        <select class="form-control select2" style="min-width:250px;" required name="status_approve" id=""  value="<?php echo $approve[0]->status_approve ?>" readonly required>
                             <option>YA</option>
                            
                            
                        </select>
                      </div>
                  </div>
             

              <div class="form-group "> 
                   <button type="submit" name="btnSimpan" class="btn btn-success"><i class="fa fa-check icon-white"></i> Simpan</button>
                     <a class="btn btn-danger" href="<?php echo base_url('c_suratMasuk/surat_masukDirektur/'. $approve[0]->id_surat )?>"><i class="fa fa-close"></i> Batal</a>  
                    </div>
                    </div>
                    </form>
                    </div>
                  </div>
                </form>
            </div>
        </div>
    </div> <!-- col -->
  </div><!-- row -->

</div>
<!-- /.content-wrapper-->

                  </div>
                </li>
              </ul>
            </div>
        </div>
      </div>
      <!-- /.conainer-fluid -->
    </main>
</div>



  </div>