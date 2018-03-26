<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Profil Pengguna
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row">
      <div class="col-md-3">

       
      <div class="col-md-9">
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">

            <!-- disable dulu
            rencana buat aktifitas harian
            li class="active"><a href="#timelinez" data-toggle="tab">Aktifitas</a></li-->
            <li class="active"><a href="#settings" data-toggle="tab">Edit</a></li>
            <!--li><a href="#avatar" data-toggle="tab">Foto</a></li-->
          </ul>
          <div class="tab-content">

            <div class="tab-pane" id="timelinez">
              <!-- The timeline -->
              <ul class="timeline timeline-inverse">
                <!-- timeline time label -->
                <li class="time-label">
                      <span class="bg-red">
                        10 Feb. 2014
                      </span>
                </li>
                <!-- /.timeline-label -->
                <!-- timeline item -->
                <li>
                  <i class="fa fa-envelope bg-blue"></i>

                  <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                    <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                    <div class="timeline-body">
                      Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                      weebly ning heekya handango imeem plugg dopplr jibjab, movity
                      jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                      quora plaxo ideeli hulu weebly balihoo...
                    </div>
                    <div class="timeline-footer">
                      <a class="btn btn-primary btn-xs">Read more</a>
                      <a class="btn btn-danger btn-xs">Delete</a>
                    </div>
                  </div>
                </li>
                <!-- END timeline item -->
                <!-- timeline item -->
                <li>
                  <i class="fa fa-user bg-aqua"></i>

                  <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

                    <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request
                    </h3>
                  </div>
                </li>
                <!-- END timeline item -->
                <!-- timeline item -->
                <li>
                  <i class="fa fa-comments bg-yellow"></i>

                  <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                    <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                    <div class="timeline-body">
                      Take me to your leader!
                      Switzerland is small and neutral!
                      We are more like Germany, ambitious and misunderstood!
                    </div>
                    <div class="timeline-footer">
                      <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                    </div>
                  </div>
                </li>
                <!-- END timeline item -->
                <!-- timeline time label -->
                <li class="time-label">
                      <span class="bg-green">
                        3 Jan. 2014
                      </span>
                </li>
                <!-- /.timeline-label -->
                <!-- timeline item -->
                <li>
                  <i class="fa fa-camera bg-purple"></i>

                  <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

                    <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                    <div class="timeline-body">
                      <img src="http://placehold.it/150x100" alt="..." class="margin">
                      <img src="http://placehold.it/150x100" alt="..." class="margin">
                      <img src="http://placehold.it/150x100" alt="..." class="margin">
                      <img src="http://placehold.it/150x100" alt="..." class="margin">
                    </div>
                  </div>
                </li>
                <!-- END timeline item -->
                <li>
                  <i class="fa fa-clock-o bg-gray"></i>
                </li>
              </ul>
            </div>
            <!-- /.tab-pane -->

            <div class="active tab-pane" id="settings">
              <form class="form-horizontal" action="<?php echo base_url() . 'c_customer/update_password/' . $this->session->userdata('username'); ?>" method="post">
                <input type="hidden" name="txt_id" value="<?php echo $this->session->userdata('id_user');?>" class="form-control" placeholder="Nama login..." required>
                <div class="box-body">
        <form id="form" action="#" method="post" class="form-horizontal">
            <input type="hidden" name="txt_id">
            <div class="form-group ">
                <label for="password1" class="col-md-4 control-label">Password Baru</label>
                <div class="col-md-6 col-sm-12 required">
                  <input type="password" name="txt_pass1" id="txt_pass1" class="form-control" required placeholder="Password baru...">
                </div>
            </div>
            <div class="form-group ">
                <label  for="password2" class="col-md-4 control-label">Konfirmasi Password</label>
                <div class="col-md-6 col-sm-12 required">
                  <input type="password" name="txt_pass2" id="txt_pass2" class="form-control" required placeholder="Konfirmasi password...">
                </div>
            </div>
          </form>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    
                    <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Simpan</button>
                  </div>
                </div>
              </form>
            </div>
            <!-- /.tab-pane -->

           