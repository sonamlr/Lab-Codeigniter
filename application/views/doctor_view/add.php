
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
										<h4>Add New Doctor</h4>
										<ul class="links">
											<li>
												<a href="javascript:window.history.go(-1);" title="back""> <i class="fa fa-fast-backward backicon" aria-hidden="true"></i></a>
											</li>
										</ul>
									</div>
			            <div class="panel-body">
			             <?php echo form_open_multipart("Doctor/Add");?>
						<!--	<div class="form-group">
			                  <label for="image" class="required">Image</label>
							  <img src='<?php echo base_url()."doctorimg/".$image;?>'>
			                  <input type="file" name="image" class="form-control" id="image" >
			                </div>-->
			                 <div class="form-group">
			                  <label for="description" class="required">Description</label>
			                  <textarea type="text" name="description" class="form-control ckeditor"      placeholder="Enter Your Description"></textarea>
							  <?php echo form_error('description', '<div class="error">', '</div>'); ?>
			                </div>
			                <div class="checkbox">
			                  <label>
			                    <input type="checkbox"> Check me out
			                  </label>
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

