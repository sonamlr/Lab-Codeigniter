
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
										<h4>Edit About </h4>
										<ul class="links">
											<li>
												<a href="javascript:window.history.go(-1);" title="back""> <i class="fa fa-fast-backward backicon" aria-hidden="true"></i></a>
											</li>
										</ul>
									</div>
			            <div class="panel-body">
			             <?php echo form_open_multipart("About/Edit/".$this->uri->segment(3));?>
			                <div class="form-group">
			                  <label for="title" class="required">Title</label>
							  <input type="hidden" name="id" value="<?php echo md5($id);?>">
			                  <input type="text" name="title" class="form-control" id="title" placeholder="Enter Your Title" value="<?php echo $title;?>">
			                </div>
			                <div class="form-group">
			                  <label for="description" class="required">Description</label>
			                  <input type="text" name="description" class="form-control" id="description" placeholder="Enter Your Description" value="<?php echo $description;?>">
							  <?php echo form_error('description', '<div class="error">', '</div>'); ?>
			                </div>
							<div class="form-group">
			                  <label for="missin" class="required">Mission</label>
			                  <input type="text" name="missin" class="form-control" id="missin" placeholder="Enter Your Mission" value="<?php echo $missin;?>">
							  <?php echo form_error('missin', '<div class="error">', '</div>'); ?>
			                </div>
							<div class="form-group">
			                  <label for="vision" class="required">vision</label>
			                  <input type="text" name="vision" class="form-control" id="vision" placeholder="Enter Your Vision" value="<?php echo $vision;?>">
							  <?php echo form_error('vision', '<div class="error">', '</div>'); ?>
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
