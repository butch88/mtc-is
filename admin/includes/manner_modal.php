<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>ADD NEW MANNER OF RELATING TO SOCIAL WORKER</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="manner_save.php" enctype="multipart/form-data">

					
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
								<label for="division_name">Manner to Relating to Social Worker</label>
								<input class="form-control" name="manner_name" id="manner_name" type="text" style="text-transform: uppercase;">							
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
            	<h4 class="modal-title"><b>EDIT MANNER OF RELATING TO SOCIAL WORKER</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="manner_edit.php" enctype="multipart/form-data">

					<div class="form-group">
						<div class="form-row">
							<div class="col-md-12">
								<input class="form-control" name="edit_manner_id" id="edit_manner_id" type="text" style="text-transform: uppercase;" readonly>
								<input class="form-control" name="edit_center_id" id="edit_center_id" type="hidden" style="text-transform: uppercase;" readonly>
								<label for="division_name">Center Name</label>											
								<input class="form-control" name="edit_center_name" id="edit_center_name" type="text" style="text-transform: uppercase;" readonly>	
                            </div>               
						</div>
					</div>
					
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-12">
								<label for="division_name">MANNER OF RELATING TO SOCIAL WORKER</label>											
									<input class="form-control" name="edit_manner_name" id="edit_manner_name" type="text" style="text-transform: uppercase;">	                  
								
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


