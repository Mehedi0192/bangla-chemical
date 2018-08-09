<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function about()
	{
		$this->load->view('left_bar');
		$data['header']=$this->load->view('header', '', true);
		$data['footer']=$this->load->view('footer', '', true);
		$this->load->view('about', $data);
	}
	public function what_we_do()
	{
		$this->load->view('left_bar');
		$data['header']=$this->load->view('header', '', true);
		$data['footer']=$this->load->view('footer', '', true);
		$this->load->view('what_we_do', $data);
	}

	public function alphabetic_product()
	{
		$this->load->view('left_bar');
		$data['header']=$this->load->view('header', '', true);
		$data['footer']=$this->load->view('footer', '', true);
		$this->load->view('alphabetic_product', $data);
	}


	public function group_product()
	{
		$this->load->view('left_bar');
		$data['header']=$this->load->view('header', '', true);
		$data['footer']=$this->load->view('footer', '', true);
		$this->load->view('group_product', $data);
	}

	public function highlighted_product()
	{
		$this->load->view('left_bar');
		$data['header']=$this->load->view('header', '', true);
		$data['footer']=$this->load->view('footer', '', true);
		$data['all_highlighted_product']=$this->admin_model->select_all_highlighted_product();
		$this->load->view('highlighted_product', $data);
	}

	public function intro_bd()
	{
		$this->load->view('left_bar');
		$data['header']=$this->load->view('header', '', true);
		$data['footer']=$this->load->view('footer', '', true);
		$this->load->view('introduction_bd', $data);
	}

	public function life_sketch()
	{
		$this->load->view('left_bar');
		$data['header']=$this->load->view('header', '', true);
		$data['footer']=$this->load->view('footer', '', true);
		$this->load->view('life_sketch', $data);
	}

	public function whats_new()
	{
		$this->load->view('left_bar');
		$data['header']=$this->load->view('header', '', true);
		$data['footer']=$this->load->view('footer', '', true);
		$this->load->view('whats_new', $data);
	}

	public function key_personnel()
	{
		$this->load->view('left_bar');
		$data['header']=$this->load->view('header', '', true);
		$data['footer']=$this->load->view('footer', '', true);
		$data['all_executive']=$this->admin_model->select_key_personnel_all_executive();
		$data['asst_mang']=$this->admin_model->select_key_personnel_asst_manager();
		$this->load->view('key_personnel', $data);
	}


	public function our_overseas_partner()
	{
		$this->load->view('left_bar');
		$data['header']=$this->load->view('header', '', true);
		$data['footer']=$this->load->view('footer', '', true);
		$data['all_partner']=$this->admin_model->manage_partner_image();
		$this->load->view('our_overseas_partner', $data);
	}

		public function associations_membership()
	{
		$this->load->view('left_bar');
		$data['header']=$this->load->view('header', '', true);
		$data['footer']=$this->load->view('footer', '', true);
		$data['all_asso_membership']=$this->admin_model->manage_associations_memberships();
		$this->load->view('associations_membership', $data);
	}

		public function affiliated_companies()
	{
		$this->load->view('left_bar');
		$data['header']=$this->load->view('header', '', true);
		$data['footer']=$this->load->view('footer', '', true);
		$data['all_affiliated_companies']=$this->affiliated_companies_model->select_all_affiliated_companies();
		$this->load->view('affiliated_companies', $data);
	}

		public function news_events()
	{
		// Pagination settings
		$config['base_url'] = base_url() . 'page/news_events';
		$config['per_page'] = 3;
		$config["uri_segment"] = 3;
		$config['total_rows'] = $this->media_model->count_news_events();
		$this->pagination->initialize($config);
		$start = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;


		$this->load->view('left_bar');
		$data['header']=$this->load->view('header', '', true);
		$data['footer']=$this->load->view('footer', '', true);
		$data['all_news']=$this->media_model->select_all_news($start, $config['per_page']);
		$data['all_events']=$this->media_model->select_all_events();
		$this->load->view('news_events', $data);
	}

			public function publications_ceo()
	{

		// Pagination settings
		$config['base_url'] = base_url() . 'page/publications_ceo';
		$config['per_page'] = 3;
		$config["uri_segment"] = 3;
		$config['total_rows'] = $this->books_article_model->select_all_column_article_info_count();
		$this->pagination->initialize($config);
		$start = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		$this->load->view('left_bar');
		$data['header']=$this->load->view('header', '', true);
		$data['footer']=$this->load->view('footer', '', true);
		$data['all_column_article']=$this->books_article_model->select_all_column_article_info($start, $config["per_page"]);
		$data['all_books']=$this->books_article_model->select_all_books_info();
		$this->load->view('publications_ceo', $data);
	}

			public function works_affiliation()
	{
		$this->load->view('left_bar');
		$data['header']=$this->load->view('header', '', true);
		$data['footer']=$this->load->view('footer', '', true);
		$data['all_works_affiliation']=$this->books_article_model->select_all_works_affiliation_info();
		$this->load->view('works_affiliation', $data);
	}

			public function contact_us()
	{
		$this->load->view('left_bar');
		$data['header']=$this->load->view('header', '', true);
		$data['footer']=$this->load->view('footer', '', true);
		$this->load->view('contact_us', $data);
	}
			public function terms()
	{
		$this->load->view('left_bar');
		$data['header']=$this->load->view('header', '', true);
		$data['footer']=$this->load->view('footer', '', true);
		$this->load->view('terms', $data);
	}

	function contact_us_info()
	{
	$user_name=$this->input->post('name');
	$company_name=$this->input->post('company_name');
    $job_title=$this->input->post('job_title');
    $company_address=$this->input->post('company_address');
    $zip_code=$this->input->post('zip_code');
    $country=$this->input->post('country');
    $tel_no=$this->input->post('tel_no');
    $email=$this->input->post('email');
    $website=$this->input->post('website');
    $user_message=$this->input->post('message');
 

             $u_name="Name :"." ".$user_name."<br>";
             $c_name="Company :"." ".$company_name."<br>";
             $j_title="Ocupation :"." ".$job_title."<br>";
             $c_address="Company Address :"." ".$company_address."<br>";
             $z_code="Zip :"." ".$zip_code."<br>";
             $u_country="Country :"." ".$country."<br>";
             $u_tel_no="Contact :"." ".$tel_no."<br>";
             $u_email="Email :"." ".$email."<br>";
             $c_website="Website :"." ".$website."<br>";
             $u_message="Message :"." ".$user_message."<br>";
        
         //Load email library
        $this->load->library('email');

        $to_email='mehedihasan01924629@gmail.com';
        $message=$u_name.$c_name.$j_title.$c_address.$z_code.$u_country.$u_tel_no.$u_email.$c_website.$u_message;

        $this->email->from($user_email, $user_name);
        $this->email->to($to_email);
        $this->email->subject('New Query');
        $this->email->message($message);
        //Send mail
        $this->email->send();
        redirect(base_url());
	}


}
