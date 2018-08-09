
<div class="box-content">
<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Published Books</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
						
						<?php echo form_open_multipart('books_article/save_books', 'class=form-horizontal'); ?>
						  <fieldset>&nbsp
							<div class="control-group">
							  <label class="control-label" for="typeahead"> Books Title </label>
							  <div class="controls">
								<input type="text" name="books_title" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" required>
							  </div>
							</div>

							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Books Description</label>
							  <div class="controls">
								<textarea class="cleditor" name="books_desc" id="textarea2" rows="3"></textarea>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="fileInput">Cover image</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" name="books_image" type="file">
							  </div>
							</div>
							<!--<div class="control-group">
							  <label class="control-label" for="fileInput">Date</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" name="news_events_date" type="date">
							  </div>
							</div>-->

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Save Books</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
					   <?php echo form_close()?> 

					</div>
				</div>
			</div>
