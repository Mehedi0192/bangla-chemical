<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>All Affiliated Companies</h2>
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
								  <th>Logo</th>
								  <th>Website</th>
								  <th>Action</th>
							  </tr>
						  </thead> 

						  <tbody>
						  	<?php foreach($all_affiliated_companies as $affiliated_companies) { ?>
						<tr>
							   <td><?php echo $affiliated_companies->affiliated_companies_name?></td>
							    <td><img src="<?php echo base_url().$affiliated_companies->affiliated_companies_logo?>" width="100px" height="100px"></td>
							   <td class="center"><?php echo $affiliated_companies->affiliated_companies_url?></td>
								<td class="center">
									<a class="btn btn-danger" href="<?php echo base_url("delete-affiliated-companies/$affiliated_companies->affiliated_companies_id")?>" title="delete">
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