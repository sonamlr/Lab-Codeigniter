<style>
.maincol{
	display:flex;
	gap:10px;
}
</style>
 <div class="dashboard-wrapper">

			<!-- Main Container Start -->
			<div class="main-container">

				<!-- Top Bar Starts -->
				<div class="top-bar clearfix">
					<div class="page-title">
						<h4><div class="fs1" aria-hidden="true" data-icon="&#xe007;"></div>Appointment Management</h4>
					</div>
					<ul class="right-stats hidden-xs" id="mini-nav-right">
						<li></li>
					</ul>
				</div>  
				
				<div class="container-fluid">

					<!-- Spacer starts -->
					<div class="spacer-xs">

						<!-- Row start -->
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
<div class="panel-body" style="width: 30%; margin:auto;">
			             
    <div class="row" style="display: flex; flex-direction: column; align-items: center;justify-content: center;">
        <div class="col-md-10">
            <div class="text-center lh-1 mb-2">
                <h4 style="text-align: center;">Health Firm Micropath Labs</h4>
				
				<hr>   
					<div>
						<p>Date : <?php echo date("d-m-Y H:i:s");?></p>
					</div>
				
				   <table class="mt-5 table table-bordered">
                    <thead class="bg-dark text-white pt-3">
                    <!--<h5>Patient Details</h5>-->					
                    </thead>
                    <tbody>
                        <tr>
                            <th>Name</th>
                            <td><?php echo ucfirst($name);?></td>
                        </tr><tr>
                            <th>Gender</th>
                            <td><?php echo ucfirst($gender);?></td>
                        </tr>
                        <tr>
                            <th>Mob No</th>
                            <td><?php echo $mobile_no;?></td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td><?php echo ucfirst($address);?></td>
                        </tr> 
						<tr>
                            <th>Package</th>
                            <td><?php echo ucfirst($package_name);?> </td>
                        </tr>
						
						<tr>
                            <th>Price</th>
                            <td><i class="fa fa-inr" aria-hidden="true"></i> <?php echo number_format($price);?>/-</td>
                        </tr>
  
                    </tbody>
                </table>
                <p class="d-flex flex-column mt-2 font13"> <span class="fw-bolder">Hospital Management</span><br><span class="mt-4">Authorised Signatory</span> </p>
            
            </div>
        
        </div>
    </div>
</div>
 </div>
 </div>
	</div>
</div>
			      
</div>
			     

</div>
					
</div>

