
<div class="box-content">
<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Affiliated Companies</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
						
						<?php echo form_open_multipart('affiliated_companies/save_affiliated_companies', 'class=form-horizontal'); ?>
						  <fieldset>&nbsp
							<div class="control-group">
							  <label class="control-label" for="typeahead"> Name </label>
							  <div class="controls">
								<input type="text" name="affiliated_companies_name" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" required>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="fileInput"> Logo </label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" name="affiliated_companies_logo" type="file">
							  </div>
							</div>

							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2"> Short Description</label>
							  <div class="controls">
								<textarea class="cleditor" name="affiliated_companies_short_desc" id="textarea2" rows="3"></textarea>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="fileInput"> Company Web URL </label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" name="affiliated_companies_url" type="text">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="fileInput"> Upload PDF </label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" name="affiliated_companies_pdf" type="file">
							  </div>
							</div>							

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Save changes</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
					   <?php echo form_close()?> 

					</div>
				</div>
			</div>
