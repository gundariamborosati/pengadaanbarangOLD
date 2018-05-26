<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

	function tangal_bulan_tahun($tgl)
	{
		$ubah 	= gmdate($tgl, time() + 60 * 60 * 8);
		$pecah 	= explode("-", $ubah);
		$tanggal= $pecah[2];
		$bulan 	= bulan($pecah[1]);
		$tahun 	= $pecah[0];
		return $tanggal . ' ' . $bulan . ' ' . $tahun;
	}
	function tanggal($tgl)
	{
		$ubah 	 = gmdate($tgl, time() + 60 * 60 * 8);
		$pecah 	 = explode("-", $ubah);
		$tanggal = $pecah[2];
		return $tanggal;
	}
	
	function bulan($tgl)
	{
		$ubah 	= gmdate($tgl, time() + 60 * 60 * 8);
		$pecah 	= explode("-", $ubah);
		$bulan 	= $pecah[1];
		return $bulan;
	}
	function tahun($tgl)
	{
		$ubah 	= gmdate($tgl, time() + 60 * 60 * 8);
		$pecah 	= explode("-", $ubah);
		$tahun 	= $pecah[0];
		return $tahun;
	}
	
	function bulan_tahun($tgl)
	{
		$ubah 		= gmdate($tgl, time() + 60 * 60 * 8);
		$pecah 		= explode("-", $ubah);
		$tanggal 	= $pecah[2];
		$bulan 		= $pecah[1];
		$tahun 		= $pecah[0];
		return $bulan . ' ' . $tahun;
	}
	
	function nama_bulan($bln)
	{
		switch ($bln) {
		case 1:
			return "januari";
			break;

		case 2:
			return "februari";
			break;

		case 3:
			return "maret";
			break;

		case 4:
			return "april";
			break;

		case 5:
			return "mei";
			break;

		case 6:
			return "juni";
			break;

		case 7:
			return "juli";
			break;

		case 8:
			return "agustus";
			break;

		case 9:
			return "september";
			break;

		case 10:
			return "oktober";
			break;

		case 11:
			return "november";
			break;

		case 12:
			return "desember";
			break;
		}
	}

	function nama_hari($tanggal)
	{
		$ubah = gmdate($tanggal, time() + 60 * 60 * 8);
		$pecah = explode("-", $ubah);
		$tgl = $pecah[2];
		$bln = $pecah[1];
		$thn = $pecah[0];
		$nama = date("l", mktime(0, 0, 0, $bln, $tgl, $thn));
		$nama_hari = "";
		if ($nama == "Sunday") {
			$nama_hari = "Minggu";
		}
		else if ($nama == "Monday") {
			$nama_hari = "Senin";
		}
		else if ($nama == "Tuesday") {
			$nama_hari = "Selasa";
		}
		else if ($nama == "Wednesday") {
			$nama_hari = "Rabu";
		}
		else if ($nama == "Thursday") {
			$nama_hari = "Kamis";
		}
		else if ($nama == "Friday") {
			$nama_hari = "Jumat";
		}
		else if ($nama == "Saturday") {
			$nama_hari = "Sabtu";
		}
		return $nama_hari;
	}
	
	function terbilang($bilangan)
	{
		$angka = array(
			'0',
			'0',
			'0',
			'0',
			'0',
			'0',
			'0',
			'0',
			'0',
			'0',
			'0',
			'0',
			'0',
			'0',
			'0',
			'0'
		);
		$kata = array(
			'',
			'satu',
			'dua',
			'tiga',
			'empat',
			'lima',
			'enam',
			'tujuh',
			'delapan',
			'sembilan'
		);
		$tingkat = array(
			'',
			'ribu',
			'juta',
			'milyar',
			'triliun'
		);
		$panjang_bilangan = strlen($bilangan);
		/* pengujian panjang bilangan */
		if ($panjang_bilangan > 15) {
			$kalimat = "Diluar Batas";
			return $kalimat;
		}
		/* mengambil angka-angka yang ada dalam bilangan,dimasukkan ke dalam array */
		for ($i = 1; $i <= $panjang_bilangan; $i++) {
			$angka[$i] = substr($bilangan, -($i) , 1);
		}
		$i = 1;
		$j = 0;
		$kalimat = "";
		/* mulai proses iterasi terhadap array angka */
		while ($i <= $panjang_bilangan) {
			$subkalimat = "";
			$kata1 = "";
			$kata2 = "";
			$kata3 = "";
			/* untuk ratusan */
			if ($angka[$i + 2] != "0") {
				if ($angka[$i + 2] == "1") {
					$kata1 = "seratus";
				}
				else {
					$kata1 = $kata[$angka[$i + 2]] . " ratus";
				}
			}
			/* untuk puluhan atau belasan */
			if ($angka[$i + 1] != "0") {
				if ($angka[$i + 1] == "1") {
					if ($angka[$i] == "0") {
						$kata2 = "sepuluh";
					}
					elseif ($angka[$i] == "1") {
						$kata2 = "sebelas";
					}
					else {
						$kata2 = $kata[$angka[$i]] . " belas";
					}
				}
				else {
					$kata2 = $kata[$angka[$i + 1]] . " puluh";
				}
			}
			/* untuk satuan */
			if ($angka[$i] != "0") {
				if ($angka[$i + 1] != "1") {
					$kata3 = $kata[$angka[$i]];
				}
			}
			/* pengujian angka apakah tidak nol semua,lalu ditambahkan tingkat */
			if (($angka[$i] != "0") OR ($angka[$i + 1] != "0") OR ($angka[$i + 2] != "0")) {
				$subkalimat = "$kata1 $kata2 $kata3 " . $tingkat[$j] . " ";
			}
			/* gabungkan variabe sub kalimat (untuk satu blok 3 angka)ke variabel kalimat */
			$kalimat = $subkalimat . $kalimat;
			$i = $i + 3;
			$j = $j + 1;
		}
		/* mengganti satu ribu jadi seribu jika diperlukan */
		if (($angka[5] == "0") AND ($angka[6] == "0")) {
			$kalimat = str_replace("satu ribu", "seribu", $kalimat);
		}
		return trim($kalimat);
	}
	
	function terbilang_hari($tgl){
		$nama_hari	=nama_hari($tgl);
		$tanggal	=terbilang(tanggal($tgl));
		$nama_bulan	=nama_bulan(bulan($tgl));
		$tahun		=terbilang(tahun($tgl));
		return $nama_hari.' tanggal '.$tanggal.' bulan '.$nama_bulan.' tahun '.$tahun;
	}
?>