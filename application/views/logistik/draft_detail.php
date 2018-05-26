<main class="main">
   <ol class="breadcrumb">
      <li class="breadcrumb-item">Home</li>
      <li class="breadcrumb-item"><a href="#">Logistik</a></li>
      <li class="breadcrumb-item active">Insert Detail Draft Permintaan</li>
   </ol>
   <div class="container-fluid">
      <div class="card card-accent-success">
         <div class="card-header">
			<h3 class="panel-title pull-left">
			 Insert Detail Data
			</h3>
			<a href="<?php echo site_url('draft');?>" class="btn btn-sm btn-success pull-right"><i class="fa fa-reply"></i> Back</a>
         </div>
         <ul class="nav navbar-right panel_toolbox">
         </ul>
         <div class="card-body">
			<form class="form-horizontal" method="post" action="<?php echo site_url('draft/save_detail');?>">
			  <div class="form-group">
				<label class="control-label col-sm-2" for="draft_id">DRAFT ID</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" id="draft_id" name="draft_id" value="<?php echo $draft_id;?>" readonly>
				</div>
			  </div>
			  <div class="form-group">
				<label class="control-label col-sm-2" for="nama_barang">NAMA BARANG</label>
				<div class="col-sm-10"> 
				  <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Nama Barang" required>
				</div>
			  </div>
			  <div class="form-group">
				<label class="control-label col-sm-2" for="satuan">SATUAN</label>
				<div class="col-sm-10"> 
				  <input type="text" class="form-control" id="satuan" name="satuan" placeholder="Satuan Barang" required>
				</div>
			  </div>
			  <div class="form-group">
				<label class="control-label col-sm-2" for="harga">HARGA SATUAN</label>
				<div class="col-sm-10"> 
				  <input type="number" class="form-control" id="harga" name="harga" placeholder="Harga Satuan" required>
				</div>
			  </div>
			  <div class="form-group">
				<label class="control-label col-sm-2" for="jumlah">JUMLAH BARANG</label>
				<div class="col-sm-10"> 
				  <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah Barang" required>
				</div>
			  </div>
			  <div class="form-group"> 
				<div class="col-sm-offset-2 col-sm-10">
				  <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Insert</button>
				  <button type="reset" class="btn btn-warning"><i class="fa fa-ban"></i> Reset</button>
				</div>
			  </div>
			</form>
			<br/>
			<?php
				if ($this->session->flashdata('info')){  
					echo'<div class="alert alert-warning alert-dismissible">
						  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						  <strong>Info, </strong>'.$this->session->flashdata('info').'
						</div>';
				}
				?>		
			<table id="dataVendor" class="table ">
                <thead>
                  <tr>
                    <th class="text-center">NO</th>
                    <th class="text-center">NAMA BARANG</th>
					<th class="text-center">SATUAN</th>
                    <th class="text-right">JUMLAH</th>
                    <th class="text-right">HARGA </th>
                    <th class="text-right">SUBTOTAL</th>
                    <th class="text-center">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
					if($mdetail->num_rows()>0){
						$no = 1;
						foreach ($mdetail->result() as $row) {
							echo'
							<tr>
								<td width="5%" class="text-center">'.$no++.'</td>
								<td class="text-center">'.$row->nama_barang.'</td>
								<td class="text-center">'.$row->satuan.'</td>
								<td class="text-right">'.$row->jumlah.'&nbsp;&nbsp;</td>
								<td class="text-right">'.number_format($row->harga).'&nbsp;&nbsp;</td>
								<td class="text-right">'.number_format($row->subtotal).'&nbsp;&nbsp;</td>		  
								<td class="text-center">
									<a href="#" data-href="'.site_url('draft/hapus_detail/'.trim(base64_encode($row->draft_id),'=').'').'" data-toggle="modal" data-target="#confirm-delete" class="btn btn-danger btn-sm" title="hapus"><i class="fa fa-trash-o"></i></a>
								</td>
							</tr>';
						}
					}
					?> 
				  
                </tbody>
              </table>
			  
            
         </div>
		 
	
      </div>
   </div>
</main>
<script src="<?php echo base_url('asset/js/jquery-1.11.1.min.js'); ?>"></script>
<script>
$(document).ready(function () {
   $('#confirm-delete').on('show.bs.modal', function(e) {
		$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
	});
});
</script>
<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body">
                Apakah anda ingin menghapus data ini ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-ok">Delete</a>
            </div>
        </div>
    </div>
</div>