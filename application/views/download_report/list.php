<div class="dashboard-wrapper">
			<div class="main-container">
				<div class="top-bar clearfix">
					<div class="page-title">
						<h4><div class="fs1" aria-hidden="true" data-icon="&#xe007;"></div>Report Management</h4>
					</div>
					<ul class="right-stats hidden-xs" id="mini-nav-right">
						<!--<li class="reportrange btn btn-success">
							<i class="fa fa-calendar"></i>
							<span></span> <b class="caret"></b>
						</li>-->
						<li>
						<?php echo anchor("DownloadReport/Add/","<i class='fa fa-plus-circle' aria-hidden='true'> Report</i>",'class="btn btn-info sb-open-right  sb-close"');?>
						 
						</li>
					</ul>
				</div>  
				
				<div class="container-fluid">
					<div class="spacer-xs">
					<?php echo $this->session->flashdata('success');  ?>
			      <div class="row no-gutter">
			        <div class="col-md-12 col-sm-12 col-sx-12">
			          <div class="panel panel-default">
			            <div class="panel-heading">
										<h4>Table</h4>
										<ul class="links">
											<li>
												<a href="#">
													<i class="fa fa-table"></i>
												</a>
											</li>
										</ul>
									</div>
			            <div class="panel-body">
			              <div class="table-responsive">
			                <table class="table table-condensed table-striped table-bordered table-hover no-margin">
			                  <thead>
			                    <tr> 
								 <th>S.N.</th>
								<th>Mobile No</th>
								<th>Report</th>
								<th>Package</th>
								<th>Status</th>
								<th>Action</th>
			                    </tr>
			                  </thead>
			                  <tbody>
			                     <?php echo $list;?>
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





