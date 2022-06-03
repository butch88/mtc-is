<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>ADD NEW CASE SUB CATEGORY</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="case_sub_save.php" enctype="multipart/form-data">

					
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-12">
								<label for="division_name">Center Name</label>											
								<select name= "center_id" id= "center_id" class="form-control select2" style="width: 100%;">
								  <option selected="selected">SELECT ONE</option>
									<?php
										   require 'conn.php';
										   $sql = "SELECT * FROM center_lib  WHERE deleted='NO' ORDER BY center_name";
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
								<label for="division_name">Case Category</label>											
								<select name= "case_id" id= "case_id" class="form-control select2" style="width: 100%;">
								  <option selected="selected">SELECT ONE</option>									
								</select>
                            </div>               
						</div>
					</div>
					
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-12">
								<label for="division_name">Case Sub Category</label>
								<input class="form-control" name="case_sub_name" id="case_sub_name" type="text" style="text-transform: uppercase;">							
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
            	<h4 class="modal-title"><b>EDIT CASE SUB CATEGORY</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="case_sub_edit.php" enctype="multipart/form-data">

					<div class="form-group">
						<div class="form-row">
							<div class="col-md-12">
								<label for="division_name">Center Name</label>			
								<input class="form-control" name="edit_center_id" id="edit_center_id" type="hidden" readonly>
								<input class="form-control" name="edit_center_name" id="edit_center_name" type="text" style="text-transform: uppercase;" readonly>	
                            </div>               
						</div>
					</div>
					
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-12">
								<label for="division_name">Case Category</label>
									<input class="form-control" name="edit_case_id" id="edit_case_id" type="hidden" readonly>												
									<input class="form-control" name="edit_case_category" id="edit_case_category" type="text" style="text-transform: uppercase;" readonly>						
                            </div>               
						</div>
					</div>
					
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-12">
								<label for="division_name">Case Sub Category</label>
									<input class="form-control" name="edit_case_sub_id" id="edit_case_sub_id" type="hidden" readonly>												
									<input class="form-control" name="edit_case_sub_name" id="edit_case_sub_name" type="text" style="text-transform: uppercase;">						
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




<script src="bower_components/jquery/dist/jquery.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$(document).on("change","#center_id", function(){
			
			var center_id= this.value;
			if(center_id != '')  {
				$.ajax
				({
					type: "POST",
					url: "get_case.php",
					data: "center_id="+ center_id,
					success: function(option)
					{					
						$("#case_id").html(option);
					}
				});
			}
			else
			{
				$("#case_id").html("<option value=''>-- No category selected --</option>");
			}
			return false;
		});
		
	
});
</script>