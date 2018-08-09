<?php
defined('BASEPATH') OR exit('Who are You');

Class Admin_model extends CI_Model{

	function save_partner_image($partner_image)
	{
		$data['partner_image']=$partner_image;
		$data['partner_name']=$this->input->post('partner_name', true);
		$this->db->insert('tbl_partner', $data);
	}

	function manage_partner_image()
	{
		$result=$this->db->select('*')->from('tbl_partner')
		                      ->get()
		                      ->result();
		                      return $result;
	}

	function delete_partner_image($partner_id)
	{
		$this->db->where('partner_id', $partner_id)
		         ->delete('tbl_partner');
	}

	function save_associations_memberships()
	{
		$data['associations_name']=$this->input->post('associations_name', TRUE);
		$data['associations_url']=$this->input->post('associations_url', TRUE);
		$this->db->insert('tbl_associations', $data);
	}

	function manage_associations_memberships()
	{
		$result=$this->db->select('*')->from('tbl_associations')
		                      ->get()
		                      ->result();
		                      return $result;
	}

		function delete_associations($associations_id)
	{
		$this->db->where('associations_id', $associations_id)
		         ->delete('tbl_associations');
	}



	function save_key_personnel($key_personnel_image)
   {
     $key_personnel_data['key_personnel_image']=$key_personnel_image;
     $key_personnel_data['key_personnel_name']=$this->input->post('key_personnel_name', true);
     $key_personnel_data['key_personnel_designation']=$this->input->post('key_personnel_designation', true);
     $key_personnel_data['key_personnel_email']=$this->input->post('key_personnel_email', true);
     $key_personnel_data['key_personnel_contact_one']=$this->input->post('key_personnel_contact_one', true);
     $key_personnel_data['key_personnel_contact_two']=$this->input->post('key_personnel_contact_two', true);
     $this->db->insert('tbl_key_personnel', $key_personnel_data);
   }

function select_all_key_personnel()
   {
      $result=$this->db->select('*')->from('tbl_key_personnel')
                            ->get()
                            ->result();
                            return $result;
   }

   function key_personnel_info_by_id($key_personnel_id)
   {
      $result=$this->db->select('*')->from('tbl_key_personnel')
                            ->where('key_personnel_id', $key_personnel_id)
                            ->get()
                            ->row();
                            return $result;
   }


   function select_key_personnel_ceo()
   {
      $result=$this->db->select('*')->from('tbl_key_personnel')
                            ->where('key_personnel_designation', 'CEO')
                            ->get()
                            ->row();
                            return $result;
   }

   function select_key_personnel_executive_director()
   {
      $result=$this->db->select('*')->from('tbl_key_personnel')
                            ->where('key_personnel_designation', 'Executive Director')
                            ->get()
                            ->row();
                            return $result;
   }

   function select_key_personnel_general_manager()
   {
      $result=$this->db->select('*')->from('tbl_key_personnel')
                            ->where('key_personnel_designation', 'General Manager')
                            ->get()
                            ->row();
                            return $result;
   }

   function select_key_personnel_manager()
   {
      $result=$this->db->select('*')->from('tbl_key_personnel')
                            ->where('key_personnel_designation', 'Manager')
                            ->get()
                            ->row();
                            return $result;
   }

    function select_key_personnel_asst_manager()
   {
      $result=$this->db->select('*')->from('tbl_key_personnel')
                            ->where('key_personnel_designation', 'Asst. Manager')
                            ->get()
                            ->result();
                            return $result;
   }
   function select_key_personnel_all_executive()
   {
      $result=$this->db->select('*')->from('tbl_key_personnel')
                            ->limit(20, 6)
                            ->get()
                            ->result();
                            return $result;
   }

    function update_key_personnel($key_personnel_image)
  {
    $data=array();
    
    $key_personnel_id=$this->input->post('key_personnel_id',true);
    $data['key_personnel_name']=$this->input->post('key_personnel_name',true);
    $data['key_personnel_designation']=$this->input->post('key_personnel_designation',true);
    $data['key_personnel_image']=$key_personnel_image;
    $data['key_personnel_email']=$this->input->post('key_personnel_email',true);
    $data['key_personnel_contact_one']=$this->input->post('key_personnel_contact_one',true);
    $data['key_personnel_contact_two']=$this->input->post('key_personnel_contact_two',true);

    $this->db->where('key_personnel_id', $key_personnel_id)
             ->update('tbl_key_personnel', $data);
  }

  function delete_key_personnel($delete_key_personnel_id)
    {
      $this->db->where('key_personnel_id', $delete_key_personnel_id)
                ->delete('tbl_key_personnel');
    }

     function save_product()
   {
    $hproduct_data['a_all_product']=$this->input->post('all_product');
     $this->db->insert('tbl_product', $hproduct_data);
   }

    function save_highlighted_product()
   {
    $hproduct_data['hproduct_name']=$this->input->post('hproduct_name', TRUE);
    $hproduct_data['hproduct_desc']=$this->input->post('hproduct_desc', TRUE);
     $this->db->insert('tbl_hproduct', $hproduct_data);
   }

function select_all_highlighted_product()
   {
      $result=$this->db->select('*')->from('tbl_hproduct')
                            ->get()
                            ->result();
                            return $result;
   }

   function delete_highlighted_product($delete_highlighted_product_id)
    {
      $this->db->where('hproduct_id', $delete_highlighted_product_id)
                ->delete('tbl_hproduct');
    }






}