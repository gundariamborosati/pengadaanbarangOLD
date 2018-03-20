<div class="active tab-pane" id="settings">
              <form class="form-horizontal" action="<?php echo base_url() . 'c_customer/update_profile/' . $this->session->userdata('username'); ?>" method="post">
                <input type="hidden" name="txt_id" value="<?php echo $this->session->userdata('username');?>" class="form-control" placeholder="Nama login..." required>
                <div class="form-group">
                  <label for="namaLogin" class="col-sm-2 control-label">Nama perusahaan</label>
                  <div class="col-sm-7">
                    <input type="text" name="nama_perusahaan" value="<?php echo $this->session->userdata('nama_perusahaan');?>" class="form-control" placeholder="Nama perusahaan..." required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="alamat_perusahaan" class="col-sm-2 control-label">alamat perusahaan</label>
                  <div class="col-sm-7">
                    <input type="text" name="alamat_perusahaan" value="<?php echo $this->session->userdata('alamat_perusahaan');?>" class="form-control"  placeholder="alamat..." required>
                  </div>
                </div>
                 <div class="form-group">
                  <label for="contact" class="col-sm-2 control-label">contact</label>
                  <div class="col-sm-7">
                    <input type="text" name="contact" value="<?php echo $this->session->userdata('contact');?>" class="form-control"  placeholder="contact..." required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    
                    <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Simpan</button>
                  </div>
                </div>
              </form>
            </div>