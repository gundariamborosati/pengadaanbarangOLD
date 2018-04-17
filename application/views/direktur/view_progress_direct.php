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

      <div class="container-fluid">
        <div class="card card-accent-success">
          <div class="card-header">
            <h3>  Progress Pengadaan </h3>
          </div>
    <div class="pull-left">
    </div>
    <div class="card-body">
                <table id="dataProgress" class="table ">
                <thead>
                  <tr>
                    <th>No pesanan</th>
                    <th>tanggal</th>
                    <th>nama customer</th>
                    <th>nama vendor</th>
                    <th>status</th>
                    <th>kendala</th>
                    <!-- <th>evaluasi</th> -->

                    
                  </tr>
                </thead>
                <tbody>
                  <?php              
                  
                  foreach($progress as $prog):
                
                  ?>
                  
                  <tr>
                    <!-- <td><?php  echo $no; ?></td> -->
                    <td><?php echo $prog->no_pesanan ;?></td>
                    <td><?=date('d F Y', strtotime($prog->tanggal));?></td>    
                    <td><?php echo $prog->nama_customer ;?></td>  
                   <td><?php echo $prog->nama_vendor ;?></td>                                   
                    <td><?php echo $prog->status ;?></td>                                     
           
             <td
             <a href="#view<?php echo $prog->no_pesanan ;?>" data-toggle="modal"> <button type="button" class="btn btn-info"><i class="fa fa-external-link"> </i> kendala<span class="" aria-hidden="true"></span></button></a></td>
             <!-- Modal Tambah -->
  <div   role="dialog" tabindex="" id="view<?php echo $prog->no_pesanan; ?>" class="modal fade">
      <div class="modal-dialog">
      
          <div class="modal-content">
              <div class="modal-header">
              <h4 class="modal-title">kendala</h4> 
                  <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>         
              </div>


                <div class="modal-body">
               <?php echo $prog->kendala ;?></td>
              
                       </div> 
                        <div class="form-group">

                            
                    <div class="modal-footer">
                        
                        <button type="button" class="btn btn-warning" data-dismiss="modal"> Back</button>
                    </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
  <!-- END Modal Tambah -->
                        <!-- <td> 
                        <a href="<?php echo base_url() . 'c_progress/identifikasi/' . $prog->no_pesanan ?>" class="btn btn-primary"> <i class="fa fa-pencil"></i>evaluasi</a>
                    </td> -->
                     </tr>
                  <?php
                  endforeach;
                  ?>

                  <!-- <a class="btn btn-default" data-toggle="modal" data-target="cetakpdf"><i class="fa fa-print"></i>
                  cetak pdf </a> -->

         
                 
                </tbody>
              </table>
              <td><a href="<?php echo site_url('c_progress/cetakpdf');?>" class="btn btn-warning" onclick="return confirm('Apakah anda yakin ingin mencetak laporan?')">Cetak Laporan</a>
              </td>
      
              
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

 <!--Start of Tawk.to Script-->
            <script type="text/javascript">
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/5ac440b44b401e45400e5212/default';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
            })();
            </script>
            <!--End of Tawk.to Script-->
</body>


  </div>