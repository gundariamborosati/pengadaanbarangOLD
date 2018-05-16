<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_surat extends CI_Controller {
  
    function __construct()
    {
        parent::__construct();
        $this->load->library("Pdf"); // panggil library cpdf
    }



    function beritaACARA(){
    	$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);    

    	// set document information
    	 // set document information
	    $pdf->SetCreator(PDF_CREATOR);
	    $pdf->SetAuthor('Logistik PT Bhakti Unggul');
	    $pdf->SetTitle('Surat SPPH');
	    $pdf->SetSubject('SPPH');

	   	// nambahin halaman
	   	$pdf->AddPage();

	   	// header
	    $pdf->SetFont('Times','b',14);
	    //Cell($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=0, $link='', $stretch=0, $ignore_min_height=false, $calign='T', $valign='M')

	    $pdf->Cell(0,0,'BERITA ACARA',0,1,'C');
	    $pdf->Cell(0,0,'SERAH TERIMA BARANG',0,1,'C');
	    $pdf->Cell(0,0,'PT BHAKTI UNGGUL TEKNOVASI',0,1,'C');

	    $text = 'Pada hari ini Selasa tanggal Lima bulan September tahun Dua ribu tujuh belas, telah dilaksanakan 
				Serah Terima Komputer dari PT. Bhakti Unggul Teknovasi (Rekanan) kepada Universitas Telkom,
				adapun hasilnya sebagai berikut :
				';

		$pdf->Ln(4); // SPASI ENTER

	    $pdf->SetFont('Times','',12);
	    $pdf->Multicell(0,0,$text,0);




	    $pdf->Output();
    }

     function suratSPPH(){
    	$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);    

    	// set document information
    	 // set document information
	    $pdf->SetCreator(PDF_CREATOR);
	    $pdf->SetAuthor('Logistik PT Bhakti Unggul');
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


	    $pdf->SetFont('Times','',12);
	    $pdf->Multicell(0,0,$text,0);


	    $text = 'Yang dalam hal ini mewakili secara sah : PT. Bhakti Unggul Teknovasi, selanjutnya disebut sebagai             PT. BUT, memberi perintah kerja Pengadaan XXXXXX, kepada :';

		$pdf->Ln(4); // SPASI ENTER


	    $pdf->SetFont('Times','',12);
	    $pdf->Multicell(0,0,$text,0);

	    





	    $pdf->Output();
    }
     

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