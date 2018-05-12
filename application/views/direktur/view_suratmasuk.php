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
            <h3>  kotak masuk </h3>
          </div>
           <div class="pull-right">

  
  <div class="card-body">
                <table id="dataUlasan" class="table ">
                <thead>
                   <tr>
              <th> dari </th>
              <th> jenis surat </th>
                  <th>nomor surat </th>
                    <th>tanggal</th>
                    <th> surat </th>
                    <th>pesan</th>
                   <th> aksi </th>

                    
                  </tr>
                </thead>
                <tbody>
                  <?php              
                  
                  foreach($surat_masuk as $st):
                
                  ?>
                  
                  <tr>
                  <td><?php echo $st['username'] ;?></td>
                     <td><?php echo $st['jenis_surat'] ;?></td>
                   <td><?php echo $st['no_surat'] ;?></td>
                    <td><?php echo $st['tgl_surat'];?></td>
                      <td><?php echo "<br><b>File : </b><i><a href='".base_URL()."asset/upload/surat_keluar/".$st['file']."' target='_blank'>".$st['file']."</a>"?></td> 
                       <td><?php echo $st['pesan'];?></td>
                         <td>
            <center>
            <a href="<?=base_url()?>c_approveDirektur/approve_direktur/<?=$st['id_surat']?>" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></a></td></center>
                 
             
             
            
                  </tr>
                  <?php
                  endforeach;
                  ?>
                 
                </tbody>
              </table>
              

</div>
</td>
</tr>
</table>
</form>
</div>
</div>
</div>

</div>
</div>
</div>
</div>
</main>
</div>
</body>

        </div>
      </div>

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