
<div class="box-content">
<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Update News & Events</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
						
						<?php echo form_open_multipart('media/update_news_events', 'class="form-horizontal" name="edit_news_events" '); ?>
						  <fieldset>

							<div class="control-group">
							  <label class="control-label" for="typeahead">News/Events Title </label>
							  <div class="controls">
								<input type="text" name="news_events_title" value="<?php echo $news_events_info->news_events_title ?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" required>

								<input type="hidden" name="id" value="<?php echo $news_events_info->id ?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" required>
								
							  </div>
							</div>

							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">News/Events Description</label>
							  <div class="controls">
								<textarea class="cleditor" name="news_events_desc" id="textarea2" rows="3"><?php echo $news_events_info->news_events_desc ?></textarea>
							  </div>
							</div>


							<div class="control-group">
							  <label class="control-label" for="fileInput"> News/Events image</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" name="news_events_image" type="file">

								<input class="input-file uniform_on" id="fileInput" name="old_image" value="<?php echo $news_events_info->news_events_image?>" type="hidden">

								<img src="<?php echo base_url().$news_events_info->news_events_image?>" width="50" height="50" >
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="fileInput">Date</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" name="news_events_date" type="date">
							  </div>
							</div>


							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Update changes</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
					   <?php echo form_close()?> 

					</div>
				</div>
			</div>
