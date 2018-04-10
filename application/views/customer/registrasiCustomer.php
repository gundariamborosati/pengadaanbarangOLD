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

  <title>Registrasi | PT. Bhakti Unggul Teknovasi</title>

  <!-- Icons -->
  <link href="<?php echo base_url('asset/node_modules/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('asset/node_modules/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('asset/node_modules/simple-line-icons/css/simple-line-icons.css');?>" rel="stylesheet">

  <!-- Main styles for this application -->
  <link href="<?php echo base_url('asset/css/style.css');?>" rel="stylesheet">

  <!-- Styles required by this views -->

</head>

<body class="app flex-row align-items-center">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card mx-4">
          <div class="card-body p-4">
            <h1>Registrasi Customer</h1>
            <p class="text-muted">Masukkan data-data perusahaan</p>
            <?php echo form_open_multipart(base_url('c_customer/registrasicustomer')) ;?>
            
            <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-building"></i></span>
              </div>
              <input name="namaperusahaan" type="text" class="form-control" placeholder="Nama Perusahaan" value="<?= set_value('namaperusahaan')?>" required>
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-map-marker"></i></span>
              </div>
              <input name="alamatperusahaan" type="text" class="form-control" placeholder="Alamat Perusahaan" value="<?= set_value('alamatperusahaan')?>" required>
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
              </div>
              <input type="text" class="form-control" placeholder="Username" name="username" value="<?= set_value('username')?>" required>
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="icon-lock"></i></span>
              </div>
              <input id="password" type="password" class="form-control" placeholder="Password" name="password" onkeyup='check();' value="" required>
            </div>

            <div class="input-group mb-4">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="icon-lock"></i></span>
              </div>
              <input id="confirm_password" name="confirm_password" type="password" class="form-control" placeholder="Repeat password" onkeyup='check();' value="" required>
              <span id='message'> </span>
            </div>
            <script> 
            var check = function() {
                if (document.getElementById('password').value ==
                  document.getElementById('confirm_password').value && document.getElementById('password').value != '') {
                  document.getElementById('message').style.color = 'green';
                  document.getElementById('message').innerHTML = 'matching';
                } else {
                  document.getElementById('message').style.color = 'red';
                  document.getElementById('message').innerHTML = 'not matching';
                }
              } 
            </script>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">@</span>
              </div>
              <input type="text" class="form-control" placeholder="email" name="email" value="<?= set_value('email')?>" required>
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-phone"></i></span>
              </div>
              <input type="text" class="form-control" placeholder="contact" name="contact" value="<?= set_value('contact')?>" required>
            </div> 

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-file-image-o"></i></span>
              </div>
              <input type="file" class="form-control" placeholder="choose file" name="npwp"  value="" required>
            </div>

            <button type="submit" class="btn btn-block btn-success">Create Account</button>
            </form>
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