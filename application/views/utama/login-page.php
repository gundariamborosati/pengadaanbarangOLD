<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="CoreUI Bootstrap 4 Admin Template">
  <meta name="author" content="Lukasz Holeczek">
  <meta name="keyword" content="CoreUI Bootstrap 4 Admin Template">
  <!-- <link rel="shortcut icon" href="assets/ico/favicon.png"> -->

  <title>Login | PT Bhakti Unggul Teknovasi</title>

  <!-- Icons -->
  <link href="<?php echo base_url('asset/css/font-awesome.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('asset/node_modules/simple-line-icons/css/simple-line-icons.css');?>" rel="stylesheet">

  <!-- Main styles for this application -->
  <link href="<?php echo base_url('asset/css/style.css');?>" rel="stylesheet">

  <!-- Styles required by this views -->

</head>

<body class="app flex-row align-items-center">

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card-group">
          <div class="card p-4">
            <div class="card-body">
              <h1>Login</h1>
              <p class="text-muted">Login to your account</p>
              <form action="<?php echo base_url('login/validate');?>" method="POST">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="icon-user"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Username" name="username" value="<?= set_value('username')?>">
              </div>
              <div class="input-group mb-4">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="icon-lock"></i></span>
                </div>
                <input type="password" class="form-control" placeholder="Password" name="password">
              </div>
              <div class="row">
                <div class="col-6">
                  <button type="submit" class="btn btn-primary bg-red px-4">Login</button>
                </div>            
              </div>
               <?php
                  if($this->session->flashdata('pesan') != ''){
                  ?>
                    <div class="alert alert-danger fade in">
                         <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                         <?php echo $this->session->flashdata('pesan');?>
                    </div>
                  
              <?php
                  }
              ?> 
              </form>

            </div>
          </div>
          <div class="card text-white bg-red py-5 d-md-down-none" style="width:44%">
            <div class="card-body text-center">
              <div>
                <h2>Aplikasi Pengadaan Barang</h2>                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap and necessary plugins -->
  <script src="<?php echo base_url('asset/node_modules/jquery/dist/jquery.min.js');?>"></script>
  <script src="<?php echo base_url('asset/node_modules/popper.js/dist/umd/popper.min.js');?>"></script>
  <script src="<?php echo base_url('asset/node_modules/bootstrap/dist/js/bootstrap.min.js');?>"></script>

</body>
</html>