
 <div class="dashboard-wrapper">
		
			<!-- Main Container Start -->
			<div class="main-container">
				<!-- Top Bar Starts -->
				<div class="top-bar clearfix">
					<div class="page-title">
						<h4><div class="fs1" aria-hidden="true" data-icon="&#xe007;"></div>Terms & Condition Management</h4>
					</div>
					
					<ul class="right-stats hidden-xs" id="mini-nav-right">
						<li> 
						</li>
					</ul>
				</div>  
				
				<div class="container-fluid">

					<!-- Spacer starts -->
					<div class="spacer-xs">
					<?php echo $this->session->flashdata('success');  ?>
						<!-- Row start -->
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
									<th>Description</th>
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
			      <!-- Row end --> 
			      </div>
			      <!-- Row end -->

					</div>
					<!-- Spacer ends -->

				</div>
				
				
				
			</div> 
			
		</div> 



