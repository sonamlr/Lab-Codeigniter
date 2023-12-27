
<div class="dashboard-wrapper">
<div class="main-container">
<div class="container-fluid">

					<!-- Spacer starts -->
					<div class="spacer-xs">
						<!-- Row start -->
			      <div class="row no-gutter">
			        <div class="">
			          <div class="panel panel-default">
			            <div class="panel-heading">
										<h4>Edit Test </h4>
										<ul class="links">
											<li>
												<a href="javascript:window.history.go(-1);" title="back""> <i class="fa fa-fast-backward backicon" aria-hidden="true"></i></a>
											</li>
										</ul>
									</div>
			            <div class="panel-body">
			             <?php echo form_open_multipart("TestPackage/Edit/".$this->uri->segment(3));?>
						 
			                <div class="form-group col-lg-4 col-md-12">
			                  <label for="test_name" class="required">Test Name</label>
			                  
							  <input type="hidden" name="id" value="<?php echo md5($id);?>"></td>
							  <input type="text" name="test_name" class="form-control" id="test_name" placeholder="Enter Your Package Name" value="<?php echo $test_name;?>">
							  <?php echo form_error('test_name', '<div class="error">', '</div>'); ?>
			                </div>
							
							<div class="form-group col-lg-4 col-md-12">
			                  <label for="no_of_parameter" class="required">Package Name</label>
			                  <input type="text" name="no_of_parameter" class="form-control" id="no_of_parameter" placeholder="Enter Your No of Parameter" value="<?php echo $no_of_parameter;?>">
							  <?php echo form_error('no_of_parameter', '<div class="error">', '</div>'); ?>
			                </div>
							
							<div class="form-group col-lg-4 col-md-12">
			                  <label for="price" class="required">Price</label>
			                  <input type="text" name="price" class="form-control" id="price" placeholder="Enter Your Price" value="<?php echo $price;?>">
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

				</div>
				</div>
				</div>