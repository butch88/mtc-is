<!-- Add -->
<?php


    date_default_timezone_set('Asia/Manila');
    
?>

<div class="modal fade" id="addnew">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Admission Slip</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="admission_save.php" enctype="multipart/form-data">
					
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-3">
								<label for="division_name">Date</label>
								<input class='form-control' type='text' id='date_of_admission' name='date_of_admission' value='<?php echo date('F j, Y');?>' readonly>
								<input class='form-control' type='hidden' id='center_id' name='center_id' value='<?php echo $user['center_id']; ?>' >
                            </div>
							<div class="col-md-3">
															
                            </div>
							<div class="col-md-3">
															
                            </div>
							
							<div class="col-md-3">
								<label for="division_name">Time</label>
								<input class="form-control" type='text' id='time_of_admission' name='time_of_admission' value='<?php echo date('g:i a');?>' readonly>							
                            </div>	
						</div>
					</div>	
					
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-3">
								<input class="form-control" name="lastname" id="lastname" type="text" style="text-transform: uppercase;">	
								<label style="font-size:12px; "><i>Lastname</i></label>
							</div> 
							<div class="col-md-3">
								<input class="form-control" name="firstname" id="firstname" type="text" style="text-transform: uppercase;">
								<label style="font-size:12px; "><i>Firstname</i></label>												
							</div> 
							<div class="col-md-3">
								<input class="form-control" name="middlename" id="middlename" type="text" style="text-transform: uppercase;">
								<label style="font-size:12px; "><i>Middlename</i></label>												
							</div> 
							<div class="col-md-3">
								<select class="form-control" name="extension_name" id="extension_name" >
									<option value="" selected="selected">SELECT ONE</option>
									<option value="JR.">JR.</option>
									<option value="SR.">SR.</option>
									<option value="I">I</option>
									<option value="II">II</option>
									<option value="III">III</option>
									<option value="IV">IV</option>
									<option value="V">V</option>
									<option value="VI">VI</option>
									<option value="VII">VII</option>
									<option value="VIII">VIII</option>
									<option value="IX">IX</option>
									<option value="X">X</option>														
								</select>
								<label style="font-size:12px; "><i>Extension Name</i></label>											 						
							</div>            
						</div>
					</div>
					
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-3">
								<label for="division_name">Age</label>
								<input class="form-control" name="age_of_client" id="age_of_client" type="text" style="text-transform: uppercase;">							
                            </div>					
						</div>
					</div>
					
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-12">
								<label for="division_name">Address of Client</label>
								<textarea class="form-control" rows="3" name="address_of_client" id="address_of_client" style="text-transform: uppercase;"></textarea>							
                            </div>					
						</div>
					</div>
					
					<hr>
					
					
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-12">
								<label for="division_name">Referring Party</label>
								<input class="form-control" name="referring_party" id="referring_party" type="text" style="text-transform: uppercase;">							
                            </div>					
						</div>
					</div>
					
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-12">
								<label for="division_name">Address of Referring Party</label>
								<textarea class="form-control" rows="3" name="address_of_referring_party" id="address_of_referring_party" style="text-transform: uppercase;"></textarea>							
                            </div>					
						</div>
					</div>
					
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-6">
								<label for="division_name">Admitting Social Worker</label>
								<input class="form-control" name="admitting_social_worker" id="admitting_social_worker" type="text" style="text-transform: uppercase;">	
								<input class="form-control" name="encoded_by" id="encoded_by" type="hidden" value = "<?php echo $user['sname'].', '.$user['fname'].' '. substr($user['mname'], 0, 1).'.';?>" style="text-transform: uppercase;">					
                            </div>
							<div class="col-md-6">
								<label for="division_name">Supervising Social Worker</label>
								<input class="form-control" name="supervising_social_worker" id="supervising_social_worker" type="text" style="text-transform: uppercase;">							
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
            	<h4 class="modal-title"><b>EDIT ADMISSION INFORMATION</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="admission_edit.php" enctype="multipart/form-data">

					<div class="form-group">
						<div class="form-row">
							<div class="col-md-3">
								<label for="division_name">ADMISSION ID</label>
								<input class='form-control' type='text' id='edit_admissionID' name='edit_admissionID' readonly>								
                            </div>
							
							<div class="col-md-3">
															
                            </div>
							<div class="col-md-3">
								<label for="division_name">Date</label>
								<input class='form-control' type='text' id='edit_date_of_admission' name='edit_date_of_admission' readonly>
								<input class='form-control' type='hidden' id='edit_center_id' name='edit_center_id'  >
                            </div>
														
							<div class="col-md-3">
								<label for="division_name">Time</label>
								<input class="form-control" type='text' id='edit_time_of_admission' name='edit_time_of_admission' readonly>							
                            </div>	
						</div>
					</div>
					
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-3">
								<input class="form-control" name="edit_lastname" id="edit_lastname" type="text" style="text-transform: uppercase;">	
								<label style="font-size:12px; "><i>Lastname</i></label>
							</div> 
							<div class="col-md-3">
								<input class="form-control" name="edit_firstname" id="edit_firstname" type="text" style="text-transform: uppercase;">
								<label style="font-size:12px; "><i>Firstname</i></label>												
							</div> 
							<div class="col-md-3">
								<input class="form-control" name="edit_middlename" id="edit_middlename" type="text" style="text-transform: uppercase;">
								<label style="font-size:12px; "><i>Middlename</i></label>												
							</div> 
							<div class="col-md-3">
								<select class="form-control" name="edit_extension_name" id="edit_extension_name" >
									<option value="" selected="selected">SELECT ONE</option>
									<option value="JR.">JR.</option>
									<option value="SR.">SR.</option>
									<option value="I">I</option>
									<option value="II">II</option>
									<option value="III">III</option>
									<option value="IV">IV</option>
									<option value="V">V</option>
									<option value="VI">VI</option>
									<option value="VII">VII</option>
									<option value="VIII">VIII</option>
									<option value="IX">IX</option>
									<option value="X">X</option>														
								</select>
								<label style="font-size:12px; "><i>Extension Name</i></label>											 						
							</div>            
						</div>
					</div>
					
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-3">
								<label for="division_name">Age</label>
								<input class="form-control" name="edit_age_of_client" id="edit_age_of_client" type="text" style="text-transform: uppercase;">							
                            </div>					
						</div>
					</div>
					
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-12">
								<label for="division_name">Address of Client</label>
								<textarea class="form-control" rows="3" name="edit_address_of_client" id="edit_address_of_client" style="text-transform: uppercase;"></textarea>							
                            </div>					
						</div>
					</div>
					
					<hr>
					
					
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-12">
								<label for="division_name">Referring Party</label>
								<input class="form-control" name="edit_referring_party" id="edit_referring_party" type="text" style="text-transform: uppercase;">							
                            </div>					
						</div>
					</div>
					
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-12">
								<label for="division_name">Address of Referring Party</label>
								<textarea class="form-control" rows="3" name="edit_address_of_referring_party" id="edit_address_of_referring_party" style="text-transform: uppercase;"></textarea>							
                            </div>					
						</div>
					</div>
					
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-6">
								<label for="division_name">Admitting Social Worker</label>
								<input class="form-control" name="edit_admitting_social_worker" id="edit_admitting_social_worker" type="text" style="text-transform: uppercase;">
								<input class="form-control" name="endcoded_by" id="encoded_by" type="hidden" value = "<?php echo $user['sname'].', '.$user['fname'].' '. substr($user['mname'], 0, 1).'.';?>" style="text-transform: uppercase;">					
                            </div>
							<div class="col-md-6">
								<label for="division_name">Supervising Social Worker</label>
								<input class="form-control" name="edit_supervising_social_worker" id="edit_supervising_social_worker" type="text" style="text-transform: uppercase;">							
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


