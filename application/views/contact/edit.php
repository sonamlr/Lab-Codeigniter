
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
						<h4>Edit Contact</h4>
						<ul class="links">
							<li>
								<a href="javascript:window.history.go(-1);" title="back""> <i class="fa fa-fast-backward backicon" aria-hidden="true"></i></a>
							</li>
						</ul>
					</div>
		<div class="panel-body">
		 <?php echo form_open_multipart("Contact/Edit/".$this->uri->segment(3));?>
			
			<div class="form-group">
			  <label for="mobile" class="required">Mobile No</label>
			  <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Enter Your Mobile No" value="<?php echo $mobile;?>">
			  <input type="hidden" name="id" class="form-control" id="id"   value="<?php echo md5($id);?>">
			  <?php echo form_error('mobile', '<div class="error">', '</div>'); ?>
			</div>
			<div class="form-group">
			  <label for="email" class="required">Email</label>
			  <input type="text" name="email" class="form-control" id="email" placeholder="Enter Your Email" value="<?php echo $email;?>">
			  <?php echo form_error('email', '<div class="error">', '</div>'); ?>
			</div>
			<div class="form-group">
			  <label for="address" class="required">Address</label>
			  <input type="text" name="address" class="form-control" id="address" placeholder="Enter Your Address " value="<?php echo $address;?>">
			  <?php echo form_error('address', '<div class="error">', '</div>'); ?>
			</div>
			<div class="form-group">
			  <label for="facebook_link" class="required">Facebook Link</label>
			  <input type="text" name="facebook_link" class="form-control" id="facebook_link" placeholder="Enter Your Facebook Link" value="<?php echo $facebook_link;?>">
			  <?php echo form_error('facebook_link', '<div class="error">', '</div>'); ?>
			</div>
			<div class="form-group">
			  <label for="instagram_link" class="required">Instagram Link</label>
			  <input type="text" name="instagram_link" class="form-control" id="instagram_link" placeholder="Enter Your Instagram Link" value="<?php echo $instagram_link;?>">
			  <?php echo form_error('instagram_link', '<div class="error">', '</div>'); ?>
			</div>
			<div class="form-group">
			  <label for="twitter_link" class="required">Twitter Link</label>
			  <input type="text" name="twitter_link" class="form-control" id="twitter_link" placeholder="Enter Your Twitter Link" value="<?php echo $twitter_link;?>">
			  <?php echo form_error('twitter_link', '<div class="error">', '</div>'); ?>
			</div>
			<div class="form-group">
			  <label for="linkedin_link" class="required">Linkedin Link</label>
			  <input type="text" name="linkedin_link" class="form-control" id="linkedin_link" placeholder="Enter Your Linkedin Link" value="<?php echo $linkedin_link;?>">
			  <?php echo form_error('linkedin_link', '<div class="error">', '</div>'); ?>
			</div>
			<div class="form-group">
			  <label for="youtube_link" class="required">YouTube Link</label>
			  <input type="text" name="youtube_link" class="form-control" id="youtube_link" placeholder="Enter Your YouTube Link" value="<?php echo $youtube_link;?>"
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