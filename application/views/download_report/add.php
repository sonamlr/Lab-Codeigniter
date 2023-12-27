
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
										<h4>Add New Report</h4>
										<ul class="links">
											<li>
												<a href="javascript:window.history.go(-1);" title="back""> <i class="fa fa-fast-backward backicon" aria-hidden="true"></i></a>
											</li>
										</ul>
									</div>
			            <div class="panel-body">
			             <?php echo form_open_multipart("DownloadReport/Add");?>
						 
			                <div class="form-group col-lg-12 col-md-12">
			                  <label for="mobile" class="required">Mobile No.</label>
			                  <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Enter Your Mobile Number">
							  <?php echo form_error('mobile', '<div class="error">', '</div>'); ?>
			                </div>
							<div class="form-group col-lg-12 col-md-12">
			                  <label for="package" class="required">Package</label>
			                  <input type="text" name="package" class="form-control" id="package" placeholder="Enter Your Package Name">
							  <?php echo form_error('package', '<div class="error">', '</div>'); ?>
			                </div>
							 <div class="form-group">
			                  <label for="pdf" class="required">Upload Report</label>
			                  <input type="file" name="pdf" class="form-control" id="pdf">
			                </div>
							
			                <button type="submit" class="btn btn-success">Submit</button>
			              </form>
			            </div>
			          </div>
			        </div>
			       
			      </div>
					</div>

					

				</div>
				</div>
				</div>
