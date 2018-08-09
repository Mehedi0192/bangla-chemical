<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Media extends CI_Controller
{

		public function __construct()
		{
			parent::__construct();
      $this->load->model('media_model');
		}

    function add_news_events_form()
    {
      $data=array();
      $data['admin_main_content']=$this->load->view('banche/pages/add_news_events_form', '', true);
      $this->load->view('banche/admin_master', $data);
    }

   private function upload_news_events_image()
   
              {
                $config['upload_path']          = './news_images/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('news_events_image'))
                {
                  $data=$this->upload->data();
                  $image_path="news_images/$data[file_name]";
                  return $image_path;
                }
                else {
                  $error=$this->upload->display_errors();
                  //print_r($data);
                }

      }

       private function upload_news_events_image_two()
   
              {
                $config['upload_path']          = './news_images/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('news_events_image_two'))
                {
                  $data=$this->upload->data();
                  $image_path="news_images/$data[file_name]";
                  return $image_path;
                }
                else {
                  $error=$this->upload->display_errors();
                  //print_r($data);
                }

      }

       private function upload_news_events_image_three()
   
              {
                $config['upload_path']          = './news_images/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('news_events_image_three'))
                {
                  $data=$this->upload->data();
                  $image_path="news_images/$data[file_name]";
                  return $image_path;
                }
                else {
                  $error=$this->upload->display_errors();
                  //print_r($data);
                }

      }

  function save_news_events()
  {
    $news_events_image=$this->upload_news_events_image();
    $news_events_image_two=$this->upload_news_events_image_two();
    $news_events_image_three=$this->upload_news_events_image_three();
    $this->media_model->save_news_events($news_events_image,$news_events_image_two,$news_events_image_three);
    $this->add_news_events_form();
  }
  function manage_news_events()
  {
    $data=array();
    $data['all_news_events']=$this->media_model->select_all_news_events();
    $data['admin_main_content']=$this->load->view('banche/pages/manage_news_events', $data, TRUE);
    $this->load->view('banche/admin_master', $data);
  }

  function edit_news_events($news_events_id)
 {
    $data['news_events_info']=$this->media_model->news_events_info_by_id($news_events_id);
    $data['admin_main_content']=$this->load->view('banche/pages/edit_news_events_form', $data, TRUE);
    $this->load->view('banche/admin_master', $data);
 }


    function update_news_events()
 {
   //echo '<pre>';
   //print_r($_FILES);

   if($_FILES['news_events_image']['name']=='' || $_FILES['news_events_image']['size']=='')
   {

    $news_events_image=$this->input->post('old_image',true);

    $this->media_model->update_news_events($news_events_image);

    $data=array();
    $news_events_id=$this->input->post('id', true);
    redirect('edit-news-events/'.$news_events_id);
   }
   else
   {
    $news_events_image=$this->upload_news_events_image();
    $this->media_model->update_news_events($news_events_image);

    unlink($this->input->post('old_image',true));

    $data=array();
    $news_events_id=$this->input->post('id', true);
    redirect('edit-news-events/'.$news_events_id);
   }
 }

 function delete_news_events($delete_news_events_id)
 {
   $this->media_model->delete_news_events($delete_news_events_id);
   $this->manage_news_events();
 }

 function news_events_info_by_id($news_events_id)
 {
    $this->load->view('header');
    $data['news_details']=$this->media_model->news_events_info_by_id($news_events_id);
    $this->load->view('news_events_details', $data);
    $this->load->view('footer');

 }

  }