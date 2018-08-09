<?php 
defined('BASEPATH') OR exit('Whow are You!');

Class Admin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if(!isset($this->session->admin_id) && ($this->session->user_role != 1))
		{
			redirect('banche');
		}
		$this->load->model('admin_model');
	}

	public function index()
	{
		$data['admin_main_content']=$this->load->view('banche/pages/home', '', true);
		$this->load->view('banche/admin_master', $data);
	}

	public function add_partner_image_form()
	{
		$data['admin_main_content']=$this->load->view('banche/pages/add_partner_image_form', '', true);
		$this->load->view('banche/admin_master', $data);

	}

	private function upload_partner_image()
              {
                $config['upload_path']          = './partner_folder/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 5000;
                $config['max_width']            = 211;
                $config['max_height']           = 74;

                $this->load->library('upload', $config);
                if($this->upload->do_upload('partner_image'))
                {
                  $data=$this->upload->data();
                  $image_path="partner_folder/$data[file_name]";
                  return $image_path;
                  //echo $image_path;
                }
                else {
                  $error=$this->upload->display_errors();
                  print_r($error);
                }
      }

	function save_partner_image()
	{
		$partner_image=$this->upload_partner_image();
		$this->admin_model->save_partner_image($partner_image);
		$this->add_partner_image_form();
	}

	function manage_partner_image()
	{
		$data['manage_partner_image']=$this->admin_model->manage_partner_image();
		$data['admin_main_content']=$this->load->view('banche/pages/manage_partner_image', $data, true);
		$this->load->view('banche/admin_master', $data);
	}

	function delete_partner_image($partner_id)
    {
    	$this->admin_model->delete_partner_image($partner_id);
    	$this->manage_partner_image();
    }

    function add_associations_memberships_form()
    {
    $data['admin_main_content']=$this->load->view('banche/pages/add_associations_memberships_form', '', true);
	$this->load->view('banche/admin_master', $data);
    }

    function save_associations_memberships()
    {
    	$this->admin_model->save_associations_memberships();
    	$this->add_associations_memberships_form();
    }

    function manage_associations_memberships()
    {
    	$data['manage_associations_memberships']=$this->admin_model->manage_associations_memberships();
		$data['admin_main_content']=$this->load->view('banche/pages/manage_associations_memberships', $data, true);
		$this->load->view('banche/admin_master', $data);
    }

    function delete_associations($associations_id)
    {
    	$this->admin_model->delete_associations($associations_id);
    	$this->manage_associations_memberships();
    }

    function add_key_personnel_form()
    {
    $data['admin_main_content']=$this->load->view('banche/pages/add_key_personnel_form', '', true);
	$this->load->view('banche/admin_master', $data);
    }

   private function upload_key_personnel_image()
              {
                $config['upload_path']          = './key_personnel/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);
                if($this->upload->do_upload('key_personnel_image'))
                {
                  $data=$this->upload->data();
                  $image_path="key_personnel/$data[file_name]";
                  return $image_path;
                }
                else {
                  $error=$this->upload->display_errors();
                  //print_r($data);
                }

      }


  function save_key_personnel()
  {
    $key_personnel_image=$this->upload_key_personnel_image();
    $this->admin_model->save_key_personnel($key_personnel_image);
    $this->add_key_personnel_form();
  }
  function manage_key_personnel()
  {
    $data=array();
    $data['all_key_personnel']=$this->admin_model->select_all_key_personnel();
    $data['admin_main_content']=$this->load->view('banche/pages/manage_key_personnel', $data, TRUE);
    $this->load->view('banche/admin_master', $data);
  }

  function edit_key_personnel($key_personnel_id)
 {
    $data['key_personnel_info']=$this->admin_model->key_personnel_info_by_id($key_personnel_id);
    $data['admin_main_content']=$this->load->view('banche/pages/edit_key_personnel_form', $data, TRUE);
    $this->load->view('banche/admin_master', $data);
 }


    function update_key_personnel()
 {
   //echo '<pre>';
   //print_r($_FILES);
   if($_FILES['key_personnel_image']['name']=='' || $_FILES['key_personnel_image']['size']=='')
   {

    $key_personnel_image=$this->input->post('old_image',true);

    $this->admin_model->update_key_personnel($key_personnel_image);

    $data=array();
    $key_personnel_id=$this->input->post('key_personnel_id', true);
    //redirect('edit-key-personnel/'.$key_personnel_id);
     $this->manage_key_personnel();

   }
   else
   {
    $key_personnel_image=$this->upload_key_personnel_image();
    $this->admin_model->update_key_personnel($key_personnel_image);

    unlink($this->input->post('old_image',true));

    $data=array();
    $key_personnel_id=$this->input->post('key_personnel_id', true);
    $this->manage_key_personnel();
    //redirect('edit-key-personnel/'.$key_personnel_id);
   }
 }

 function delete_key_personnel($delete_key_personnel_id)
 {
   $this->admin_model->delete_key_personnel($delete_key_personnel_id);
   $this->manage_key_personnel();
 }
  function add_product_form()
 {
  $data['admin_main_content']=$this->load->view('banche/pages/add_product_form', '', true);
  $this->load->view('banche/admin_master', $data);
 }

 function save_product()
  {
    $this->admin_model->save_product();
    $this->add_product_form();
  }

 function add_highlighted_product_form()
 {
  $data['admin_main_content']=$this->load->view('banche/pages/add_highlighted_product_form', '', true);
  $this->load->view('banche/admin_master', $data);
 }

 function save_highlighted_product()
  {
    $this->admin_model->save_highlighted_product();
    $this->add_highlighted_product_form();
  }
  function manage_highlighted_product()
  {
    $data=array();
    $data['all_highlighted_product']=$this->admin_model->select_all_highlighted_product();
    $data['admin_main_content']=$this->load->view('banche/pages/manage_highlighted_product', $data, TRUE);
    $this->load->view('banche/admin_master', $data);
  }
  function delete_highlighted_product($delete_highlighted_product_id)
  {
    $this->admin_model->delete_highlighted_product($delete_highlighted_product_id);
    $this->manage_highlighted_product();
  }


}