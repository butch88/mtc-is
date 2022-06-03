<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>ADD NEW SYSTEM USER</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="user_save.php" enctype="multipart/form-data">

					
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-12">
								<label for="division_name">Search Employee</label>											
								<select name= "user" id= "user" class="form-control select2" style="width: 100%;">
								  <option selected="selected">SELECT ONE</option>
								  
									<?php
										   require 'conn_to_ctris.php';
										   $sql = "SELECT * FROM userprofile ORDER BY sname";
										   $result = mysqli_query($conn1, $sql);
										   while($row = mysqli_fetch_assoc($result))
											  {
											   $name = $row['empno']. " - " .$row['sname'].", ".$row['fname']." " . $row['mname'];
											   echo "<option value =".$row['empno']." > ".$name."</option>";
										   }                                       
									?>  
								</select>
                            </div>               
						</div>
					</div>
					
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-12">
								<label for="division_name">User Module</label>
								<select class="form-control select2" id="usermodule" name="usermodule" style="width: 100%;"> 
									<option value = "" selected = "selected" disabled = "disabled">Select One</option>														
									<option value="ICTMS">ICTMS</option>
									<option value="PDPS">PDPS</option>
									<option value="RCC">RCC</option>
								</select>								
                            </div>					
						</div>
					</div>
					
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-12">
								<label for="division_name">Center Name</label>											
								<select name= "center_id" id= "center_id" class="form-control select2" style="width: 100%;">
								  <option selected="selected">SELECT ONE</option>
									<?php
										   require 'conn.php';
										   $sql = "SELECT * FROM center_lib WHERE deleted ='NO' ORDER BY center_name";
										   $result = mysqli_query($conn, $sql);
										   while($row = mysqli_fetch_assoc($result))
											  {
											  
											   echo "<option value =".$row['center_id']." > ".$row['center_name']."</option>";
										   }                                       
									?> 
								</select>
                            </div>               
						</div>
					</div>					
					
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-12">
								<label for="division_name">User Level</label>
								<select class="form-control select2" id="userlevel" name="userlevel" style="width: 100%;"> 
										<option value = "" selected = "selected" disabled = "disabled">Select One</option>														
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
									</select>          
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
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>EDIT SYSTEM USERS INFORMATION</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="user_edit.php" enctype="multipart/form-data">

					<div class="form-group">
						<div class="form-row">
							<div class="col-md-12">
								<input class="form-control" name="edit_user_id" id="edit_user_id" type="hidden" style="text-transform: uppercase;">
								<label for="division_name">Employee Name</label>											
								<input class="form-control" name="edit_name" id="edit_name" type="text" style="text-transform: uppercase;" readonly>	
                            </div>               
						</div>
					</div>
					
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-12">
								<label for="division_name">Employee Number</label>											
									<input class="form-control" name="edit_empno" id="edit_empno" type="text" style="text-transform: uppercase;" readonly>	                  
								
                            </div>               
						</div>
					</div>
					
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-12">
								<label for="division_name">User Module</label>
								<select class="form-control select2" id="edit_user_module" name="edit_user_module" style="width: 100%;"> 
									<option value = "" selected = "selected">Select One</option>														
									<option value="ICTMS">ICTMS</option>
									<option value="PDPS">PDPS</option>
									<option value="RCC">RCC</option>
								</select>
                            </div>					
						</div>
					</div>

					<div class="form-group">
						<div class="form-row">
							<div class="col-md-12">
								<label for="division_name">Center Name</label>											
								<select name= "edit_center_id" id= "edit_center_id" class="form-control select2" style="width: 100%;">
								  <option selected="selected">SELECT ONE</option>
									<?php
										   require 'conn.php';
										   $sql = "SELECT * FROM center_lib WHERE deleted ='NO' ORDER BY center_name";
										   $result = mysqli_query($conn, $sql);
										   while($row = mysqli_fetch_assoc($result))
											  {
											  
											   echo "<option value =".$row['center_id']." > ".$row['center_name']."</option>";
										   }                                       
									?> 
								</select>
                            </div>               
						</div>
					</div>		
					
					
					
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-12">	
								<label for="division_name">User Level</label>									
								<select class="form-control select2" id="edit_user_level" name="edit_user_level" style="width: 100%;"> 
									<option value = "" disabled = "disabled">Select One</option>														
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
								</select>                 
						
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


