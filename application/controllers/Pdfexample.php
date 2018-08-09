<?php 
class pdfexample extends CI_Controller{
      function __construct() { 
 parent::__construct();
 } 
     function index($id)
 {
$this->load->library('Pdf');
$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
$pdf->SetTitle('My Pdf');
$pdf->SetHeaderMargin(30);
$pdf->SetTopMargin(20);
$pdf->setFooterMargin(20);
$pdf->SetAutoPageBreak(true);
$pdf->SetAuthor('Author');
$pdf->SetDisplayMode('real', 'default');
$pdf->Write(5, 'CodeIgniter TCPDF Integration');
$pdf->AddPage();
$data['article'] = $this->books_article_model->column_article_info_by_id($id);
$html =$this->load->view("details", $data, TRUE);
$pdf->writeHTML($html); 
ob_clean();
$pdf->Output('pdfexample.pdf', 'D');
      }
}
?>