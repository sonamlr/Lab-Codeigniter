
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
										<h4>Edit Category</h4>
										<ul class="links">
											<li>
												<a href="javascript:window.history.go(-1);" title="back""> <i class="fa fa-fast-backward backicon" aria-hidden="true"></i></a>
											</li>
										</ul>
									</div>
			            <div class="panel-body">
							<?php echo form_open_multipart("Category/Edit/".$this->uri->segment(3));?>
								<div class="form-group">
								  <label for="image" class="required">Image(100x100px for best result)</label>
								  <input type="hidden" name="id" value="<?php echo $id;?>"></td>
								  <img src='<?php echo base_url()."assets/img/category/".$image;?>'>
								  <input type="file" name="image" class="form-control" id="image" value="<?php echo $image;?>">
								</div>
								<div class="form-group">
								  <label for="name" class="required">Category Name</label>
								  <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your Category Name"  value="<?php echo $name;?>">
								  <?php echo form_error('name', '<div class="error">', '</div>'); ?>
								</div>
								<div class="form-group">
								  <label for="description" class="required">description</label>
								  <input type="text" name="description" class="form-control" id="description" placeholder="Enter Your Description"  value="<?php echo $description;?>">
								  <?php echo form_error('description', '<div class="error">', '</div>'); ?>
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