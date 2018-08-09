<div class="box-content">
<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Product Form</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div><br>
						
						<form action="save_product" method="post">
						  <fieldset>
							<div class="control-group">
								 <!--<label class="control-label" for="fileInput">Name</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" name="hproduct_name" type="text">
							  </div>--><br>

							   <label class="control-label" for="fileInput">Add your Product</label>
							  <div class="controls">
								<textarea class="cleditor" name="a_all_product" id="textarea2" rows="3"></textarea>
							  </div>
							</div>

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary" onclick="myfunction()">Save product</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
					   </form>

					</div>
				</div>
			</div>
			<script>
				function myfunction()
				{
					alert('Product Saved Successfully');
				}
			</script>