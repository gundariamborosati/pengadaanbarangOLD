<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_surat extends CI_Controller {
  
    function __construct()
    {
        parent::__construct();
        $this->load->library("Pdf"); // panggil library cpdf

        // load model
		$this->load->model('m_detil_pesanan');
		$this->load->model('m_pesanan');

    }



    function surat_bastvendor(){
    	$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);    

    	// set document information    	 
	    $pdf->SetCreator(PDF_CREATOR);
	    $pdf->SetAuthor('Logistik PT Bhakti Unggul');
	    $pdf->SetTitle('Berita Acara Serah Terima');
	    $pdf->SetSubject('BAST');

	   	// nambahin halaman
	   	$pdf->AddPage();

	   	// header
	    $pdf->SetFont('Times','b',14);
	    //Cell($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=0, $link='', $stretch=0, $ignore_min_height=false, $calign='T', $valign='M')
	    $pdf->Ln(4);
	    $pdf->Cell(0,0,'BERITA ACARA',0,1,'C');
	    $pdf->Cell(0,0,'SERAH TERIMA BARANG',0,1,'C');
	    $pdf->Cell(0,0,'PT BHAKTI UNGGUL TEKNOVASI',0,1,'C');

	    $pdf->Ln(10);
	    $text = 'Pada hari ini Selasa tanggal Lima bulan September tahun Dua ribu tujuh belas, telah dilaksanakan 
				Serah Terima Komputer dari PT. Bhakti Unggul Teknovasi (Rekanan) kepada Universitas Telkom,
				adapun hasilnya sebagai berikut :
				';

		 // SPASI ENTER
	    $pdf->SetFont('Times','',12);
	    $pdf->Multicell(0,0,$text,0);

	    $pdf->Ln(50);
	    $text = 'Demikian Berita Acara ini dibuat untuk proses lebih lanjut.';
		$pdf->Multicell(0,0,$text,0,'L');	    

		$pdf->Ln(10);
		$vendor ='PT MediaWave';
		$pdf->Cell(94,0,$vendor,0,0,'C');
		$pdf->Cell(94,0,'PT Bhakti Unggul Teknovasi',0,1,'C');

		$pdf->Ln(30);
		$pdf->Cell(94,0,'(___________________________)',0,0,'C');
		$pdf->Cell(94,0,'(___________________________)',0,1,'C');


	    $pdf->Output();
    }
    function bast_customer(){
    	$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);    

    	// set document information    	 
	    $pdf->SetCreator(PDF_CREATOR);
	    $pdf->SetAuthor('Logistik PT Bhakti Unggul');
	    $pdf->SetTitle('Berita Acara Serah Terima');
	    $pdf->SetSubject('BAST');

	   	// nambahin halaman
	   	$pdf->AddPage();

	   	// header
	    $pdf->SetFont('Times','b',14);
	    //Cell($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=0, $link='', $stretch=0, $ignore_min_height=false, $calign='T', $valign='M')
	    $pdf->Ln(4);
	    $pdf->Cell(0,0,'BERITA ACARA',0,1,'C');
	    $pdf->Cell(0,0,'SERAH TERIMA BARANG',0,1,'C');
	    $pdf->Cell(0,0,'PT BHAKTI UNGGUL TEKNOVASI',0,1,'C');

	    $pdf->Ln(15);
	    $hari = 'selasa';
	    $date = date('d - m - Y');

	    $text = 'Pada hari ini'. $hari .'tanggal Lima bulan September tahun Dua ribu tujuh belas, telah dilaksanakan Serah Terima Komputer dari PT. Bhakti Unggul Teknovasi (Rekanan) kepada Universitas Telkom, adapun hasilnya sebagai berikut :';
		$pdf->SetFont('Times','',12);
	    $pdf->Multicell(0,0,$text,0);

	    $pdf->Ln(50);
	    $pdf->Cell(0,0,'Demikian Berita Acara ini dibuat untuk proses lebih lanjut.',0,1,'L');	

	    $pdf->Ln(30);
		$customer ='Universitas Telkom';		
		$pdf->Cell(94,0,'PT Bhakti Unggul Teknovasi',0,0,'C');
		$pdf->Cell(94,0,$customer,0,1,'C');

		$pdf->Ln(30);
		$pdf->Cell(94,0,'(___________________________)',0,0,'C');
		$pdf->Cell(94,0,'(___________________________)',0,1,'C');	   

	    $pdf->Output();
    }
    
   	function suratSPPH($id){
   		// get dulu model si pesanan terus ambil datanya.
   		$data = $this->m_pesanan->joinPesananDetil();
   		//print_r($data);
   		//print_r($data[0]->username); 

   		$nama_perusahaan = $data[0]->username;
   		

    	$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);    
    	
    	 // set document information
	    $pdf->SetCreator(PDF_CREATOR);
	    $pdf->SetAuthor('Logistik PT Bhakti Unggul Teknovasi');
	    $pdf->SetTitle('Surat SPPH');
	    $pdf->SetSubject('SPPH');

	   	// nambahin halaman
	   	$pdf->AddPage();

	   	// header
	    $pdf->SetFont('Times','',12);
	    //Cell($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=0, $link='', $stretch=0, $ignore_min_height=false, $calign='T', $valign='M')

	    $nomor = '9999';
	    $date = date('d - m - Y');
	    $pdf->Cell(10,2,'Nomor : '.$nomor,0,0,'L');
	    $pdf->Cell(0,2,'Bandung, '.$date,0,1,'R');

	    
	    $jenis = 'Permintaan Penawaran Harga';
	    $pdf->Cell(10,2,'Perihal : '.$jenis,0,1,'L');

	    $pdf->Ln(4); // SPASI ENTER

	    $pdf->Cell(10,2,'Kepada,',0,1,'L');
	    $vendor = 'Nama Vendor';
	    $pdf->Cell(10,2,'Yth.'.$vendor,0,1,'L');
	    $alamat = "alamat";
	    $pdf->Cell(10,2,$alamat,0,1,'L');
	    $pdf->Ln(10);

	    $pdf->Cell(10,2,'Dengan Hormat,',0,1,'L');
		$text = 'Sehubungan dengan katalog barang yang anda sediakan, kami tertarik untuk mendapatkan informasi harga mengenai barang dibawah ini:';

		$pdf->Multicell(0,0,$text,0);

		$pdf->Ln(150);
		$pdf->Cell(10,2,'Hormat kami,',0,1,'L');
		$pdf->Cell(10,2,'PT Bhakti Unggul Teknovasi',0,1,'L');
		$pdf->Ln(25);
		$nama = "Totok Gunarto";
		$pdf->SetFont('Times','b',12);
		$pdf->Cell(20,2,$nama,0,1,'L');

		$pdf->SetFont('Times','',12);
		$pdf->Cell(20,2,'Direktur Utama',0,1,'L');

	    $pdf->Output();
    }

    function suratSPH(){
    	$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);    	
    	// set document information
		$pdf->SetCreator(PDF_CREATOR);
	    $pdf->SetAuthor('Logistik PT Bhakti Unggul Teknovasi');
	    $pdf->SetTitle('Surat SPH');
	    $pdf->SetSubject('SPH');

	    // nambahin halaman
	   	$pdf->AddPage();

	   	// header
	    $pdf->SetFont('Times','',12);

	    $date = date('d - m - Y');	    
	    $pdf->Cell(0,2,'Bandung, '.$date,0,1,'L');
	    $pdf->Ln(10);

	    $nomor = '9999';
	    $pdf->Cell(0,2,'Nomor: '.$nomor,0,1,'L');

	    $lampiran ="1 (satu) lembar";
		$pdf->Cell(0,2,'Lampiran: '.$lampiran,0,1,'L');	    

		$jenis = 'Penawaran Harga';
	    $pdf->Cell(10,2,'Perihal : '.$jenis,0,1,'L');

	    $pdf->Ln(10);
	    $pdf->Cell(10,2,'Kepada Yth.',0,1,'L');
	    $vendor = 'Telkom Universitas';
	    $pdf->Cell(10,2,$vendor,0,1,'L');
	    $alamat = "Bojongsoang";
	    $pdf->Cell(10,2,$alamat,0,1,'L');

	    $pdf->Ln(15);
	    $pdf->Cell(10,2,'Dengan hormat,',0,1,'L');
	    $harga = "Rp. 3.000.00 ";
	    $terbilang ="Tiga juta ribu rupiah";

	    $text = 'Menunjuk permintaan Saudara perihal Permintaan Penawaran Harga Pengadaan Komputer, kami sampaikan penawaran harga untuk pengadaan dimaksud dengan nilai sebesar'.$harga.'('.$terbilang.')sudah termasuk PPn 10%, dengan perincian terlampir.:';
		$pdf->Multicell(0,0,$text,0);
		$pdf->Ln(5);
		$text = 'Demikian disampaikan, atas perhatian dan kerja samanya diucapkan terima kasih.';
		$pdf->Cell(10,2,$text,0,1,'L');
	    
	    $pdf->Ln(110);
		$pdf->Cell(10,2,'Hormat kami,',0,1,'L');
		$pdf->Cell(10,2,'PT Bhakti Unggul Teknovasi',0,1,'L');
		$pdf->Ln(25);
		$nama = "Totok Gunarto";
		$pdf->SetFont('Times','b',12);
		$pdf->Cell(20,2,$nama,0,1,'L');
		$pdf->SetFont('Times','',12);
		$pdf->Cell(20,2,'Direktur Utama',0,1,'L');

		$pdf->AddPage();

		$pdf->Cell(0,2,'Lampiran surat nomor: '.$nomor,0,1,'L');
		$pdf->Cell(0,2,'Tanggal :'.$date,0,1,'L');
		$pdf->Cell(10,2,'Perihal : '.$jenis,0,1,'L');

		$pdf->Ln(100);
		$pdf->Cell(10,2,'terbilang : '.$terbilang,0,1,'L');		

		$pdf->Ln(50);
		$pdf->Cell(10,2,'Hormat kami,',0,1,'L');
		$pdf->Cell(10,2,'PT Bhakti Unggul Teknovasi',0,1,'L');
		$pdf->Ln(25);
		$nama = "Totok Gunarto";
		$pdf->SetFont('Times','b',12);
		$pdf->Cell(20,2,$nama,0,1,'L');
		$pdf->SetFont('Times','',12);
		$pdf->Cell(20,2,'Direktur Utama',0,1,'L');
		$pdf->Output();
    }


	 //    $pdf->SetFont('Times','',12);
	 //    $pdf->Multicell(0,0,$text,0);


	 //    $text = 'Yang dalam hal ini mewakili secara sah : PT. Bhakti Unggul Teknovasi, selanjutnya disebut sebagai             PT. BUT, memberi perintah kerja Pengadaan XXXXXX, kepada :';

		// $pdf->Ln(4); // SPASI ENTER


	 //    $pdf->SetFont('Times','',12);
	 //    $pdf->Multicell(0,0,$text,0);

	    





	 //    $pdf->Output();
  //   }
     

    }
    
    function suratSPK(){
    	$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);    

    	// set document information
    	 // set document information
	    $pdf->SetCreator(PDF_CREATOR);
	    $pdf->SetAuthor('Logistik PT Bhakti Unggul');
	    $pdf->SetTitle('Surat SPK');
	    $pdf->SetSubject('SPK');

	   	// nambahin halaman
	   	$pdf->AddPage();

	   	// header
	    $pdf->SetFont('Times','b',14);
	    //Cell($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=0, $link='', $stretch=0, $ignore_min_height=false, $calign='T', $valign='M')

	    
	    $pdf->Cell(0,0,'SURAT PERINTAH KERJA',0,1,'C');
	    $nomor = '9999';
	    $pdf->Cell(0,0,'No.  '.$nomor,0,1,'C');


	    $text = 'Dengan berdasarkan hasil negosiasi harga tanggal xxxxx antara PT. Bhakti Unggul Teknovasi dengan XXXXXX tentang Pengadaan XXXXXX, maka kami yang bertanda tangan dibawah ini :';

		$pdf->Ln(4); // SPASI ENTER


    function testImport(){
     	//$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
     	$pdf = new PDF();
     	$fileTemplate = dirname(__FILE__) . '\template\user.pdf';
     	echo $fileTemplate;
     	$pageCount = $pdf->setSourceFile($fileTemplate);

     	$pageId = $pdf->importPage(1);

		$pdf->addPage();
		$pdf->useImportedPage($pageId, 10, 10, 90);

	 $pdf->Output('theNewFile.pdf', 'D');

    }
  

}