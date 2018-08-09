<div class="box-content">
<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Works & Affiliation Form</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div><br>
						
						<?php echo form_open('books_article/save_works_affiliation', 'class=form-horizontal'); ?>
						  <fieldset>
							<div class="control-group">
								 <label class="control-label" for="fileInput">Title</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" name="works_affiliation_title" type="text">
							  </div><br>

							   <label class="control-label" for="fileInput">URL</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" name="works_affiliation_url" type="text">
							  </div>
							</div>

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary" onclick="myfunction()">Save Affiliation</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
					   <?php echo form_close()?> 

					</div>
				</div>
			</div>
			<<script>
				function myfunction()
				{
					alert('Info Saved Successfully');
				}
			</script>