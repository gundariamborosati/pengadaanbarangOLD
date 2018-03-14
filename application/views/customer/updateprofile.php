<html>
<head>
<title>Update Data </title>
</head>
<body>
<h3>Edit Data</h3>

            <div class="active tab-pane" id="settings">
              <form class="form-horizontal" action="<?php echo base_url() . 'c_customer/update_profile/' . $this->session->userdata('username'); ?>" method="post">
                <input type="hidden" name="txt_id" value="<?php echo $this->session->userdata('username');?>" class="form-control" placeholder="Nama login..." required>
                <div class="form-group">
                  <label for="username" class="col-sm-2 control-label">Nama Login</label>
                  <div class="col-sm-7">
                    <input type="text" name="txt_username" value="<?php echo $this->session->userdata('username');?>" class="form-control" placeholder="Nama login..." required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="username" class="col-sm-2 control-label">password</label>
                  <div class="col-sm-7">
                    <input type="text" name="txt_password" class="form-control" placeholder="Password..." required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="nama_perusahaan" class="col-sm-2 control-label">Nama Lengkap</label>
                  <div class="col-sm-7">
                    <input type="text" name="txt_name" value="<?php echo $this->session->userdata('nama_perusahaan');?>" class="form-control"  placeholder="Nama lengkap..." required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    
                    <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Simpan</button>
                  </div>
                </div>
              </form>
            </div>
</body>
</html>