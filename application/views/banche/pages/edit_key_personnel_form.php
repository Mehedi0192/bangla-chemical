
<div class="box-content">
<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Update Key Personnel Info</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
						
						<?php echo form_open_multipart('admin/update_key_personnel', 'class="form-horizontal" name="edit_key_personnel" '); ?>
						  <fieldset>

							<div class="control-group">
							  <label class="control-label" for="typeahead"> Name </label>
							  <div class="controls">
								<input type="text" name="key_personnel_name" value="<?php echo $key_personnel_info->key_personnel_name ?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" required>

								<input type="hidden" name="key_personnel_id" value="<?php echo $key_personnel_info->key_personnel_id ?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" required>
								
							  </div>
							</div>

							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2"> Designation </label>
							  <div class="controls">
								<input type="text" name="key_personnel_designation" value="<?php echo $key_personnel_info->key_personnel_designation ?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" required>
							  </div>
							</div>

							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2"> Email </label>
							  <div class="controls">
								<input type="text" name="key_personnel_email" value="<?php echo $key_personnel_info->key_personnel_email ?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" required>
							  </div>
							</div>

							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2"> Contact No </label>
							  <div class="controls">
								<input type="text" name="key_personnel_contact_one" value="<?php echo $key_personnel_info->key_personnel_contact_one ?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" required>
							  </div>
							</div>
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2"> Contact No </label>
							  <div class="controls">
								<input type="text" name="key_personnel_contact_two" value="<?php echo $key_personnel_info->key_personnel_contact_two ?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" required>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="fileInput"> News/Events image</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" name="key_personnel_image" type="file">

								<input class="input-file uniform_on" id="fileInput" name="old_image" value="<?php echo $key_personnel_info->key_personnel_image?>" type="hidden">

								<img src="<?php echo base_url().$key_personnel_info->key_personnel_image?>" width="50" height="50" >
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

			<script>
				document.forms['edit_product'].elements['category_id'].value=<?php echo $product_info->category_id ?>;

				document.forms['edit_product'].elements['manufacturer_id'].value=<?php echo $product_info->manufacturer_id ?>

			</script>
