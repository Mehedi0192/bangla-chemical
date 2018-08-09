<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Books_article extends CI_Controller
{

		public function __construct()
		{
			parent::__construct();
      $this->load->model('books_article_model');
		}

    function add_published_books_form()
    {
      $data=array();
      $data['admin_main_content']=$this->load->view('banche/pages/add_published_books_form', '', true);
      $this->load->view('banche/admin_master', $data);
    }

   private function upload_books_image()  
              {
                $config['upload_path']          = './books_image/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('books_image'))
                {
                  $data=$this->upload->data();
                  $books_image_path="books_image/$data[file_name]";
                  return $books_image_path;
                }
                else {
                  $error=$this->upload->display_errors();
                  print_r($error);
                }

      }


  function save_books()
  {
    $books_image=$this->upload_books_image();
    $this->books_article_model->save_books($books_image);
    $this->add_published_books_form();
  }
  function manage_published_books()
  {
    $data=array();
    $data['all_books_info']=$this->books_article_model->select_all_books_info();
    $data['admin_main_content']=$this->load->view('banche/pages/manage_books', $data, TRUE);
    $this->load->view('banche/admin_master', $data);
  }


 function delete_books($delete_books_id)
 {
   $this->books_article_model->delete_books($delete_books_id);
   $this->manage_published_books();
 }

 function books_info_by_id($books_id)
 {
    $this->load->view('header');
    $data['books_details']=$this->books_article_model->books_info_by_id($books_id);
    $this->load->view('books_details', $data);
    $this->load->view('footer');

 }

   function books_details_info_by_id($books_id)
      {
        $this->load->view('left_bar');
        $data['header']=$this->load->view('header', '', true);
        $data['footer']=$this->load->view('footer', '', true);
        $data['books_details']=$this->books_article_model->books_details_info_by_id($books_id);
         $this->load->view('books_details', $data);
      }


    function add_column_article_form()
    {
      $data=array();
      $data['admin_main_content']=$this->load->view('banche/pages/add_column_article_form', '', true);
      $this->load->view('banche/admin_master', $data);
    }

      function save_column_article()
      {
        $this->books_article_model->save_column_article();
        $this->add_column_article_form();
      }

      function manage_column_article()
      {
        $data=array();
        $data['all_column_article_info']=$this->books_article_model->select_all_column_article_info();
        $data['admin_main_content']=$this->load->view('banche/pages/manage_column_article', $data, TRUE);
        $this->load->view('banche/admin_master', $data);

      }

      function column_article_info_by_id($column_article_id)
      {
        $this->load->view('left_bar');
        $data['header']=$this->load->view('header', '', true);
        $data['footer']=$this->load->view('footer', '', true);
        $data['column_article_detail']=$this->books_article_model->column_article_info_by_id($column_article_id);
         $this->load->view('column_article_details', $data);
        

      }


      function delete_column_article($delete_column_article_id)
      {
          $this->books_article_model->delete_column_article($delete_column_article_id);
          $this->manage_column_article();

      }

      function add_works_affiliation_form()
    {
     $data['admin_main_content']=$this->load->view('banche/pages/add_works_affiliation_form', '', true);
     $this->load->view('banche/admin_master', $data);
    }

    function save_works_affiliation()
    {
      $this->books_article_model->save_works_affiliation();
      $this->add_works_affiliation_form();
    }

    function manage_works_affiliation()
    {
    $data['all_works_affiliation_info']=$this->books_article_model->select_all_works_affiliation_info();
    $data['admin_main_content']=$this->load->view('banche/pages/manage_works_affiliation', $data, true);
    $this->load->view('banche/admin_master', $data);
    }

    function delete_works_affiliation($works_affiliation_id)
    {
      $this->books_article_model->delete_works_affiliation($works_affiliation_id);
      $this->manage_works_affiliation();
    }


  }