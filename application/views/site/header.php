<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Admin Dashboard</title>
		<meta name="description" content="Pathology Admin Panel" />
		<meta name="keywords" content="Admin, Dashboard, Bootstrap3, Sass, transform, CSS3, HTML5, Web design, UI Design, Responsive Dashboard, Responsive Admin, Admin Theme, Best Admin UI, Bootstrap Theme, Bootstrap, Light weight Admin Dashboard,Light weight, Light weight Admin, Light weight Dashboard" />
		<meta name="author" content="Bootstrap Gallery" />
		<link rel="shortcut icon" href="<?php echo base_url();?>img/favicon.png">
		
		<!-- Bootstrap CSS -->
		<link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet" media="screen">

		<!-- Animate CSS -->
		<link href="<?php echo base_url();?>css/animate.css" rel="stylesheet" media="screen">

		<!-- date range -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/daterange.css">

		<!-- Main CSS -->
		<link href="<?php echo base_url();?>css/main.css" rel="stylesheet" media="screen">

		<!-- Slidebar CSS -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/slidebars.css">

		<!-- Font Awesome -->
		<link href="<?php echo base_url();?>fonts/font-awesome.min.css" rel="stylesheet">

		<!-- Metrize Fonts -->
		<link href="<?php echo base_url();?>fonts/metrize.css" rel="stylesheet">

		<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
			<script src="<?php echo base_url();?>ckeditor/ckeditor.js" type="text/javascript"></script>
	 
<style>

	.edit
	{
		color:green;
	}
	.delete
	{
		color:red;
	}
	.ifont
	{
		
	}
	.backicon
	{
		position:absolute;
		left: 95%;
		top: 35%;
		color:#53ace5;
	}
	.required::after 
	{
        content: ' *';
        color: red;
	}
	.error
	{
		color:red;
	}
	
	
</style>

	</head>  
<body> 
	<!-- Left sidebar start -->
		<aside id="sidebar"> 
			<!-- Logo starts -->
			<a href="#" class="logo">
				<img src="<?php echo base_url();?>img/logo.png" alt="logo" style="background-color:#fff;"> 
			</a> 
			<div id='menu'>
				<ul> 
				<?php 
							if($this->uri->segment(1)=="Category")
								{
									$class='class="highlight"';
								}
							else
								{
									$class='';
								}
						?>
					<li <?php echo $class;?>>
						
						<?php echo anchor("Category/","<i class='fa fa-th-large ifont' aria-hidden='true'>&nbsp;&nbsp;Category</i>")?>
					</li> 
					<?php 
							if($this->uri->segment(1)=="Package")
								{
									$class='class="highlight"';
								}
							else
								{
									$class='';
								}
						?>
					<li  <?php echo $class;?> >
						
						<?php echo anchor("Package/","<i class='fa fa-th-list ifont' aria-hidden='true'>&nbsp;&nbsp;Package</i>")?>
					</li>
					<?php 
							if($this->uri->segment(1)=="TestPackage")
								{
									$class='class="highlight"';
								}
							else
								{
									$class='';
								}
						?>
					<li  <?php echo $class;?> >
						
						<?php echo anchor("TestPackage/","<i class='fa fa-th-list ifont' aria-hidden='true'>&nbsp;&nbsp;Other Test</i>")?>
					</li>
						<?php 
							if($this->uri->segment(1)=="Locator")
								{
									$class='class="highlight"';
								}
							else
								{
									$class='';
								}
						?>
					<li  <?php echo $class;?> >
					
						<?php echo anchor("Locator/","<i class='fa fa-map-marker ifont' aria-hidden='true'>&nbsp;&nbsp;Adddress</i>")?>
					</li>
						<?php 
							if($this->uri->segment(1)=="Booking")
								{
									$class='class="highlight"';
								}
							else
								{
									$class='';
								}
						?>
					<li <?php echo $class;?> > 
						<?php echo anchor("Booking/","<i class='fa fa-clock-o ifont' aria-hidden='true'>&nbsp;&nbsp;Appointment</i>")?>
					</li>
					<?php 
							if($this->uri->segment(1)=="Testimonial")
								{
									$class='class="highlight"';
								}
							else
								{
									$class='';
								}
						?>
					<li <?php echo $class;?> > 
						<?php echo anchor("Testimonial/","<i class='fa fa-file-text-o ifont' aria-hidden='true'>&nbsp;&nbsp;Testimonial</i>")?>
					</li>
					<?php 
						if($this->uri->segment(1)=="Slider")
							{
								$class='class="highlight"';
							}
						else
							{
								$class='';
							}
					?>
					
					<li <?php echo $class;?> > 
						<?php echo anchor("Slider/","<i class='fa fa-image ifont' aria-hidden='true'>&nbsp;&nbsp;Slider</i>")?>
					</li>
					<?php 
						if($this->uri->segment(1)=="About")
							{
								$class='class="highlight"';
							}
						else
							{
								$class='';
							}
					?>
					<li <?php echo $class;?> > 
						<?php echo anchor("About/","<i class='fa fa-users ifont' aria-hidden='true'>&nbsp;&nbsp;About Us</i>")?>
					</li>
					<?php 
						if($this->uri->segment(1)=="Contact")
							{
								$class='class="highlight"';
							}
						else
							{
								$class='';
							}
					?>
					<li <?php echo $class;?> > 
						<?php echo anchor("Contact/","<i class='fa fa-phone ifont' aria-hidden='true'>&nbsp;&nbsp;Contact Us</i>")?>
					</li>
						<?php 
							if($this->uri->segment(1)=="Faq")
								{
									$class='class="highlight"';
								}
							else
								{
									$class='';
								}
						?>
					<li <?php echo $class;?>>
						
						<?php echo anchor("Faq/","<i class='fa fa-comments-o ifont' aria-hidden='true'>&nbsp;&nbsp;FAQ</i>")?>
					</li>
					<?php 
							if($this->uri->segment(1)=="PrivacyPolicy")
								{
									$class='class="highlight"';
								}
							else
								{
									$class='';
								}
						?>
					<li <?php echo $class;?>>
						
						<?php echo anchor("PrivacyPolicy/","<i class='fa fa-unlock-alt ifont' aria-hidden='true'>&nbsp;&nbsp;Privacy Policy</i>")?>
					</li>
					<?php 
						if($this->uri->segment(1)=="TermsCondition")
							{
								$class='class="highlight"';
							}
						else
							{
								$class='';
							}
					?>
					<li <?php echo $class;?>> 
						<?php echo anchor("TermsCondition/","<i class='fa fa-file-text ifont' aria-hidden='true'>&nbsp;&nbsp;Terms & Condition</i>")?>
					</li>
					<?php 
						if($this->uri->segment(1)=="Doctor")
							{
								$class='class="highlight"';
							}
						else
							{
								$class='';
							}
					?>
					<li <?php echo $class;?>> 
						<?php echo anchor("Doctor/","<i class='fa fa-file-text ifont' aria-hidden='true'>&nbsp;&nbsp;Doctor</i>")?>
					</li>
					<?php 
						if($this->uri->segment(1)=="DownloadReport")
							{
								$class='class="highlight"';
							}
						else
							{
								$class='';
							}
					?>
					<li <?php echo $class;?>> 
						<?php echo anchor("DownloadReport/","<i class='fa fa-file-text ifont' aria-hidden='true'>&nbsp;&nbsp;Download Report</i>")?>
					</li>	
					<?php 
						if($this->uri->segment(1)=="UploadPrescription")
							{
								$class='class="highlight"';
							}
						else
							{
								$class='';
							}
					?>
					<li <?php echo $class;?>> 
						<?php echo anchor("UploadPrescription/","<i class='fa fa-file-text ifont' aria-hidden='true'>&nbsp;&nbsp;Prescription</i>")?>
					</li>
					<?php 
						//if($this->uri->segment(1)=="Location")
							//{
								//$class='class="highlight"';
							//}
						//else
							//{
							//	$class='';
							//}
					//?>
					<!--<li <?php echo $class;?>> 
						<?php echo anchor("Location/","<i class='fa fa-file-text ifont' aria-hidden='true'>&nbsp;&nbsp;Location</i>")?>
					</li>-->
					
					<?php 
						if($this->uri->segment(1)=="Login")
							{
								$class='class="highlight"';
							}
						else
							{
								$class='';
							}
					?>
					<li <?php echo $class;?>>
						
						<?php echo anchor("Login/","<i class='fa fa-sign-out ifont' aria-hidden='true'>&nbsp;&nbsp;Logout</i>")?>
					</li>
					
					
					
				</ul>
			</div>
			<!-- Menu End -->

			<!-- Extras starts -->
			
			<!-- Extras ends -->

		</aside>
		<!-- Left sidebar end -->
		
		<header></header>
		