<?php
defined('BASEPATH') OR exit('Who are You');

Class Archive_model extends CI_Model{

   function save_archive_info($archive_pdf)
    {
        //echo "<pre>";
        //print_r($archive_pdf);
        $data['archive_pdf']=$archive_pdf;
        $data['archive_name']=$this->input->post('archive_name', true);
        $this->db->insert('tbl_archive', $data);
    }

    function select_all_archive()
    {
      $result=$this->db->select('*')->from('tbl_archive')
                            ->get()
                            ->result();
                            return $result;
    }

    function delete_archive($delete_archive_id)
    {
      $this->db->where('archive_id', $delete_archive_id)
               ->delete('tbl_archive');
    }

}