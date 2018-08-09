<?php defined('BASEPATH') OR exit('Who are you!');

Class Ajaxsearch extends CI_Controller{

	function index()
	{

	}

	function fetch()
	{
		$output='';
		$query='';
		$this->load->model('ajaxsearch_model');
		if($this->input->post('query'))
		{
			$query=$this->input->post('query');
		}
		$all_customer=$this->ajaxsearch_model->fetch_data($query);
		$output .='
		<div class="table-responsive">
       <table class="table table-bordered table-striped">
      <tr>
       <th>Customer Name</th>
       <th>Address</th>
       <th>City</th>
       <th>Postal Code</th>
       <th>Country</th>
      </tr>';

      if($all_customer->num_rows() > 0)
      {
      	foreach($all_customer as $customer)
      	{
      		$output .='
      		<tr>
      		<td>'.$customer->Customer_name.'</td>
      		<td>'.$customer->Address.'</td>
      		<td>'.$customer->City.'</td>
      		<td>'.$customer->PostalCode.'</td>
      		<td>'.$customer->Country.'</td>
      		</tr>
      		';
      	}
      }
      else {
      	$output .='<tr>
       <td colspan="5">No Data Found</td>
      </tr>';
      }
      $output .='</table>';
      echo $output;
	}













} 