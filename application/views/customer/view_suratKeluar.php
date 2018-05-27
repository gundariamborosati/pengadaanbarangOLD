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
          <!-- <a class="dropdown-item" href="<?php echo base_url('c_customer/viewProfile'); ?>"><i class="fa fa-user"></i> <?php echo $this->session->userdata('username');?>
        </a></a> -->
       <!--    <a class="dropdown-item" href="<?php echo base_url('c_customer/updateProfile'); ?>"><i class="fa fa-wrench"></i> Settings</a> -->
        <a class="dropdown-item" href="<?php echo base_url('/c_customer/viewProfile');?>"><i class="fa fa-user"></i> <?php echo $this->session->userdata('username');?></a> 
          <a class="dropdown-item" href="<?php echo base_url('c_customer/keluar'); ?>"><i class="fa fa-sign-out"></i> Logout</a>
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
      <!-- /.conainer-fluid -->
      <div class="container-fluid">
        <div class="card card-accent-success">
          <div class="card-header">
            <h5>  Surat keluar </h5>
          </div>
 
            <div class="card-body">
                <table id="dataProgress" class="table ">
                <thead>
                  <tr>
               
                   <th> tujuan </th>
                  <th> penanggung jawab </th>
                  <th> contact </th>
                  <th> jenis surat </th>
                  <th>nomor surat </th>
                    <th>tanggal</th>
                    <th> surat </th>
                    <th>pesan</th>
                   

                    
                  </tr>
                </thead>
                <tbody>
                 <?php              
                  
                  foreach($surat_keluar as $ul):
                
                  ?>
                  
                  <tr>
                    <td><?php echo $ul->tujuan_direktur ;?> <?php echo $ul->tujuan_logistik ;?> </td>
                 
                        <td><?php echo $ul->penanggung_jawab ;?></td>
                         <td><?php echo $ul->no_hp ;?></td>
                        <td><?php echo $ul->jenis_surat ;?></td>
                   <td><?php echo $ul->no_surat ;?></td>
                   <td><?php echo $ul->tgl_surat ;?></td>
                    <td><?php echo "<br><b>File : </b><i><a href='".base_URL()."asset/upload/surat_keluar/".$ul->file."' target='_blank'>".$ul->file."</a>"?></td> 
                  
               
                    
                   
              <!--  DIBAWAH UNTUK MODAL   --> 
             <td
             <a href="#view<?php echo $ul->id_surat ;?>" data-toggle="modal"> <button type="button" class="btn btn-primary"><i class="fa fa-external-link"> </i> pesan<span class="" aria-hidden="true"></span></button></a></td>
             <!-- Modal Tambah -->
  <div   role="dialog" tabindex="" id="view<?php echo $ul->id_surat; ?>" class="modal fade">
      <div class="modal-dialog">
      
          <div class="modal-content">
              <div class="modal-header">
              <h4 class="modal-title">pesan</h4> 
                  <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>         
              </div>


                <div class="modal-body">
               <?php echo $ul->pesan ;?></td>
              
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
             <tr>
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
          

    </div>
  </div>
</div>
</main>
</div>
