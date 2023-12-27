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
   
}
</style>
 <div class="dashboard-wrapper">
	<div class="main-container">
		<div class="top-bar clearfix">
			<div class="page-title">
				<h4><div class="fs1" aria-hidden="true" data-icon="&#xe007;"></div>Package Details</h4>
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
						  <div class="table-responsive">
			                <table class="table table-condensed table-striped table-bordered table-hover">
			                
			                    <tr> 
								<h4 class="pack" style="text-align: center;"><?php echo $name;?></h4>
								</tr><tr> 
								<th> Category Name</th>
								<th>Description</th>
								</tr>
			                
			              
							  <tr>
								<th><?php echo $cat1_name;?></th>
								<td><?php echo $description_1;?></td>
							  </tr>
							  <tr>
								<th><?php echo $cat2_name;?></th>
								<td><?php echo $description_2;?></td>
							  </tr>
							  <tr>
								<th><?php echo $cat3_name;?></th>
								<td><?php echo $description_3;?></td>
							  </tr>
							  <tr>
								<th><?php echo $cat4_name;?></th>
								<td><?php echo $description_4;?></td>
							  </tr>
							  <tr>
								<th><?php echo $cat5_name;?></th>
								<td><?php echo $description_5;?></td>
							  </tr>
							  <tr>
								<th><?php echo $cat6_name;?></th>
								<td><?php echo $description_6;?></td>
							  </tr>
							  <tr>
								<th><?php echo $cat7_name;?></th>
								<td><?php echo $description_7;?></td>
							  </tr>
							  <tr>
								<th><?php echo $cat8_name;?></th>
								<td><?php echo $description_8;?></td>
							  </tr>
							  <tr>
								<th><?php echo $cat8_name;?></th>
								<td><?php echo $description_9;?></td>
							  </tr>
							  <tr>
								<th><?php echo $cat10_name;?></th>
								<td><?php echo $description_10;?></td>
							  </tr>
						
			                </table>
			              </div>
						  <hr>
						  <div class="table-responsive">
			                <table class="table table-condensed table-striped table-bordered table-hover no-margin">
			                  <thead><tr> 
								<th>Specimen</th>
								<th>Description</th>
								<th>Report Time</th>
								</tr>
			                  </thead>
			                  <tbody>
							  <tr>
								<th><?php echo $specimen;?></th>
								<td><?php echo $description;?></td>
								<th><?php echo $report_time;?></th>
							  </tr>
							</tbody>
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

