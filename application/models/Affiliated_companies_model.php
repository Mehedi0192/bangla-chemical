<?php
defined('BASEPATH') OR exit('Who are You');

Class Affiliated_companies_model extends CI_Model{

 function save_affiliated_companies($affiliated_companies_logo,$affiliated_companies_pdf)
  {
  	$data['affiliated_companies_logo']=$affiliated_companies_logo;
  	$data['affiliated_companies_pdf']=$affiliated_companies_pdf;
  	$data['affiliated_companies_name']=$this->input->post('affiliated_companies_name', true);
  	$data['affiliated_companies_short_desc']=$this->input->post('affiliated_companies_short_desc', true);
  	$data['affiliated_companies_url']=$this->input->post('affiliated_companies_url', true);
  	//echo "<pre>";
  	//print_r($data);
  	$this->db->insert('tbl_affiliated_companies', $data);
  }

    function select_all_affiliated_companies()
    {
    	$result=$this->db->select('*')->from('tbl_affiliated_companies')
    	                      ->get()
    	                      ->result();
    	                      return $result;
    }

     function delete_affiliate_companies($delete_affiliate_companies_id)
    {
      $this->db->where('affiliated_companies_id', $delete_affiliate_companies_id)
                ->delete('tbl_affiliated_companies');
    }









	}