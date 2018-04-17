<form class="navbar-form navbar-left" role="search" action="<?php echo site_url('c_progress/cetakpdf');?>" method="post">
        <div class="form-group">
            <label>Tanggal Awal :</label>
            <input type="date" class="form-control" placeholder="Search" name="cari">
            <label>Tanggal Akhir :</label>
            <input type="date" class="form-control" placeholder="Search" name="cari2">
        </div>
        <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i> Cari</button>
    </form>
    <div class="absolute">
        <a href='<?php echo site_url('laporanpembelian/toExcelAll'); ?>' class="btn btn-primary"><i class="glyphicon glyphicon-download-alt" 
           aria-hidden="true"> 
        </i>Cetak Laporan</a>
    </div>