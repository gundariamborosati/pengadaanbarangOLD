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
          <a class="dropdown-item" href="<?php echo base_url('/c_logistik/viewProfile');?>"><i class="fa fa-user"></i> <?php echo $this->session->userdata('username');?></a>
          <a class="dropdown-item" href="<?php echo base_url('c_logistik/keluar'); ?>"><i class="fa fa-sign-out"></i> Logout</a>
        </div>
      </li>
    </ul>
  </header>
  <div class="app-body">
    <div class="sidebar">
      <nav class="sidebar-nav">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('/c_logistik/home');?>"><i class="icon-speedometer"></i>Logistik Dashboard </a>
          </li>
          <li class="nav-title">
            Menu
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('/c_logistik/home');?>"><i class="fa fa-home"></i> Home</a>
          </li>
          <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-file"></i>Dokumen</a>
            <ul class="nav-dropdown-items">
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-share"></i> Send Dokumen</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-download"></i> Receive Dokumen</a>
              </li>
            </ul>
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
        <li class="breadcrumb-item active">Dashboard</li>
        <!-- Breadcrumb Menu-->
      </ol>
      <!-- /.conainer-fluid -->
      <div class="container-fluid">
        <div class="card card-accent-success">
          <div class="card-header">
            <h3>  EDIT STATUS PESANAN </h3>
          </div>
      <div class="pull-right">

    <a href="<?php echo base_url('c_statusPesanan/viewStatuslog')?>" class="btn btn-primary pull-right"><i class="fa fa-arrow-left"> </i> kembali </a>

    </div>

         <div class="card-body">
                <table id="dataStatus" class="table ">
                  <div class="row">
                
                 <form action="<?php echo base_url().'c_statusPesanan/updateStatus/'.$status[0]->no_pesanan ?>" method="post">
                 </div>
                 </div>
                                   
                                      <div class="form-group">
                                          <label for="tipe" class="col-md-3 control-label">no pesanan</label>
                                            <div class="col-md-7 col-sm-12 required">
                                        <input name="no_pesanan" type="text" id="no_pesanan" value="<?php echo $status[0]->no_pesanan ?>" class="form-control" readonly> 
                                               </div>  
                                               </div>
                                                 <div class="form-group">
                                          <label for="tipe" class="col-md-3 control-label">tanggal </label>
                                            <div class="col-md-7 col-sm-12 required">
                                       <input name="tanggal" type="date" id="no_pesanan" value="<?php echo $status[0]->tanggal ?>" class="form-control"> 

                                               </div>  
                                               </div>
                                                <div class="form-group ">
                                        <label for="tipe" class="col-md-3 control-label">ke customer</label>
                                             <div class="col-md-7 required">
                                       <select class="form-control select2" style="min-width:250px;" required name="status" id="status" value="<?php echo $status[0]->status ?>">
                                         <option>waiting </option>
                                                <option>progress</option>
                                                 <option>finish</option> 
                                           
                              
                                              
                                   <!--  <option <?php if ($status == 'waiting'  ) echo 'selected' ; ?> value="<?php echo $status[0]->status ?>">waiting</option>
                                  <option <?php if ($status == 'progress' ) echo 'selected' ; ?> value="<?php echo $status[0]->status ?>">progress</option>
                                  <option <?php if ($status == 'finish' ) echo 'selected' ; ?> value="<?php echo $status[0]->status ?>">finish</option>
                                   -->
                                               </select>
                                                      </div>
                                                        </div> 

                                     <div class="form-group">
                                                 <label for="tipe" class="col-md-3 control-label">catatan</label>
                                                 <div class="col-md-7 required">
                                     
                                               <textarea style="resize:none;" name="catatan" class="form-control"  rows="5" cols="50"> <?php echo $status[0]->catatan ?></textarea> 
                                              </div>
                                            </div> 
                                          </div>
                                            <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
                                           </form>
                                               </div>
                                         
                                            
                                            
                                           
                         </table>
                         </div>
                         </div>
                         </div>
                         </main>
                         </div>
                         </body>
                         


                 </table>
                </tbody>
              </table>
              </div>
              </table>
              </div>
              </div>
              </div>
              </main>
              </div>
              </body>
              
              
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
 
   