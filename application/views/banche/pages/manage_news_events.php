<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>All News</h2>
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
								  <th>News/Events Title</th>
								  <th>Type</th>
								  <th>Images</th>
								  <!--<th>Description</th>-->
								  <th>Actions</th>
							  </tr>
						  </thead> 

						  <tbody>
						  	<?php foreach($all_news_events as $news) {?>
						<tr>
							   <td><?php echo $news->id?></td>
							   <td class="center"><?php echo $news->news_events_title?></td>
							   <td><?php echo $news->news_events_type?></td>

							   <td><img src="<?php echo base_url().$news->news_events_image?>" width="100px" height="100px"></td>
								<!--<td class="center"><?php echo $news->news_events_desc?></td>-->
								<td class="center">
									<a class="btn btn-info" href="<?php echo base_url("edit-news-events/$news->id")?>" title="Edit">
										<i class="halflings-icon white edit"></i>   
									</a>
									<a class="btn btn-danger" href="<?php echo base_url("delete-news-events/$news->id")?>" title="delete">
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