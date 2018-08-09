<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>All Highlighted Product </h2>
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
							  	  <th>ID</th>
								  <th>Name</th>
								  <th>Details</th>
								  <th>Actions</th>
							  </tr>
							
						  </thead>   
						  <tbody>
                            <?php foreach($all_highlighted_product as $hproduct) { ?>
							<tr>
								<td><?php echo $hproduct->hproduct_id?></td>
								<td><?php echo $hproduct->hproduct_name?></td>
								<td><?php echo $hproduct->hproduct_desc?></td>
								<td>
								<a class="btn btn-danger" title="Delete" href="<?php echo base_url("delete-highlighted-product/$hproduct->hproduct_id")?>">
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