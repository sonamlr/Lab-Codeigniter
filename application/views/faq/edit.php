
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
						<h4>Edit FAQ</h4>
						<ul class="links">
							<li>
								<a href="javascript:window.history.go(-1);" title="back""> <i class="fa fa-fast-backward backicon" aria-hidden="true"></i></a>
							</li>
						</ul>
					</div>
		<div class="panel-body">
		 <?php echo form_open_multipart("Faq/Edit/".$this->uri->segment(3));?>
			<div class="form-group">
			  <label for="question" class="required">Question</label>
			  <input type="hidden" name="id" value="<?php echo md5($id);?>">
			  <input type="text" name="question" class="form-control" id="question" placeholder="Enter Your Question" value="<?php echo $question;?>">
			  <?php echo form_error('question', '<div class="error">', '</div>'); ?>
			</div>
			<div class="form-group">
			  <label for="answer" class="required">Answer</label>
			  <input type="text" name="answer" class="form-control" id="answer" placeholder="Enter Your Answer" value="<?php echo $answer;?>">
			  <?php echo form_error('answer', '<div class="error">', '</div>'); ?>
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
