<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>All Books Info</h2>
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
								  <th>Books Title</th>
								  <th>Images</th>
								  <th>Actions</th>
							  </tr>
						  </thead> 

						  <tbody>
						  	<?php foreach($all_books_info as $books) {?>
						<tr>
							   <td><?php echo $books->books_id?></td>
							   <td class="center"><?php echo $books->books_title?></td>
							   <td><img src="<?php echo base_url().$books->books_image?>" width="100px" height="100px"></td>
								<!--<td class="center"><?php echo $news->news_events_desc?></td>-->
								<td class="center">
									<a class="btn btn-danger" href="<?php echo base_url("delete-books/$books->books_id")?>" title="delete">
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