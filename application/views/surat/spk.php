<h2 align="center"><strong><u>SURAT PERINTAH KERJA</u></strong></h2>
<h4 align="center">No.{nomor_surat}</h4>
<br/>
<p>Dengan berdasarkan hasil negosiasi harga tanggal {tgl_negoisasi} antara PT. Bhakti Unggul Teknovasi dengan {nama_vendor} tentang Pengadaan {judul_pengadaan},maka kami yang bertanda tangan dibawah ini :</p>
<table width="100%">
   <tbody>
      <tr>
         <td width="20%">
            <p>Nama</p>
         </td>
         <td width="5%">
            <p>:</p>
         </td>
         <td>
            <p>Totok Gunarto</p>
         </td>
      </tr>
      <tr>
         <td>
            <p>Jabatan</p>
         </td>
         <td>
            <p>:</p>
         </td>
         <td>
            <p>Direktur Utama</p>
         </td>
      </tr>
      <tr>
         <td>
            <p>Alamat</p>
         </td>
         <td>
            <p>:</p>
         </td>
         <td>
            <p>Jl. Radio Palasari No. 1 DayeuhKolot, Kab. Bandung, Jawa Barat 40257</p>
         </td>
      </tr>
      <tr>
         <td>
            <p>No.Telpon</p>
         </td>
         <td>
            <p>:</p>
         </td>
         <td>
            <p>022-7509961</p>
         </td>
      </tr>
      <tr>
         <td>
            <p>No. Fax</p>
         </td>
         <td width="24">
            <p>:</p>
         </td>
         <td width="433">
            <p>-</p>
         </td>
      </tr>
   </tbody>
</table>
<p>Yang dalam hal ini mewakili secara sah : <strong>PT</strong><strong>.</strong><strong> Bhakti Unggul Teknovasi</strong>, selanjutnya disebut sebagai <strong>PT</strong><strong>.</strong><strong> BUT</strong>, memberi perintah kerja Pengadaan {judul_pengadaan}, kepada :</p>
<table width="100%">
   <tbody>
      <tr>
         <td width="20%">
            <p>Nama</p>
         </td>
         <td width="5%">
            <p>:</p>
         </td>
         <td>
            <p>{nama_pihak_vendor}</p>
         </td>
      </tr>
      <tr>
         <<td>
            <p>Jabatan</p>
         </td>
         <td>
            <p>:</p>
         </td>
         <td>
            <p>{jabatan_pihak_vendor}</p>
         </td>
      </tr>
      <tr>
         <td>
            <p>Alamat</p>
         </td>
        <td>
            <p>:</p>
         </td>
         <td>
            <p>{alamat_pihak_vendor}</p>
         </td>
      </tr>
      <tr>
         <td>
            <p>No.HP</p>
         </td>
         <td>
            <p>:</p>
         </td>
         <td>
            <p>{hp_pihak_vendor}</p>
         </td>
      </tr>
      <tr>
         <td>
            <p>No.Fax</p>
         </td>
         <td>
            <p>:</p>
         </td>
         <td>
            <p>{fax_pihak_vendor}</p>
         </td>
      </tr>
   </tbody>
</table>
<p>Yang dalam hal ini mewakili secara sah : <strong>{nama_vendor}</strong>, dan selanjutnya disebut sebagai <strong>REKANAN</strong>, menyetujui dan menerima untuk melaksanakan perintah kerja tersebut di atas dengan menandatangani Surat Perintah Kerja ini dan berjanji akan melaksanakan pekerjaan tersebut dengan sebaik-baiknya sesuai dengan ketentuan-ketentuan yang diatur sebagai berikut :</p>
<h4>1. LINGKUP PEKERJAAN</h4>
<ul>
	<li><li><strong>a)</strong> PT. BUT memberi Pengadaan {judul_pengadaan}, dengan uraian dan volume pekerjaan sesuai dengan spesifikasi yang diminta.</li>
	<li><li><strong>b)</strong> REKANAN melaksanakan Pengadaan {judul_pengadaan}, dengan uraian dan volume pekerjaan sesuai dengan spesifikasi yang diminta.</li>
	<li><li><strong>c)</strong> Pengadaan {judul_pengadaan}, diterima dalam keadaan baik dan lengkap di {lokasi_pengadaan}</li>
</ul>
<h4>2. HARGA</h4>
<ul>
	<li><strong>a)</strong> Jumlah harga untuk Pengadaan {judul_pengadaan}, adalah sebesar <strong>Rp </strong><strong>{total_harga}</strong><strong>,- (</strong><strong>{terbilang}</strong><strong> Rupiah)</strong></li>
	<li><strong>b)</strong> Adapun rincian Pengadaan {judul_pengadaan}, adalah sebagai berikut :</li>
	<br/>
	<table width="80%" border="1" cellpadding="3">
	   <thead>
		  <tr>
			 <td height="40" width="10%">
				<p><strong>No</strong></p>
			 </td>
			 <td width="30%">
				<p><strong>Nama Barang/Spesifikasi</strong></p>
			 </td>
			 <td width="15%" align="center">
				<p><strong>Volume</strong></p>
			 </td>
			 <td width="15%" align="center">
				<p><strong>Satuan</strong></p>
			 </td>
			 <td width="20%" align="center">
				<p><strong>Harga Sat<br/>(Rp)</strong></p>
			 </td>
			 <td width="20%" align="center">
				<p><strong>Jml Harga<br/>(Rp)</strong></p>
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
			 <td width="15%" align="center">
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
</ul>
<h4>3. JANGKA WAKTU PELAKSANAAN PENGADAAN</h4>
<ul>
   <li><strong>a)</strong> Jangka waktu pelaksanaan pekerjaan pengadaan barang pada butir 1 (satu) di atas adalah selama {jangka_waktu} ({terbilang_jangk_awaktu}) hari kalender.</li>
   <li><strong>b)</strong> Yang dimaksud dengan point a di atas adalah jangka waktu paling lambat seluruh pengadaan diterimao leh BUT dalam keadaan baik dan lengkap sesuai dengan spesifikasi yang tercantum pada Butir2 point b serta dibuktikan dengan Berita Acara Serah Terima dan Uji Terima Barang yang ditandatangani oleh kedua belah pihak.</li>
</ul>
<h4>4. CARA PEMBAYARAN</h4>
<ul>
   <li><strong>a)</strong> Pembayaran akan dilaksanakan oleh BUT secara Transfer kepada REKANAN ke<strong>Nomor Rekening : {no_rekening_vendor} </strong>pada <strong> Bank {bank_rekening_vendor}</strong> atas nama <strong>{nama_rekening_vendor}</strong>setelah barang diterima 100% dalam keadaan baik dan lengkap serta dibuktikan dengan Berita Acara Uji dan Serah Terima Pengadaan Barang serta biaya administrasi pembayaran antar bank ditanggung Rekanan.</li>
   <li><strong>b)</strong> Pembayaran dilaksanakan paling lambat 14 (empat belas) hari kerja terhitung sejak tanggal Surat Permohonan Pembayaran yang memenuhi persyaratan dari REKANAN diterima oleh PT. BUT dengan dilampiri :</li>
	<ol>
	   <li>Surat Permohonan Pembayaran.</li>
	   <li>Kuitansi Pembayaranrangkap 2 (dua) denganmaterai yang cukup.</li>
	   <li>Berita Acara SerahTerima Pengadaan Barang.</li>
	   <li>Faktur Pajak, jika Perusahaan KenaPajak.</li>
	   <li>Foto copy Surat PerintahKerja.</li>
	</ol>
</ul>
<h4>5. GARANSI</h4>
<ul>
   <li><strong>a)</strong> Rekanan wajib mengganti dengan barang yang baru tanpa memungut biaya apapun kepada pihak PT. BUT, apabila pada saat serah terima pengadaan barang terdapat cacat/rusak baik yang diketahui atau tidak diketahui oleh pihak PT. BUT dan masih menjadi tanggung jawab sepenuhnya Rekanan.</li>
   <li><strong>b)</strong> Rekanan memberikan masa garansi seperti pada rincian pekerjaan Butir 2 Ayat b terhitung sejak tanggal Berita Acara Serah Terima ditanda tangani oleh kedua belah pihak.</li>
</ul>
<h4>6. SANKSI</h4>
<p>Bila REKANAN tidak dapat memenuhi pekerjaan dalam jangka waktu seperti dimaksud pada Butir 3 point a di atas, maka :</p>
<ul>
   <li><strong>a)</strong> Setiap keterlambatan hari kalender akan dikenakan denda oleh pihak PT. BUT kepada REKANAN sebesar 1/1000 (satu per seribu) dari total harga sebelum pajak sebagaimana yang tercantum pada Butir2 point a.</li>
   <li><strong>b)</strong> Apabila keterlambatan pekerjaan melampaui 5 (lima) harikalender terhitung sejak berakhirnya jangka waktu sebagaimana Butir 3 point a di atas, maka PT. BUT berhak membatalkan Surat Perintah Kerja ini dengan tanpa adanya tuntutan apapun dari pihak REKANAN.</li>
</ul>
<h4>7. LAIN LAIN</h4>
<ul>
   <li><strong>a)</strong> Apabila terdapat perubahan-perubahan dari ketentuan-ketentuan tersebut dalam Surat Perintah Kerja ini, maka dapat dilakukan dengan Amandemen yang disetujui oleh kedua belah pihak.</li>
   <li><strong>b)</strong> Surat Perintah Kerja ini dibuat dalam rangkap 2 (dua) asli yang masing-masing sama isinya di atas kertas bermaterai cukup serta mempunyai kekuatan hukum yang sama setelah ditanda tangani dan dibubuhi cap/stempel perusahaan kedua belah pihak.</li>
</ul>

<p>Demikian Surat Perintah ini dibuat dengan itikad baik untuk dipatuhi dan dilaksanakan oleh kedua belah pihak, <strong>PT. BUT </strong>dan<strong> REKANAN</strong>.</p>
<table width="100%">
   <tbody>
      <tr>
         <td width="30%">&nbsp;</td>
		 <td width="40%"></td>
		 <td width="30%">Bandung, {tgl_surat}</td>
      </tr>
	  <tr>
         <td width="30%">PT. Bhakti Unggul Teknovasi<br/><br/><br/><br/><br/><br/><br/></td>
		 <td width="40%"></td>
		 <td width="30%">REKANAN<br/>{nama_vendor}<br/><br/><br/><br/><br/><br/><br/></td>
      </tr>
	  <tr>
         <td width="30%">Totok Gunarto</td>
		 <td width="40%"></td>
		 <td width="30%">{nama_pihak_vendor}</td>
      </tr>
	  <tr>
         <td width="30%">Direktur Utama</td>
		 <td width="40%"></td>
		 <td width="30%">{jabatan_pihak_vendor}</td>
      </tr>
   </tbody>
</table>