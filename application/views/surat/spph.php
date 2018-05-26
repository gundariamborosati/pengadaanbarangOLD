<table width="100%">
   <tbody>
      <tr>
         <td width="15%">
            <p>Nomor</p>
         </td>
         <td width="5%">
            <p>:</p>
         </td>
         <td>
            <p>{nomor_surat}</p>
         </td>
		 <td width="30%" align="right" valign="top" rowspan="2">
            <p>Bandung, {tgl_surat}</p>
         </td>
      </tr>
      <tr>
         <td width="15%">
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
<p>{kepada}</p>
<br/><br/>
<p>Dengan Hormat,</p>
<br/>Sehubungan dengan katalog barang yang anda sediakan, kami tertarik untuk mendapatkan informasi harga mengenai barang dibawah ini:
<br/>
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
				&nbsp;
			 </td>
			 <td width="15%" align="right">
				&nbsp;
			 </td>
		</tr>
		{/content_data}
	</tbody>
	<tfoot>
		<tr>
		 <td>&nbsp;</td>
		 <td colspan="4" align="center">Jumlah Harga</td>
		 <td align="right">&nbsp;</td>
		</tr>
		<tr>
		 <td>&nbsp;</td>
		 <td colspan="4" align="center">PPN 10%</td>
		 <td align="right">&nbsp;</td>
		</tr>
		<tr>
		 <td>&nbsp;</td>
		 <td colspan="4" align="center">Total Harga</td>
		 <td align="right">&nbsp;</td>
		</tr>
	</tfoot>
</table>
<p>Terbilang : ............. rupiah</p>
<br/><br/>
<p>
Hormat kami,<br/>
PT.Bhakti Unggul Teknovasi<br/>
<br/><br/><br/><br/><br/>
<strong><u>Totok Gunarto</u></strong><br/>
Direktur Utama
</p>
