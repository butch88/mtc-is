<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Add New User</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="save_user.php">
					<div class="form-group">
						<div class="form-row">
											
							<div class="col-md-12">
								<label for="exampleInputName">Search Employee</label>
								<select name= "user" id= "user" class="form-control select2" style="width: 100%;">
								  <option selected="selected">SELECT ONE</option>
								  
									<?php
										   require 'includes/conn_to_ctris.php';
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
							<div class="col-md-6">
								<label for="exampleInputPassword1">User Level</label>														
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
            	<h4 class="modal-title"><b>Edit User</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="save_user_edit.php">
            		<input type="hidden" class="id" id="edit_userid" name= "edit_userid">
               <div class="form-group">
						<div class="form-row">
											
							<div class="col-md-12">
								<label for="exampleInputLastName">Employee Name</label>
								<input class="form-control" id="edit_surname" name="surname" type="text" readonly>
							</div>
												
							
						</div>
				</div>
				
				<div class="form-group">
					<div class="form-row">
						<div class="col-md-6">
					
							<input class="form-control" id="edit_empno" name="empno" aria-describedby="emailEmployeeNo" type = "hidden">
						</div>
					</div>
				</div>				

					
				<div class="form-group">
					<div class="form-row">
						<div class="col-md-6">
							<label for="exampleInputPassword1">User Level</label>														
								<select class="form-control select2" id="edit_userlevel" name="edit_userlevel" style="width: 100%;"> 
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

