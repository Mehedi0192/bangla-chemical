
<div class="box-content">
<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Key Personnel</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
						
						<?php echo form_open_multipart('admin/save_key_personnel', 'class=form-horizontal'); ?>
						  <fieldset>&nbsp
							<div class="control-group">
							  <label class="control-label" for="typeahead"> Name </label>
							  <div class="controls">
								<input type="text" name="key_personnel_name" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" required>
							  </div>
							</div>

							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2"> Designation </label>
							  <div class="controls">
								<input type="text" name="key_personnel_designation" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" required>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="fileInput"> Email </label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" name="key_personnel_email" type="email">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="fileInput"> Contact No </label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" name="key_personnel_contact_one" type="text">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="fileInput"> Contact No </label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" name="key_personnel_contact_two" type="text">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="fileInput"> Image </label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" name="key_personnel_image" type="file">
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
