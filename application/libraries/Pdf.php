<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  
 use setasign\Fpdi;
require_once dirname(__FILE__) . '/tcpdf/tcpdf.php';
require_once dirname(__FILE__) . '/fpdi/src/autoload.php';
  
class Pdf extends Fpdi\TcpdfFpdi
{
 function __construct()
 {
 parent::__construct();
 }
}
  
/* End of file Pdf.php */
/* Location: ./application/libraries/Pdf.php */