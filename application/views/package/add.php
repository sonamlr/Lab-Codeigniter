
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
			             <?php echo form_open_multipart("Package/Add");?>
						 
			                <div class="form-group col-lg-12 col-md-12">
			                  <label for="name" class="required">Package Name</label>
			                  <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your Package Name">
							  <?php echo form_error('name', '<div class="error">', '</div>'); ?>
			                </div>
							 <div class="form-group">
			                  <label for="image" class="required">Image(800x500px for best result)</label>
			                  <input type="file" name="image" class="form-control" id="image">
			                </div>
							
							<div class="form-group col-lg-6 col-md-12">
							<label>Category Name 1</label>
							<select name='category_id_1' class="form-control" onchange="cat(this.value,1)">
							<option value=''>Select Your Category</option>
							<?php echo $catlist;?>
							</select>
							<?php echo form_error('name', '<div class="error">', '</div>'); ?>
			                </div>
							<div class="form-group col-lg-6 col-md-12">
			                  <label for="name">Description 1</label>
			                  <input type="text" name="description_1" class="form-control" id="description_1" placeholder="Enter Your Description " disabled>
							 </div>
							
							<div class="form-group col-lg-6 col-md-12">
							<label>Category Name 2</label>
							<select name='category_id_2' class="form-control"  onchange="cat(this.value , 2)">
							<option value=''>Select Your Category</option>
							<?php echo $catlist;?>
							</select>
			                </div>
							<div class="form-group col-lg-6 col-md-12">
			                  <label for="name">Description 2</label>
			                  <input type="text" name="description_2" class="form-control" id="description_2" placeholder="Enter Your Description " disabled>
							 </div>
							 
							 <div class="form-group col-lg-6 col-md-12">
							<label>Category Name 3</label>
							<select name='category_id_3' class="form-control"  onchange="cat(this.value , 3)">
							<option value=''>Select Your Category</option>
							<?php echo $catlist;?>
							</select>
			                </div>
							<div class="form-group col-lg-6 col-md-12">
			                  <label for="name" class="">Description 3</label>
			                  <input type="text" name="description_3" class="form-control" id="description_3" placeholder="Enter Your Description " disabled>
							 </div>
							 
							 <div class="form-group col-lg-6 col-md-12">
							<label class="">Category Name 4</label>
							<select name='category_id_4' class="form-control" onchange="cat(this.value , 4)">
							<option value=''>Select Your Category</option>
							<?php echo $catlist;?>
							</select>
			                </div>
							<div class="form-group col-lg-6 col-md-12">
			                  <label for="name" class="">Description 4</label>
			                  <input type="text" name="description_4" class="form-control" id="description_4" placeholder="Enter Your Description " disabled>
							 </div>
							 
							 <div class="form-group col-lg-6 col-md-12">
							<label class="">Category Name 5</label>
							<select name='category_id_5' class="form-control" onchange="cat(this.value , 5)">
							<option value=''>Select Your Category</option>
							<?php echo $catlist;?>
							</select>
			                </div>
							<div class="form-group col-lg-6 col-md-12">
			                  <label for="name" class="">Description 5</label>
			                  <input type="text" name="description_5" class="form-control" id="description_5" placeholder="Enter Your Description " disabled>
							 </div>
							 
							 <div class="form-group col-lg-6 col-md-12">
							<label class="">Category Name 6</label>
							<select name='category_id_6' class="form-control" onchange="cat(this.value , 6)">
							<option value=''>Select Your Category</option>
							<?php echo $catlist;?>
							</select>
			                </div>
							<div class="form-group col-lg-6 col-md-12">
			                  <label for="name" class="">Description 6</label>
			                  <input type="text" name="description_6" class="form-control" id="description_6" placeholder="Enter Your Description " disabled>
							 </div>
							 
							 <div class="form-group col-lg-6 col-md-12">
							<label class="">Category Name 7</label>
							<select name='category_id_7' class="form-control" onchange="cat(this.value , 7)">
							<option value=''>Select Your Category</option>
							<?php echo $catlist;?>
							</select>
			                </div>
							<div class="form-group col-lg-6 col-md-12">
			                  <label for="name" class="">Description 7</label>
			                  <input type="text" name="description_7" class="form-control" id="description_7" placeholder="Enter Your Description " disabled>
							 </div>
							 
							 <div class="form-group col-lg-6 col-md-12">
							<label class="">Category Name 8</label>
							<select name='category_id_8' class="form-control" onchange="cat(this.value , 8)">
							<option value=''>Select Your Category</option>
							<?php echo $catlist;?>
							</select>
			                </div>
							<div class="form-group col-lg-6 col-md-12">
			                  <label for="name" class="">Description 8</label>
			                  <input type="text" name="description_8" class="form-control" id="description_8" placeholder="Enter Your Description " disabled>
							 </div>
							 
							 <div class="form-group col-lg-6 col-md-12">
							<label class="">Category Name 9</label>
							<select name='category_id_9' class="form-control" onchange="cat(this.value , 9)">
							<option value=''>Select Your Category</option>
							<?php echo $catlist;?>
							</select>
			                </div>
							<div class="form-group col-lg-6 col-md-12">
			                  <label for="name" class="">Description 9</label>
			                  <input type="text" name="description_9" class="form-control" id="description_9" placeholder="Enter Your Description " disabled>
							 </div>
							 
							<div class="form-group col-lg-6 col-md-12">
							<label class="">Category Name 10</label>
							<select name='category_id_10' class="form-control" onchange="cat(this.value , 10)">
							<option value=''>Select Your Category</option>
							<?php echo $catlist;?>
							</select>
			                </div>
							<div class="form-group col-lg-6 col-md-12">
			                  <label for="name" class="">Description 10</label>
			                  <input type="text" name="description_10" class="form-control" id="description_10" placeholder="Enter Your Description " disabled>
							 </div>
							
							<div class="form-group col-lg-6 col-md-12">
			                  <label for="price" class="required">Price</label>
			                  <input type="text" name="price" class="form-control" id="price" placeholder="Enter Your Price">
							  <?php echo form_error('price', '<div class="error">', '</div>'); ?>
			                </div> 
							
							<div class="form-group col-lg-6 col-md-12">
			                  <label for="offer_price" class="required">Offer Price</label>
			                  <input type="text" name="offer_price" class="form-control" id="offer_price" placeholder="Enter Your Offer Price">
							  <?php echo form_error('offer_price', '<div class="error">', '</div>'); ?>
			                </div>
							
							<div class="form-group col-lg-6 col-md-12">
			                  <label for="specimen" class="required">Specimen</label>
			                  <input type="text" name="specimen" class="form-control" id="specimen" placeholder="Enter Your Specimen">
							  <?php echo form_error('specimen', '<div class="error">', '</div>'); ?>
			                </div>
							
							<div class="form-group col-lg-6 col-md-12">
			                  <label for="report_time" class="required">Report Time</label>
			                  <input type="text" name="report_time" class="form-control" id="report_time" placeholder="Enter Your Report Time">
							  <?php echo form_error('report_time', '<div class="error">', '</div>'); ?>
			                </div> 
							
							<div class="form-group">
			                  <label for="description" class="required">Description</label>
			                  <input type="text" name="description" class="form-control" id="description" placeholder="Enter Your Description">
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
