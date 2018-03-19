<div class="col-md-12">
    <div class="card">
        <div class="card-header">
             <h5> <i class="fa fa-check"></i> Profil Saya</h5> 
        </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="text-center">
                            <img src="img/avatars/ava.jpg" class="ava rounded-circle" alt="avatar">
                            <br>
                            <br>
                            <h6>Ganti fotomu</h6>
                            <input type="file" class="form-control"><br>
                            <br>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <h3>Info Pribadi</h3>
                        <hr>
                    <div class="panel-body">
                    <div class="form-horizontal">
                    <form>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Nama</label>
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" name="firstName" value="Satrya Budi Pratama" ng-model="me.firstName">
                                </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Tanggal Lahir</label>
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" name="lastName" value="21/06/1997" ng-model="me.lastName">
                                </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Email</label>
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" name="email" value="zeroonetm@gmail.com" ng-model="me.email">
                                </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Asal Daerah</label>
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" name="department" value="Medan" ng-model="me.email">
                                </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Nomor Telepon</label>
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" name="phone" placeholder="08277009251" ng-model="me.email">
                                </div>
                        </div>          
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button class="btn btn-primary" ng-click="updateMe()">Update</button>
                            </div>
                        </div>
                    </form>
                    </div>  <!-- end form-horizontal -->
                    </div> <!-- end panel-body -->
                 </div>
            </div>   
         </div>
    </div>
</div>