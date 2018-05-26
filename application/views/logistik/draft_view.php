    <main class="main">      
      <!-- Breadcrumb -->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item"><a href="#">Logistik</a></li>
        <li class="breadcrumb-item active">Draft Permintaan</li>
        <!-- Breadcrumb Menu-->
      </ol>
      <!-- /.conainer-fluid -->
     
      <div class="container-fluid">
        <div class="card card-accent-success">
			<div class="card-header">
				<h3 class="panel-title pull-left">
				 Daftar Draft Permintaan
				</h3>
				<a href="<?php echo site_url('draft/create');?>" class="btn btn-sm btn-success pull-right"><i class="fa fa-plus"></i> Create</a>
			 </div>
		  <ul class="nav navbar-right panel_toolbox">
        </ul>
		  
          <div class="card-body">
				<?php
				if ($this->session->flashdata('info')){  
					echo'<div class="alert alert-success alert-dismissible">
						  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						  <strong>Info, </strong>'.$this->session->flashdata('info').'
						</div>';
				}
				?>				
              <table id="dataVendor" class="table ">
                <thead>
                  <tr>
                    <th class="text-center">NO</th>
                    <th>DRAFTID</th>
                    <th>JUDUL</th>
                    <th>DESKRIPSI </th>
                    <th>TANGGAL INPUT </th>
                    <th class="text-center">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
					if($mdraft->num_rows()>0){
						$no = 1;
						foreach ($mdraft->result() as $row) {
							echo'
							<tr>
								<td width="5%" class="text-center">'.$no++.'</td>
								<td>'.$row->draft_id.'</td>
								<td>'.$row->judul.'</td>
								<td>'.$row->deskripsi.'</td>
								<td>'.$row->tgl_input.'</td>		  
								<td class="text-center">
									<a href="'.site_url('draft/edit/'.trim(base64_encode($row->draft_id),'=').'').'" class="btn btn-warning btn-sm" title="edit"><i class="fa fa-pencil"></i></a>
									<a href="'.site_url('draft/detail/'.trim(base64_encode($row->draft_id),'=').'').'" class="btn btn-primary btn-sm" title="detail"><i class="fa fa-list"></i></a>
									<a href="#" data-href="'.site_url('draft/hapus/'.trim(base64_encode($row->draft_id),'=').'').'" data-toggle="modal" data-target="#confirm-delete" class="btn btn-danger btn-sm" title="hapus"><i class="fa fa-trash-o"></i></a>
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