
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
										<h4>Edit Report Details</h4>
										<ul class="links">
											<li>
												<a href="javascript:window.history.go(-1);" title="back""> <i class="fa fa-fast-backward backicon" aria-hidden="true"></i></a>
											</li>
										</ul>
									</div>
			            <div class="panel-body">
			             <?php echo form_open_multipart("DownloadReport/Edit/".$this->uri->segment(3));?>
						 
			                <div class="form-group">
			                  <label for="name" class="required">Mobile No</label>
							  <input type="hidden" name="id" value="<?php echo md5($id);?>"></td>
			                  <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Enter Your Mobile Number" value="<?php echo $mobile;?>">
							  <?php echo form_error('mobile', '<div class="error">', '</div>'); ?>
			                </div> 
							<div class="form-group">
			                  <label for="package" class="required">Package</label>
			                  <input type="text" name="package" class="form-control" id="package" placeholder="Enter Your Package Name" value="<?php echo $package;?>">
							  <?php echo form_error('package', '<div class="error">', '</div>'); ?>
			                </div>
							
							<div class="form-group">
			                  <label for="pdf" class="required">Upload Report</label>
							  <img src='<?php echo base_url()."assets/img/pdf/".$pdf;?>'>
			                  <input type="file" name="pdf" class="form-control" id="pdf" value="<?php echo $pdf;?>">
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