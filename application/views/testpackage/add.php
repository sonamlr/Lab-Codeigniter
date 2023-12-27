
<div class="dashboard-wrapper">
<div class="main-container">
<div class="container-fluid">

					<!-- Spacer starts -->
					<div class="spacer-xs">
						<!-- Row start -->
			      <div class="row no-gutter">
			        <div class="col-12">
			          <div class="panel panel-default">
			            <div class="panel-heading">
										<h4>Add New Package</h4>
										<ul class="links">
											<li>
												<a href="javascript:window.history.go(-1);" title="back""> <i class="fa fa-fast-backward backicon" aria-hidden="true"></i></a>
											</li>
										</ul>
									</div>
			            <div class="panel-body">
			             <?php echo form_open_multipart("TestPackage/Add");?>
						 
			                <div class="form-group col-lg-4 col-md-12">
			                  <label for="test_name" class="required">Test Name</label>
			                  <input type="text" name="test_name" class="form-control" id="test_name" placeholder="Enter Your Package Name">
							  <?php echo form_error('test_name', '<div class="error">', '</div>'); ?>
			                </div> 
							<div class="form-group col-lg-4 col-md-12">
			                  <label for="no_of_parameter" class="required">No of Parameter</label>
			                  <input type="text" name="no_of_parameter" class="form-control" id="no_of_parameter" placeholder="Enter Your No of Parameter">
							  <?php echo form_error('no_of_parameter', '<div class="error">', '</div>'); ?>
			                </div>
							
							<div class="form-group col-lg-4 col-md-12">
			                  <label for="price" class="required">Price</label>
			                  <input type="text" name="price" class="form-control" id="price" placeholder="Enter Your Price">
							  <?php echo form_error('price', '<div class="error">', '</div>'); ?>
			                </div> 
							<br>
			                <div><button type="submit" class="btn btn-success">Submit</button></div>
			              </form>
			            </div>
			          </div>
			        </div>
			       
			      </div>
					</div>
					<!-- Spacer ends -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
					<script>
						function cat(a,b)
						{
							
							 id ="#description_"+b;
							if(a==null || a=="")
								{ 
									$(id).val("");
									$(id).prop("disabled", true);
									
									
								}
								else
								{ 
									$(id).prop("disabled", false);
								}  
						}
					</script>

				</div>
				</div>
				</div>
