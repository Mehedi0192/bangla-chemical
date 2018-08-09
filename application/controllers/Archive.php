<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Archive extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('archive_model');
	}


	 function add_archive_form()
    {
      $data=array();
      $data['admin_main_content']=$this->load->view('banche/pages/add_archive_form', '', true);
      $this->load->view('banche/admin_master', $data);
    }

      private function upload_archive_pdf()
      {
                $config['upload_path']          = './archive_pdf/';
                $config['allowed_types']        = 'pdf|csv';
                $config['max_size']             = 5000;
                //$config['max_width']            = 1024;
                //$config['max_height']           = 768;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('archive_pdf'))
                {
                  $data=$this->upload->data();
                  $archive_pdf_path="archive_pdf/$data[file_name]";
                  return $archive_pdf_path;
                }
                else {
                  $error=$this->upload->display_errors();
                  //print_r($data);
      }
    }

	 function save_archive_info()
      {
        $archive_pdf=$this->upload_archive_pdf();
        $this->archive_model->save_archive_info($archive_pdf);
        $this->add_archive_form();
      }

      function manage_archive()
      {
      $data=array();
      $data['all_archive']=$this->archive_model->select_all_archive();
      $data['admin_main_content']=$this->load->view('banche/pages/manage_archive', $data, true);
      $this->load->view('banche/admin_master', $data);
      }

      function delete_archive($delete_archive_id)
      {
      	$this->archive_model->delete_archive($delete_archive_id);
      	$this->manage_archive();
      }


     public function our_archive()
	{
		$this->load->view('left_bar');
		$data['header']=$this->load->view('header', '', true);
		$data['footer']=$this->load->view('footer', '', true);
		$this->load->view('our_archive', $data);
	}
}
