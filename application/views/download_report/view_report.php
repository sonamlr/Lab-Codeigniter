<style>
	.hm-gradient {
    background-image: linear-gradient(to top, #f3e7e9 0%, #e3eeff 99%, #e3eeff 100%);
}
.darken-grey-text {
    color: #2E2E2E;
}
.input-group.md-form.form-sm.form-2 input {
    border: 1px solid #bdbdbd;
    border-top-left-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem;
}
.input-group.md-form.form-sm.form-2 input.purple-border {
    border: 1px solid #9e9e9e;
}
.input-group.md-form.form-sm.form-2 input[type=text]:focus:not([readonly]).purple-border {
    border: 1px solid #ba68c8;
    box-shadow: none;
}
.form-2 .input-group-addon {
    border: 1px solid #ba68c8;
}
.danger-text {
    color: #ff3547; 
}  
.success-text {
    color: #00C851; 
}
.table-bordered.red-border, .table-bordered.red-border th, .table-bordered.red-border td {
    border: 1px solid #ff3547!important;
}        
.table.table-bordered th {
    text-align: center;
}
.pack{
	background: #5dbeff;
	color:white;
    padding: 10px 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 100px;
}
</style>
 <div class="dashboard-wrapper">
	<div class="main-container">
		<div class="top-bar clearfix">
			<div class="page-title">
				<h4><div class="fs1" aria-hidden="true" data-icon="&#xe007;"></div>Report Details</h4>
			</div>
			<ul class="right-stats hidden-xs" id="mini-nav-right"></ul>
		</div>  
		<div class="container-fluid">
			<div class="spacer-xs"><!-- Row start -->
			      <div class="row no-gutter">
			        <div class="col-md-12 col-sm-12 col-sx-12">
			          <div class="panel panel-default">
			            <div class="panel-heading">
							<h4>Table</h4>
							<ul class="links">
								<li>
									<a href="javascript:window.history.go(-1);" title="back""> <i class="fa fa-fast-backward backicon" aria-hidden="true"></i></a>
								</li>
							</ul>
						</div>
					<div class="panel-body"> 
						  <div class="table-responsive" style="text-align: center;">
			                <table class="table table-condensed table-striped table-bordered table-hover no-margin">
							<a target="_blank">
			                 <img src="https://adminpathology.13solution.in/prescriptionpdf/<?php echo $pdf;?>">
			                </a>
							</table>
			              </div>
						
							</div>
					   </div>
					</div>
				  </div>
			</div>      
		</div>
	</div>				
</div>

