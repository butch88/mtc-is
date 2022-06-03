<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>ADD NEW CENTER INFORMATION</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="center_save.php" enctype="multipart/form-data">

					<div class="form-group">
						<div class="form-row">
							<div class="col-md-12">
								<label for="division_name">Centers/ Facility Name</label>											
								<input class="form-control" name="center_name" id="center_name" type="text" style="text-transform: uppercase;">	
                            </div>               
						</div>
					</div>
					
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-12">
								<label for="division_name">Center Head</label>											
									<input class="form-control" name="center_head" id="center_head" type="text" style="text-transform: uppercase;">	                  
								
                            </div>               
						</div>
					</div>
					
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-12">
								<label for="division_name">Address</label>  
                            </div>					
						</div>
					</div>
					
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-6">
								<select class="form-control styleFontSelect fieldStyle styleFont" name="add_region" id="add_region" >
								</select>
								<label style="font-size:12px; "><i>Region</i></label>								
							</div>

							<div class="col-md-6">
								<select class="form-control" name="add_province" id="add_province" >
									<option value='' selected>PROVINCE</option>
								</select>
							<label style="font-size:12px; "><i>Province</i></label>
							</div>
							
						</div>
					</div>
					
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-6">
								<select class="form-control" name="add_city" id="add_city" >
									<option value='' selected>CITY/MUNICIPALITY</option>								
								</select>
								
								<label style="font-size:12px; "><i>CITY/MUNICIPALITY</i></label>							
							</div>

							<div class="col-md-6">
								<select class="form-control" name="add_brgy" id="add_brgy" >
									<option value='' selected>BARANGAY</option>								
								</select>
								<label style="font-size:12px; "><i>Barangay</i></label>
							</div>					
						</div>						
					</div>
					
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-5">											
								<input class="form-control" name="block" id="block" type="text" style="text-transform: uppercase;">	                  
								<label style="font-size:12px;"><i>Lot No. /Block No.</i></label>
							</div>
							<div class="col-md-5">											
								<input class="form-control" name="street" id="street" type="text" style="text-transform: uppercase;">	                  
								<label style="font-size:12px;"><i>Street</i></label>
							</div>
							<div class="col-md-2">											
								<input class="form-control" name="zipcode" id="zipcode" type="text" style="text-transform: uppercase;">	                  
								<label style="font-size:12px;"><i>Zipcode</i></label>
							</div>
							
						</div>
					</div>
					
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-6">	
								<label for="division_name">Contact No.</label>									
								<input class="form-control" name="contact_no" id="contact_no" type="text" style="text-transform: uppercase;">	                  
						
							</div>
							<div class="col-md-6">
								<label for="division_name">Date Established</label>								
								<input class="form-control" name="date_established" id="date_established" type="date" style="text-transform: uppercase;">
							</div>						
						</div>
					</div>
					
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-4">	
								<label for="division_name">Bed Capacity</label>									
								<input class="form-control" name="bed_capacity" id="bed_capacity" type="number">	                  
						
							</div>
							<div class="col-md-4">
								<label for="division_name">No. of Social Worker</label>								
								<input class="form-control" name="no_sw" id="no_sw" type="number">
							</div>
							<div class="col-md-4">
								<label for="division_name">No. of House Parent</label>								
								<input class="form-control" name="no_hp" id="no_hp" type="number">
							</div>								
						</div>
					</div>
					
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-12">
								<label for="division_name">Description</label>
								<textarea class="form-control" rows="5" name="description" id="description" style="text-transform: uppercase;"></textarea>          
							</div>
						</div>
					</div>
					
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-12">								
								<label for="exampleInputFile">Upload photo of center.</label>
								<input type="file" name="fileToUpload" id="fileToUpload">
							</div>
						</div>
					</div>
					

          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	<button type="submit" class="btn btn-primary btn-flat" name="submit"><i class="fa fa-save"></i> Save</button>
            	</form>
          	</div>
        </div>
    </div>
</div>

<!-- View -->
<div class="modal fade" id="view">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>VIEW CENTER INFORMATION</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="center_save.php" enctype="multipart/form-data">
				<input class="form-control" name="view_center_id" id="view_center_id" type="hidden" style="text-transform: uppercase;">	
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-12">
								<label for="division_name">Centers/ Facility Name</label>											
								<input class="form-control" name="view_center_name" id="view_center_name" type="text" style="text-transform: uppercase;" readonly>	
                            </div>               
						</div>
					</div>
					
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-12">
								<label for="division_name">Center Head</label>											
									<input class="form-control" name="view_center_head" id="view_center_head" type="text" style="text-transform: uppercase;" readonly>	                  
								
                            </div>               
						</div>
					</div>
					
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-12">
								<label for="division_name">Address</label>  
                            </div>					
						</div>
					</div>
					
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-6">
								<select class="form-control select2" name="view_region" id="view_region" disabled="disabled" style="width: 100%;">
									<option value='' selected>REGION</option>
										<?php

											$sql = "SELECT * FROM lib_regions ORDER BY region_name ASC";
											$result = mysqli_query($conn, $sql);
											while($row = mysqli_fetch_assoc($result))
												{
													echo "<option value =".$row['region_code'].">".$row['region_name']."</option>";
												}
										?> 		
								</select>
								<label style="font-size:12px; "><i>Region</i></label>								
							</div>

							<div class="col-md-6">
							<select class="form-control select2" name="view_province" id="view_province"  disabled="disabled"  style="width: 100%;">
								<option value='' selected>PROVINCE</option>
									<?php

											$sql = "SELECT * FROM lib_provinces ORDER BY prov_name ASC";
											$result = mysqli_query($conn, $sql);
											while($row = mysqli_fetch_assoc($result))
												{
													echo "<option value =".$row['prov_code'].">".$row['prov_name']."</option>";
												}     		

									?> 
							</select>
							<label style="font-size:12px; "><i>Province</i></label>
							</div>
							
						</div>
					</div>
					
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-6">
								<select class="form-control select2" name="view_city" id="view_city"  disabled="disabled" style="width: 100%;">
									<option value='' selected>CITY/MUNICIPALITY</option>
										<?php

												$sql = "SELECT * FROM lib_cities ORDER BY city_name ASC";
												$result = mysqli_query($conn, $sql);
												while($row = mysqli_fetch_assoc($result))
												{
													echo "<option value =".$row['city_code'].">".$row['city_name']."</option>";
												}     		
																
										?> 
								</select>
								<label style="font-size:12px; "><i>City/Municipality</i></label>							
							</div>

							<div class="col-md-6">
								<select class="form-control select2" name="view_brgy" id="view_brgy" disabled="disabled" style="width: 100%;" >
									<option value='' selected>BARANGAY</option>
										<?php
									
												$sql = "SELECT * FROM lib_brgy ORDER BY brgy_name ASC";
												$result = mysqli_query($conn, $sql);
												while($row = mysqli_fetch_assoc($result))
												{
													echo "<option value =".$row['brgy_code'].">".$row['brgy_name']."</option>";
												}     		
																						
										?> 
								</select>
								<label style="font-size:12px; "><i>Barangay</i></label>
							</div>					
						</div>						
					</div>
					
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-5">											
								<input class="form-control" name="view_block" id="view_block" type="text" style="text-transform: uppercase;" readonly>	                  
								<label style="font-size:12px;"><i>Lot No. /Block No.</i></label>
							</div>
							<div class="col-md-5">											
								<input class="form-control" name="view_street" id="view_street" type="text" style="text-transform: uppercase;" readonly>	                  
								<label style="font-size:12px;"><i>Street</i></label>
							</div>
							<div class="col-md-2">											
								<input class="form-control" name="view_zipcode" id="view_zipcode" type="text" style="text-transform: uppercase;" readonly>	                  
								<label style="font-size:12px;"><i>Zipcode</i></label>
							</div>
							
						</div>
					</div>
					
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-6">	
								<label for="division_name">Contact No.</label>									
								<input class="form-control" name="view_contact_no" id="view_contact_no" type="text" style="text-transform: uppercase;" readonly>	                  
						
							</div>
							<div class="col-md-6">
								<label for="division_name">Date Established</label>								
								<input class="form-control" name="view_date_established" id="view_date_established" type="date" style="text-transform: uppercase;" readonly>
							</div>						
						</div>
					</div>
					
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-4">	
								<label for="division_name">Bed Capacity</label>									
								<input class="form-control" name="view_bed_capacity" id="view_bed_capacity" type="number" readonly>	                  
						
							</div>
							<div class="col-md-4">
								<label for="division_name">No. of Social Worker</label>								
								<input class="form-control" name="view_no_sw" id="view_no_sw" type="number" readonly>
							</div>
							<div class="col-md-4">
								<label for="division_name">No. of House Parent</label>								
								<input class="form-control" name="view_no_hp" id="view_no_hp" type="number" readonly>
							</div>								
						</div>
					</div>
					
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-12">
								<label for="division_name">Description</label>
								<textarea class="form-control" rows="5" name="view_description" id="view_description" style="text-transform: uppercase;" readonly></textarea>          
							</div>
						</div>
					</div>
					
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-12">								
								
								<img class="thumbnail" width="275px" height="250px" name="view_photo" id="view_photo">
								
							</div>
						</div>
					</div>
					

          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	<button type="submit" class="btn btn-primary btn-flat" name="submit"><i class="fa fa-save"></i> Save</button>
            	</form>
          	</div>
        </div>
    </div>
</div>


<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>EDIT CENTER INFORMATION</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="center_edit.php" enctype="multipart/form-data">

					<div class="form-group">
						<div class="form-row">
							<div class="col-md-12">
								<input class="form-control" name="edit_center_id" id="edit_center_id" type="text" style="text-transform: uppercase;">
								<label for="division_name">Centers/ Facility Name</label>											
								<input class="form-control" name="edit_center_name" id="edit_center_name" type="text" style="text-transform: uppercase;">	
                            </div>               
						</div>
					</div>
					
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-12">
								<label for="division_name">Center Head</label>											
									<input class="form-control" name="edit_center_head" id="edit_center_head" type="text" style="text-transform: uppercase;">	                  
								
                            </div>               
						</div>
					</div>
					
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-12">
								<label for="division_name">Address</label>  
                            </div>					
						</div>
					</div>
					
					
					
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-6">
								<select class="form-control styleFontSelect fieldStyle styleFont" name="edit_region" id="edit_region" style="width: 100%;">
									<option value='' selected>REGION</option>
										<?php
											
											$sql = "SELECT * FROM lib_regions ORDER BY region_name ASC";
											$result = mysqli_query($conn, $sql);
											while($row = mysqli_fetch_assoc($result))
												{
													echo "<option value =".$row['region_code'].">".$row['region_name']."</option>";
												}
										?> 		
								</select>
								<label style="font-size:12px; "><i>Region</i></label>								
							</div>

							<div class="col-md-6">
							<select class="form-control" name="edit_province" id="edit_province" style="width: 100%;">
								<option value='' selected>PROVINCE</option>
									<?php								
																
											$sql = "SELECT * FROM lib_provinces ORDER BY prov_name ASC";
											$result = mysqli_query($conn, $sql);
											while($row = mysqli_fetch_assoc($result))
												{
													echo "<option value =".$row['prov_code'].">".$row['prov_name']."</option>";
												
												}     		
	
									?> 
							</select>
							<label style="font-size:12px; "><i>Province</i></label>
							</div>
							
						</div>
					</div>
					
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-6">
								<select class="form-control" name="edit_city" id="edit_city" style="width: 100%;">
									<option value='' selected>CITY/MUNICIPALITY</option>
										<?php
										
												/*$sql = "SELECT * FROM lib_cities  ORDER BY city_name ASC";
												$result = mysqli_query($conn, $sql);
												while($row = mysqli_fetch_assoc($result))
												{
													echo "<option value =".$row['city_code'].">".$row['city_name']."</option>";
												} */    		
																									
										?> 
								</select>
								<label style="font-size:12px; "><i>CITY/MUNICIPALITY</i></label>							
							</div>

							<div class="col-md-6">
								<select class="form-control" name="edit_brgy" id="edit_brgy" style="width: 100%;">
									<option value='' selected>BARANGAY</option>
										<?php

												$sql = "SELECT * FROM lib_brgy  ORDER BY brgy_name ASC";
												$result = mysqli_query($conn, $sql);
												while($row = mysqli_fetch_assoc($result))
												{
													echo "<option value =".$row['brgy_code'].">".$row['brgy_name']."</option>";
												}     		
																				
										?> 
								</select>
								<label style="font-size:12px; "><i>Barangay</i></label>
							</div>					
						</div>						
					</div>
					
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-5">											
								<input class="form-control" name="edit_block" id="edit_block" type="text" style="text-transform: uppercase;">	                  
								<label style="font-size:12px;"><i>Lot No. /Block No.</i></label>
							</div>
							<div class="col-md-5">											
								<input class="form-control" name="edit_street" id="edit_street" type="text" style="text-transform: uppercase;">	                  
								<label style="font-size:12px;"><i>Street</i></label>
							</div>
							<div class="col-md-2">											
								<input class="form-control" name="edit_zipcode" id="edit_zipcode" type="text" style="text-transform: uppercase;">	                  
								<label style="font-size:12px;"><i>Zipcode</i></label>
							</div>
							
						</div>
					</div>
					
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-6">	
								<label for="division_name">Contact No.</label>									
								<input class="form-control" name="edit_contact_no" id="edit_contact_no" type="text" style="text-transform: uppercase;">	                  
						
							</div>
							<div class="col-md-6">
								<label for="division_name">Date Established</label>								
								<input class="form-control" name="edit_date_established" id="edit_date_established" type="date" style="text-transform: uppercase;">
							</div>						
						</div>
					</div>
					
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-4">	
								<label for="division_name">Bed Capacity</label>									
								<input class="form-control" name="edit_bed_capacity" id="edit_bed_capacity" type="number">	                  
						
							</div>
							<div class="col-md-4">
								<label for="division_name">No. of Social Worker</label>								
								<input class="form-control" name="edit_no_sw" id="edit_no_sw" type="number">
							</div>
							<div class="col-md-4">
								<label for="division_name">No. of House Parent</label>								
								<input class="form-control" name="edit_no_hp" id="edit_no_hp" type="number">
							</div>								
						</div>
					</div>
					
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-12">
								<label for="division_name">Description</label>
								<textarea class="form-control" rows="5" name="edit_description" id="edit_description" style="text-transform: uppercase;"></textarea>          
							</div>
						</div>
					</div>
					
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-12">								
								<label for="exampleInputFile">Upload photo of center.</label>
								<input type="file" name="edit_fileToUpload" id="edit_fileToUpload">
							</div>
						</div>
					</div>
					

          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	<button type="submit" class="btn btn-success btn-flat" name="submit_edit"><i class="fa fa-check-square-o"></i> Update</button>
            	</form>
          	</div>
        </div>
    </div>
</div>


