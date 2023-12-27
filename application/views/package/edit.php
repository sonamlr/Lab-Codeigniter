
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
										<h4>Edit Package</h4>
										<ul class="links">
											<li>
												<a href="javascript:window.history.go(-1);" title="back""> <i class="fa fa-fast-backward backicon" aria-hidden="true"></i></a>
											</li>
										</ul>
									</div>
			            <div class="panel-body">
			             <?php echo form_open_multipart("Package/Edit/".$this->uri->segment(3));?>
						 
			                <div class="form-group">
			                  <label for="name" class="required">Package Name</label>
			                  <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your Package Name" value="<?php echo $name;?>">
							  <?php echo form_error('name', '<div class="error">', '</div>'); ?>
			                </div>
							
							<div class="form-group">
			                  <label for="image" class="required">Image(800x500px for best result)</label>
							  <input type="hidden" name="id" value="<?php echo $id;?>"></td>
							  <img src='<?php echo base_url()."assets/img/package/".$image;?>'>
			                  <input type="file" name="image" class="form-control" id="image" value="<?php echo $image;?>">
			                </div>
							
							<div class="form-group col-lg-6 col-md-12">
								<label class="">Category Name 1</label>
								<select name='category_id_1' class="form-control">
									<option value=''>Select Your Category</option>
									<?php 
										$cat =  $this->db->get('tb_category');
										foreach($cat->result_array() as $v)
											{
												if($v['id']==$category_id)
													{
														$sel='selected';
													}
												else
													{
														$sel='';
													} 
											?>
												<option value='<?php echo $v['id'];?>' <?php echo $sel;?>><?php echo $v['name'];?></option>
											<?php
											}
											?>
								</select>
								<?php echo form_error('name', '<div class="error">', '</div>'); ?>
			                </div>
							<div class="form-group col-lg-6 col-md-12">
			                  <label for="name" class="">Description 1</label>
			                  <input type="text" value="<?php echo $description_1;?>" name="description_1" class="form-control" id="description_1" placeholder="Enter Your Description ">
							</div>
							<div class="form-group col-lg-6 col-md-12">
								<label class="">Category Name 2</label>
								<select name='category_id_2' class="form-control">
									<?php 
										$cat =  $this->db->get('tb_category');
										foreach($cat->result_array() as $v)
											{
												if($v['id']==$category_id_2)
													{
														$sel='selected';
													}
												else
													{
														$sel='';
													} 
											?>
												<option value='<?php echo $v['id'];?>' <?php echo $sel;?>><?php echo $v['name'];?></option>
											<?php
											}
											?>
								</select>
			                </div>
							<div class="form-group col-lg-6 col-md-12">
			                  <label for="name" class="">Description 2</label>
			                  <input type="text" value="<?php echo $description_2;?>" name="description_2"  class="form-control" id="description_2" placeholder="Enter Your Description ">
							</div> 
							<div class="form-group col-lg-6 col-md-12">
							<label class="">Category Name 3</label>
							<select name='category_id_3' class="form-control">
							<option value=''>Select Your Category</option>
									<?php 
										$cat =  $this->db->get('tb_category');
										foreach($cat->result_array() as $v)
											{
												if($v['id']==$category_id_3)
													{
														$sel='selected';
													}
												else
													{
														$sel='';
													} 
											?>
												<option value='<?php echo $v['id'];?>' <?php echo $sel;?>><?php echo $v['name'];?></option>
									<?php
										}
									?>
							</select>
			                </div>
							<div class="form-group col-lg-6 col-md-12">
			                  <label for="name" class="">Description 3</label>
			                  <input type="text" value="<?php echo $description_3;?>" name="description_3"  class="form-control" id="description_3" placeholder="Enter Your Description ">
							 </div>
							 
							 <div class="form-group col-lg-6 col-md-12">
							<label class="">Category Name 4</label>
							<select name='category_id_4' class="form-control">
							<option value=''>Select Your Category</option>
								<?php 
										$cat =  $this->db->get('tb_category');
										foreach($cat->result_array() as $v)
											{
												if($v['id']==$category_id_4)
													{
														$sel='selected';
													}
												else
													{
														$sel='';
													} 
											?>
												<option value='<?php echo $v['id'];?>' <?php echo $sel;?>><?php echo $v['name'];?></option>
									<?php
										}
									?>
							</select>
			                </div>
							<div class="form-group col-lg-6 col-md-12">
			                  <label for="name" class="">Description 4</label>
			                  <input type="text" value="<?php echo $description_4;?>" name="description_4"  class="form-control" id="description_4" placeholder="Enter Your Description ">
							</div> 
							<div class="form-group col-lg-6 col-md-12">
								<label class="">Category Name 5</label>
								<select name='category_id_5' class="form-control">
								<option value=''>Select Your Category</option>
									<?php 
										$cat =  $this->db->get('tb_category');
										foreach($cat->result_array() as $v)
											{
												if($v['id']==$category_id_5)
													{
														$sel='selected';
													}
												else
													{
														$sel='';
													} 
											?>
												<option value='<?php echo $v['id'];?>' <?php echo $sel;?>><?php echo $v['name'];?></option>
									<?php
										}
									?>
								</select>
			                </div>
							<div class="form-group col-lg-6 col-md-12">
			                  <label for="name" class="">Description 5</label>
			                  <input type="text" value="<?php echo $description_5;?>" name="description_5"   class="form-control" id="description_5" placeholder="Enter Your Description ">
							 </div>
							 
							 <div class="form-group col-lg-6 col-md-12">
							<label class="">Category Name 6</label>
							<select name='category_id_6' class="form-control">
							<option value=''>Select Your Category</option>
									<?php 
										$cat =  $this->db->get('tb_category');
										foreach($cat->result_array() as $v)
											{
												if($v['id']==$category_id_6)
													{
														$sel='selected';
													}
												else
													{
														$sel='';
													} 
											?>
												<option value='<?php echo $v['id'];?>' <?php echo $sel;?>><?php echo $v['name'];?></option>
									<?php
										}
									?>
							</select>
			                </div>
							<div class="form-group col-lg-6 col-md-12">
			                  <label for="name" class="">Description 6</label>
			                  <input type="text"  value="<?php echo $description_6;?>" name="description_6" class="form-control" id="description_6" placeholder="Enter Your Description ">
							 </div>
							 
							 <div class="form-group col-lg-6 col-md-12">
							<label class="">Category Name 7</label>
							<select name='category_id_7' class="form-control">
							<option value=''>Select Your Category</option>
									<?php 
										$cat =  $this->db->get('tb_category');
										foreach($cat->result_array() as $v)
											{
												if($v['id']==$category_id_7)
													{
														$sel='selected';
													}
												else
													{
														$sel='';
													} 
											?>
												<option value='<?php echo $v['id'];?>' <?php echo $sel;?>><?php echo $v['name'];?></option>
									<?php
										}
									?>
							</select>
			                </div>
							<div class="form-group col-lg-6 col-md-12">
			                  <label for="name" class="">Description 7</label>
			                  <input type="text"  value="<?php echo $description_7;?>" name="description_7"  class="form-control" id="description_7" placeholder="Enter Your Description ">
							 </div>
							 
							 <div class="form-group col-lg-6 col-md-12">
							<label class="">Category Name 8</label>
							<select name='category_id_8' class="form-control">
							<option value=''>Select Your Category</option>
									<?php 
										$cat =  $this->db->get('tb_category');
										foreach($cat->result_array() as $v)
											{
												if($v['id']==$category_id_8)
													{
														$sel='selected';
													}
												else
													{
														$sel='';
													} 
											?>
												<option value='<?php echo $v['id'];?>' <?php echo $sel;?>><?php echo $v['name'];?></option>
									<?php
										}
									?>
							</select>
			                </div>
							<div class="form-group col-lg-6 col-md-12">
			                  <label for="name" class="">Description 8</label>
			                  <input type="text" value="<?php echo $description_8;?>" name="description_8" class="form-control" id="description_8" placeholder="Enter Your Description ">
							 </div>
							 
							 <div class="form-group col-lg-6 col-md-12">
							<label class="">Category Name 9</label>
							<select name='category_id_9' class="form-control">
							<option value=''>Select Your Category</option>
								<?php 
										$cat =  $this->db->get('tb_category');
										foreach($cat->result_array() as $v)
											{
												if($v['id']==$category_id_9)
													{
														$sel='selected';
													}
												else
													{
														$sel='';
													} 
											?>
												<option value='<?php echo $v['id'];?>' <?php echo $sel;?>><?php echo $v['name'];?></option>
									<?php
										}
									?>
							</select>
			                </div>
							<div class="form-group col-lg-6 col-md-12">
			                  <label for="name" class="">Description 9</label>
			                  <input type="text"  value="<?php echo $description_9;?>" name="description_9"  class="form-control" id="description_9" placeholder="Enter Your Description ">
							 </div>
							 
							<div class="form-group col-lg-6 col-md-12">
							<label class="">Category Name 10</label>
							<select name='category_id_10' class="form-control">
							<option value=''>Select Your Category</option>
									<?php 
										$cat =  $this->db->get('tb_category');
										foreach($cat->result_array() as $v)
											{
												if($v['id']==$category_id_10)
													{
														$sel='selected';
													}
												else
													{
														$sel='';
													} 
											?>
												<option value='<?php echo $v['id'];?>' <?php echo $sel;?>><?php echo $v['name'];?></option>
									<?php
										}
									?>
							</select>
			                </div>
							<div class="form-group col-lg-6 col-md-12">
			                  <label for="name" class="">Description 10</label>
			                  <input type="text"  value="<?php echo $description_10;?>" name="description_10" class="form-control" id="description_10" placeholder="Enter Your Description ">
							 </div>
							
							<div class="form-group col-lg-6 col-md-12">
			                  <label for="price" class="required">Price</label>
			                  <input type="text" name="price" class="form-control" id="price" placeholder="Enter Your Price" value="<?php echo $price;?>">
							  <?php echo form_error('price', '<div class="error">', '</div>'); ?>
			                </div> 
							<div class="form-group col-lg-6 col-md-12">
			                  <label for="offer_price" class="required">Offer Price</label>
			                  <input type="text" name="offer_price" class="form-control" id="offer_price" placeholder="Enter Your Offer Price" value="<?php echo $offer_price;?>">
							  <?php echo form_error('offer_price', '<div class="error">', '</div>'); ?>
			                </div>
							
							<div class="form-group col-lg-6 col-md-12">
			                  <label for="specimen" class="required">Specimen</label>
			                  <input type="text" name="specimen" class="form-control" id="specimen" placeholder="Enter Your Specimen" value="<?php echo $specimen;?>">
							  <?php echo form_error('specimen', '<div class="error">', '</div>'); ?>
			                </div>
							<div class="form-group col-lg-6 col-md-12">
			                  <label for="report_time" class="required">Report Time</label>
			                  <input type="text" name="report_time" class="form-control" id="report_time" placeholder="Enter Your Report Time " value="<?php echo $report_time;?>">
							  <?php echo form_error('report_time', '<div class="error">', '</div>'); ?>
			                </div>
							
							<div class="form-group">
			                  <label for="description" class="required">Description</label>
			                  <input type="text" name="description" class="form-control" id="description" placeholder="Enter Your Description" value="<?php echo $description;?>">
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