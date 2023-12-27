
<div class="dashboard-wrapper">
<div class="main-container">
<div class="container-fluid">

					<!-- Spacer starts -->
					<div class="spacer-xs">
						<!-- Row start -->
			      <div class="row no-gutter">
			        <div class="col-md-12 col-sm-12 col-xs-12">
			          <div class="panel panel-default">
			            <div class="panel-heading">
										<h4>Edit Location</h4>
										<ul class="links">
											<li>
												<a href="javascript:window.history.go(-1);" title="back""> <i class="fa fa-fast-backward backicon" aria-hidden="true"></i></a>
											</li>
										</ul>
									</div>
			            <div class="panel-body">
			             <?php echo form_open_multipart("Locator/Edit/".$this->uri->segment(3));?>
			               
			                <div class="form-group">
			                  <label for="lab_name" class="required">Lab Name</label>
							  <input type="hidden" name="id" value="<?php echo md5($id);?>"></td>
			                  <input type="text" name="lab_name" class="form-control" id="lab_name" placeholder="Enter Your Lab Name" value="<?php echo $lab_name;?>">
							  <?php echo form_error('lab_name', '<div class="error">', '</div>'); ?>
			                </div>
							<div class="form-group">
			                  <label for="address" class="required">Address</label>
			                  <input type="text" name="address" class="form-control" id="address" placeholder="Enter Your Address" value="<?php echo $address;?>">
							  <?php echo form_error('address', '<div class="error">', '</div>'); ?>
			                </div>
							<div class="form-group">
			                  <label for="city" class="required">City</label>
			                  <input type="text" name="city" class="form-control" id="city" placeholder="Enter Your City" value="<?php echo $city;?>">
							  <?php echo form_error('city', '<div class="error">', '</div>'); ?>
			                </div>
							<div class="form-group">
			                  <label for="state" class="required">State</label>
			                  <input type="text" name="state" class="form-control" id="state" placeholder="Enter Your State" value="<?php echo $state;?>">
							  <?php echo form_error('state', '<div class="error">', '</div>'); ?>
			                </div>
							<div class="form-group">
			                  <label for="mobile_number" class="required">Mobile Number</label>
			                  <input type="text" name="mobile_number" class="form-control" id="mobile_number" placeholder="Enter Your Mobile No" value="<?php echo $mobile_number;?>">
							  <?php echo form_error('mobile_number', '<div class="error">', '</div>'); ?>
			                </div>
							<div class="form-group">
			                  <label for="timing" class="required">Timing</label>
			                  <input type="text" name="timing" class="form-control" id="timing" placeholder="Enter Your Timing" value="<?php echo $timing;?>">
							  <?php echo form_error('timing', '<div class="error">', '</div>'); ?>
			                </div>
							<div class="form-group">
			                  <label for="map_url" class="required">Map Url </label>
			                  <input type="text" name="map_url" class="form-control" id="map_url" placeholder="Enter Your Map Url" value="<?php echo $map_url;?>">
							  <?php echo form_error('map_url', '<div class="error">', '</div>'); ?>
			                </div>
							<div class="form-group">
			                  <label for="website_url" class="required">Website Url</label>
			                  <input type="text" name="website_url" class="form-control" id="website_url" placeholder="Enter Your Website Url" value="<?php echo $website_url;?>">
							  <?php echo form_error('website_url', '<div class="error">', '</div>'); ?>
			                </div>
			                <button type="submit" class="btn btn-success">Submit</button>
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
