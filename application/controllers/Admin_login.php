<?php
defined('BASEPATH') OR exit('No direct script allowed');

Class Admin_login extends CI_Controller{
  
  function __construct()
  {
  	parent::__construct();
    $this->load->model('admin_login_model');
  }

  public function index()
  {
    if(isset($this->session->admin_id))
    {
      redirect('admin-dashboard');
    }
    else {
  	$this->load->view('banche/admin_login_page');
  }
  }

  function admin_login_check()
  {
         $username=$this->input->post('username', TRUE);
         $password=$this->input->post('password', TRUE);

         $login_info=$this->admin_login_model->get_user_detail($username);

         if(password_verify($password, $login_info->password))
         {
           if($login_info->user_role == 1)
           {
             $session_data['username']=$login_info->username;
             $session_data['admin_id']=$login_info->admin_id;
             $session_data['user_role']=$login_info->user_role;
             $this->session->set_userdata($session_data);

             redirect('admin-dashboard');
           }
           else
           {
             $data['error_message']='incorrect ID or Password';
             redirect('banche');
           }
         }

         else {
             $data['error_message']='incorrect ID or Password';
             redirect('banche');
         }

       }

       public function admin_logout_check()
       {
         $this->session->sess_destroy();
         redirect('banche');
       }
  }