<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>All Key Personnel</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Name</th>
								  <th>Designation</th>
								  <th>Image</th>
								  <th>Action</th>
							  </tr>
						  </thead> 

						  <tbody>
						  	<?php foreach($all_key_personnel as $personnel) { ?>
						<tr>
							   <td><?php echo $personnel->key_personnel_name?></td>
							   <td class="center"><?php echo $personnel->key_personnel_designation?></td>
							   <td><img src="<?php echo base_url().$personnel->key_personnel_image?>" width="100px" height="100px"></td>
								<td class="center">
									<a class="btn btn-info" href="<?php echo base_url("edit-key-personnel/$personnel->key_personnel_id")?>" title="Edit">
										<i class="halflings-icon white edit"></i>   
									</a>
									<a class="btn btn-danger" href="<?php echo base_url("delete-key-personnel/$personnel->key_personnel_id")?>" title="delete">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>

							</tr>
								<?php } ?>
							

						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			</div><!--/row-->