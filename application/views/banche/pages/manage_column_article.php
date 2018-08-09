<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>All Column & Article Info</h2>
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
								  <th> Title</th>
								  <th>Source</th>
								  <th>Media Link</th>
								  <th>Actions</th>
							  </tr>
						  </thead> 

						  <tbody>
						  	<?php foreach($all_column_article_info as $column_article) {?>
						<tr>
							   <td><?php echo $column_article->column_article_id?></td>
							   <td><?php echo $column_article->column_article_title?></td>
							   <td><?php echo $column_article->column_article_source?></td>
							   <td><?php echo $column_article->column_article_media_link?></td>
								<td class="center">
									<a class="btn btn-danger" href="<?php echo base_url("delete-column-article/$column_article->column_article_id")?>" title="delete">
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