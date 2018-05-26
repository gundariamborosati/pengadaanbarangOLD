<table width="100%">
   <tbody>
      <tr>
         <td width="20%">
            <p>Lampiran Surat No</p>
         </td>
         <td width="5%">
            <p>:</p>
         </td>
         <td>
            <p>{nomor_surat}</p>
         </td>
      </tr>
      <tr>
         <td width="20%">
            <p>Tanggal</p>
         </td>
         <td width="5%">
            <p>:</p>
         </td>
         <td>
            <p>{tgl_surat}</p>
         </td>
      </tr>
      <tr>
         <td width="20%">
            <p>Perihal</p>
         </td>
         <td width="5%">
            <p>:</p>
         </td>
         <td>
            <p>{perihal}</p>
         </td>
      </tr>
   </tbody>
</table>
<br/><br/>
<table width="100%" border="1" cellpadding="3">
	<thead>
      <tr>
         <td height="40" width="10%">
            <p><strong>No</strong></p>
         </td>
         <td width="30%">
            <p><strong>Nama Barang/Spesifikasi</strong></p>
         </td>
         <td width="15%">
            <p><strong>Volume</strong></p>
         </td>
         <td width="15%">
            <p><strong>Satuan</strong></p>
         </td>
         <td width="20%">
            <p><strong>Harga Sat(Rp)</strong></p>
         </td>
         <td width="20%">
            <p><strong>Jml Harga(Rp)</strong></p>
         </td>
      </tr>
	</thead>
	<tbody>
		{content_data}
		<tr>
			<td width="10%">
				{no}
			 </td>
			 <td width="40%">
				{nama_barang}
			 </td>
			 <td width="15%" align="right">
				{jumlah}
			 </td>
			 <td width="15%">
				{satuan}
			 </td>
			 <td width="15%" align="right">
				{harga}
			 </td>
			 <td width="15%" align="right">
				{subtotal}
			 </td>
		</tr>
		{/content_data}
	</tbody>
	<tfoot>
		<tr>
		 <td>&nbsp;</td>
		 <td colspan="4" align="center">Jumlah Harga</td>
		 <td align="right">{total}</td>
		</tr>
		<tr>
		 <td>&nbsp;</td>
		 <td colspan="4" align="center">PPN 10%</td>
		 <td align="right">{ppn}</td>
		</tr>
		<tr>
		 <td>&nbsp;</td>
		 <td colspan="4" align="center">Total Harga</td>
		 <td align="right">{total_harga}</td>
		</tr>
	</tfoot>
</table>
<p>Terbilang : {terbilang} rupiah</p>
<br/><br/>
<table width="100%">
	<tr><td><p>Hormat kami,</p></td></tr>
	<tr><td><p>Bhakti Unggul Teknovasi</p></td></tr>
	<tr><td><br/><br/><br/><br/><br/><p><strong><u>Totok Gunarto</u></strong></p></td></tr>
	<tr><td><p>Direktur Utama</p></td></tr>
</table>