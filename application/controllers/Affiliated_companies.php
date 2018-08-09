<?php
defined('BASEPATH') OR exit('Who are You!');

Class Affiliated_companies extends CI_Controller{
	function __Construct()
	{
		parent::__Construct();
		$this->load->model('affiliated_companies_model');
	}

public function add_affiliated_companies_form()
{
	    $data['admin_main_content']=$this->load->view('banche/pages/add_affiliated_companies_form', '', true);
		$this->load->view('banche/admin_master', $data);
}

   private function upload_affiliated_companies_image()
   {
   	            $config['upload_path']          = './affiliated/';
                $config['allowed_types']        = 'jpg|gif|png|jpeg';
                $config['max_size']             = 5000;
                $config['max_width']            = 132;
                $config['max_height']           = 115;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('affiliated_companies_logo'))
                {
                  $data=$this->upload->data();
                  $image_path="affiliated/$data[file_name]";
                  return $image_path;
                  //echo $image_path;
                }
                else {
                  $error=$this->upload->display_errors();
                  print_r($error);
                }
   }

    private function upload_affiliated_companies_pdf()
   {
   	            $config['upload_path']          = './affiliated_companies_pdf/';
                $config['allowed_types']        = 'pdf|csv';
                $config['max_size']             = 5000;
                //$config['max_width']            = 211;
                //$config['max_height']           = 74;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('affiliated_companies_pdf'))
                {
                  $data=$this->upload->data();
                  $pdf_path="affiliated_companies_pdf/$data[file_name]";
                  return $pdf_path;
                  //echo $pdf_path;
                }
                else {
                  $error=$this->upload->display_errors();
                  print_r($error);
                }
   }

  function save_affiliated_companies()
  {
  	$affiliated_companies_pdf=$this->upload_affiliated_companies_pdf();
  	$affiliated_companies_logo=$this->upload_affiliated_companies_image();
  	$this->affiliated_companies_model->save_affiliated_companies($affiliated_companies_logo,$affiliated_companies_pdf);
  	$this->add_affiliated_companies_form();
  }

    function manage_affiliated_companies()
    {
    $data=array();
    $data['all_affiliated_companies']=$this->affiliated_companies_model->select_all_affiliated_companies();
    $data['admin_main_content']=$this->load->view('banche/pages/manage_affiliated_companies', $data, TRUE);
    $this->load->view('banche/admin_master', $data);
  }

  function delete_affiliate_companies($delete_affiliate_companies_id)
 {
   $this->affiliated_companies_model->delete_affiliate_companies($delete_affiliate_companies_id);
   $this->manage_affiliated_companies();
 }











}