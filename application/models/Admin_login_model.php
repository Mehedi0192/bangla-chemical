<?php
defined('BASEPATH') OR exit('Who are You');

Class Admin_login_model extends CI_Model{

 public function get_user_detail($username)
 {
 	$result=$this->db->select('*')->from('tbl_admin')
 	                    ->where('username', $username)
 	                    ->get()
 	                    ->row();
 	                    return $result;
 }





}