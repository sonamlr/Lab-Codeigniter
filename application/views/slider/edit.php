
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
										<h4>Edit Slider</h4>
										<ul class="links">
											<li>
												<a href="javascript:window.history.go(-1);" title="back""> <i class="fa fa-fast-backward backicon" aria-hidden="true"></i></a>
											</li>
										</ul>
									</div>
			            <div class="panel-body">
			             <?php echo form_open_multipart("Slider/Edit/".$this->uri->segment(3));?>
			                <div class="form-group">
			                  <label for="image" class="required">Image(800x328) For Best Result</label>
							  <input type="hidden" name="id" value="<?php echo $id;?>"></td>
							   <img src='<?php echo base_url()."assets/img/slider/".$image;?>'>
			                  <input type="file" name="image" class="form-control" id="image" value="<?php echo $image;?>">
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