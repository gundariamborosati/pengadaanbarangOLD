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
           <div class="pull-right">

  
<button type="button"  class="btn btn-danger" data-toggle="modal" data-target="#myModal"><h5><i class="fa fa-print"> cetak report  </i></h5></button>
    </div>
    <div class="pull-left">
    </div>
    <div class="card-body">
                <table id="dataProgress" class="table ">
                <thead>
                  <tr>
                   <!--  <th>No pesanan</th> -->
                    <th>tanggal</th>
                    <th>nama customer</th>
                    <th>nama vendor</th>
                    <th>status</th>
                    <th>kendala</th>
                 

                    
                  </tr>
                </thead>
                <tbody>
                  <?php              
                  
                  foreach($progress as $prog):
                
                  ?>
                  
                  <tr>
                  
                    <!-- <td><?php echo $prog->no_pesanan ;?></td> -->
                    <td><?=date('F d Y', strtotime($prog->tanggal));?></td>    
                    <td><?php echo $prog->nama_customer ;?></td>  
                   <td><?php echo $prog->nama_vendor ;?></td>                                   
                    <td><?php echo $prog->status ;?></td>                                     
           
             <td
             <a href="#view<?php echo $prog->id_progress ;?>" data-toggle="modal"> <button type="button" class="btn btn-info"><i class="fa fa-external-link"> </i> kendala<span class="" aria-hidden="true"></span></button></a></td>
             <!-- Modal Tambah -->
  <div   role="dialog" tabindex="" id="view<?php echo $prog->id_progress; ?>" class="modal fade">
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
                     
                     </tr>
                  <?php
                  endforeach;
                  ?>
                </tbody>
              </table>
        <!-- Modal -->

  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- konten modal-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <h4>print progress pengadaan</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>  
        </div>
        <!-- body modal -->
       
           <div class="well">
<form action="<?php echo site_url('c_progress/cetak');?>" target="blank" method="post" accept-charset="utf-8" enctype="multipart/form-data"> 
  <table class="table-form" width="100%">
  <tr><td width="20%">Dari Tanggal </td><td><b><input type="date" name="tgl_start" id="tgl_start" class="form-control" style="width: 200px" required></b></td></tr>   

  <tr><td width="30%">Sampai Tanggal </td><td><b><input type="date" name="tgl_end" id="tgl_end" class="form-control" style="width:200px"  required></b></td></tr> 
  <tr><td colspan="2">
  <br>
 
        <!-- footer modal -->
        <div class="modal-footer">
       <button type="submit" class="btn btn-primary"><i class="fa fa-print"></i> Cetak</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
          </td></tr>
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