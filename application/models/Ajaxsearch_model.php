<?php defined('BASEPATH') OR exit('Who are you!');
Class Ajaxsearch_model extends CI_Model{

	function fetch_data($query)
	{
		$result=$this->db->select('*')
		         ->from('tbl_customer')
		         ->like('Customer_name', $query)
		         ->or_like('Address', $query)
		         ->or_like('City', $query)
		         ->or_like('PostalCode', $query)
		         ->or_like('Country', $query)
		         ->order_by('Customer_id', 'DESC')
		         ->get()
		         ->result();
		         return $result;


	}






}