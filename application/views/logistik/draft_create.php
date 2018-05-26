<main class="main">
   <ol class="breadcrumb">
      <li class="breadcrumb-item">Home</li>
      <li class="breadcrumb-item"><a href="#">Logistik</a></li>
      <li class="breadcrumb-item active">Tambah Draft Permintaan</li>
   </ol>
   <div class="container-fluid">
      <div class="card card-accent-success">
         <div class="card-header">
			<h3 class="panel-title pull-left">
			 Tambah Data
			</h3>
			<a href="<?php echo site_url('draft');?>" class="btn btn-sm btn-success pull-right"><i class="fa fa-reply"></i> Back</a>
         </div>
         <ul class="nav navbar-right panel_toolbox">
         </ul>
         <div class="card-body">
			<form class="form-horizontal" method="post" action="<?php echo site_url('draft/save');?>">
			  <div class="form-group">
				<label class="control-label col-sm-2" for="draft_id">DRAFT ID</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" id="draft_id" name="draft_id" value="<?php echo $draft_id;?>" readonly>
				</div>
			  </div>
			  <div class="form-group">
				<label class="control-label col-sm-2" for="judul">JUDUL</label>
				<div class="col-sm-10"> 
				  <input type="text" class="form-control" id="judul" name="judul" placeholder="Input Judul" required>
				</div>
			  </div>
			  <div class="form-group">
				<label class="control-label col-sm-2" for="deskripsi">DESKRIPSI</label>
				<div class="col-sm-10"> 
				  <textarea class="form-control" rows="3" id="deskripsi" name="deskripsi" placeholder="Input Deskripsi" required></textarea>
				</div>
			  </div>
			  <div class="form-group"> 
				<div class="col-sm-offset-2 col-sm-10">
				  <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
				  <button type="reset" class="btn btn-warning"><i class="fa fa-ban"></i> Reset</button>
				</div>
			  </div>
			</form>
            
         </div>
		 
	
      </div>
   </div>
</main>