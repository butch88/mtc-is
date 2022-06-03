<?php 
	include 'includes/conn.php';

	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$sql = "SELECT * FROM center_lib WHERE center_id = '$id'";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();
		
	}
?>

<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>DSWD | CRCF-IS</title>
	<?php include 'includes/session.php'; ?>
	<?php include 'includes/header.php'; ?>
	<?php $try1 = null; ?>
</head>

<body class="hold-transition skin-blue sidebar-mini">
	
	<div class="wrapper">
		<?php include 'includes/navbar.php'; ?>
		<?php include 'includes/sidebar.php'; ?>


  
  
	<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>
					Centers Information
					<small>Editing</small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
					<li><a href="#">Libraries</a></li>
					<li class="active">Centers</li>
				</ol>
			</section>
				
			<!-- Main content -->
			<section class="content">
				<div class="row">
					<div class="col-md-1">
					</div>
				    <div class="col-md-10">
					
						<div class="box box-success">
							<div class="box-header with-border">
							  <h3 class="box-title">Edit Center Information</h3>
							</div>
							<form method = "POST" action = "center_edit_save.php" enctype="multipart/form-data">							
								<div class="box-body">
									
									
									<div class="form-group">
										<div class="form-row">
											<div class="col-md-3">
												<label for="division_name">Category</label>					
														
												<select class="form-control" name="edit_center_category" id="edit_center_category" >
													<option value="" selected="selected">SELECT ONE</option>
													<?php
														$center_category =  $row['center_category'];
														$loopA = 1;
														while ($loopA <= 3)
														{
															if ($loopA == $center_category)
															{
																echo "<option value=".$loopA." selected>".$loopA."</option>";
																		
															}
															else
															{
																echo "<option value=".$loopA.">".$loopA."</option>";
															}
															$loopA++;
														}
														
														
													?>
																										
												</select>
											</div>               
										</div>
									</div>
									
									<div class="form-group">
										<div class="form-row">
											<div class="col-md-12">
												<input class="form-control" name="edit_center_id" id="edit_center_id" type="hidden" value= "<?php echo $row['center_id']; ?>"  style="text-transform: uppercase;">
												<label for="division_name">Centers/ Facility Name</label>											
												<input class="form-control" name="edit_center_name" id="edit_center_name"  value= "<?php echo $row['center_name']; ?>" type="text" style="text-transform: uppercase;">	
											</div>               
										</div>
									</div>
					
									<div class="form-group">
										<div class="form-row">
											<div class="col-md-12">
												<label for="division_name">Center Head</label>											
													<input class="form-control" name="edit_center_head" id="edit_center_head" value= "<?php echo $row['center_head']; ?>"  type="text" style="text-transform: uppercase;">	                  
												
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
													<option value=''>REGION</option>
														<?php
															
															$sql = "SELECT * FROM lib_regions ORDER BY region_name ASC";
															$result = mysqli_query($conn, $sql);
															while($row_reg = mysqli_fetch_assoc($result))
																{
																	if ($row['region'] ==  $row_reg['region_code'])
																	{
																		echo "<option value =".$row_reg['region_code']." selected>".$row_reg['region_name']."</option>";
																	}
																	else
																	{
																		echo "<option value =".$row_reg['region_code'].">".$row_reg['region_name']."</option>";
																	}
																}
														?> 		
												</select>
												<label style="font-size:12px; "><i>Region</i></label>								
											</div>

											<div class="col-md-6">
											<select class="form-control" name="edit_province" id="edit_province" style="width: 100%;">
												<option value=''>PROVINCE</option>
														<?php
															$region = $row['region'];														

															
															$sql = "SELECT * FROM lib_provinces WHERE region_code = '$region' ORDER BY prov_name ASC";
															$result = mysqli_query($conn, $sql);
															while($row_prov = mysqli_fetch_assoc($result))
																{
																	if ($row['province'] == $row_prov['prov_code'])
																	{																	
																		echo "<option value =".$row_prov['prov_code']." selected>".$row_prov['prov_name']."</option>";
																	}
																	else
																	{
																		echo "<option value =".$row_prov['prov_code'].">".$row_prov['prov_name']."</option>";
																	}
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
													<option value=''>CITY/MUNICIPALITY</option>
														<?php
															$province = $row['province'];
															
															$sql = "SELECT * FROM lib_cities WHERE prov_code = '$province' ORDER BY city_name ASC";
															$result = mysqli_query($conn, $sql);
															while($row_muni = mysqli_fetch_assoc($result))
															{
																if ($row['municipality'] == $row_muni['city_code'])
																{
																	echo "<option value =".$row_muni['city_code']." selected>".$row_muni['city_name']."</option>";
																}
																else
																{
																	echo "<option value =".$row_muni['city_code']." >".$row_muni['city_name']."</option>";
																}
															}     		

														?>	
												</select>
												<label style="font-size:12px; "><i>CITY/MUNICIPALITY</i></label>							
											</div>

											<div class="col-md-6">
												<select class="form-control" name="edit_brgy" id="edit_brgy" style="width: 100%;">
													<option value=''>BARANGAY</option>
														<?php
																$municipality = $row['municipality'];
																
																$sql = "SELECT * FROM lib_brgy WHERE city_code = '$municipality' ORDER BY brgy_name ASC";
																$result = mysqli_query($conn, $sql);
																while($row_brgy = mysqli_fetch_assoc($result))
																{
																	if ($row['barangay'] == $row_brgy['brgy_code'])
																	{
																		echo "<option value =".$row_brgy['brgy_code']." selected>".$row_brgy['brgy_name']."</option>";
																	}
																	else
																	{
																		echo "<option value =".$row_brgy['brgy_code'].">".$row_brgy['brgy_name']."</option>";
																	}
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
												<input class="form-control" name="edit_block" id="edit_block" type="text" value="<?php echo $row['block']; ?>" style="text-transform: uppercase;">	                  
												<label style="font-size:12px;"><i>Lot No. /Block No.</i></label>
											</div>
											<div class="col-md-5">											
												<input class="form-control" name="edit_street" id="edit_street" type="text" value="<?php echo $row['street']; ?>" style="text-transform: uppercase;">	                  
												<label style="font-size:12px;"><i>Street</i></label>
											</div>
											<div class="col-md-2">											
												<input class="form-control" name="edit_zipcode" id="edit_zipcode" type="text" value="<?php echo $row['zipcode']; ?>" style="text-transform: uppercase;">	                  
												<label style="font-size:12px;"><i>Zipcode</i></label>
											</div>
											
										</div>
									</div>
					
									<div class="form-group">
										<div class="form-row">
											<div class="col-md-6">	
												<label for="division_name">Contact No.</label>									
												<input class="form-control" name="edit_contact_no" id="edit_contact_no" type="text" value="<?php echo $row['contact_no']; ?>" style="text-transform: uppercase;">	                  
										
											</div>
											<div class="col-md-6">
												<label for="division_name">Date Established</label>								
												<input class="form-control" name="edit_date_established" id="edit_date_established" type="date" value="<?php echo $row['date_established']; ?>" style="text-transform: uppercase;">
											</div>						
										</div>
									</div>
					
									<div class="form-group">
										<div class="form-row">
											<div class="col-md-4">	
												<label for="division_name">Bed Capacity</label>									
												<input class="form-control" name="edit_bed_capacity" id="edit_bed_capacity" value="<?php echo $row['bed_capacity']; ?>" type="number">	                  
										
											</div>
											<div class="col-md-4">
												<label for="division_name">No. of Social Worker</label>								
												<input class="form-control" name="edit_no_sw" id="edit_no_sw"  value="<?php echo $row['no_sw']; ?>" type="number">
											</div>
											<div class="col-md-4">
												<label for="division_name">No. of House Parent</label>								
												<input class="form-control" name="edit_no_hp" id="edit_no_hp" value="<?php echo $row['no_hp']; ?>" type="number">
											</div>								
										</div>
									</div>
					
									<div class="form-group">
										<div class="form-row">
											<div class="col-md-12">
												<label for="division_name">Description</label>
												<textarea class="form-control" rows="5" name="edit_description" id="edit_description" style="text-transform: uppercase;"><?php echo $row['description']; ?></textarea>          
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
				 

								<div class="box-footer">
									<button type="submit" name="submit_edit" id="submit_edit" class="btn btn-primary">Submit</button>
								</div>
							</form>
						</div>				
					</div>
					<div class="col-md-1">
					</div>
				</div>
			</section>
	
		</div>
  
  
	<footer class="main-footer">
		<div class="pull-right hidden-xs">
		<b>Version</b> 1.0
		</div>
		<strong>Copyright &copy; DSWD <a href="#">ICTMS-2019</a>.</strong> All rights
		reserved.
	</footer>
	

</div>
	<?php include 'includes/script.php'; ?>
	

	

<script>
			$(document).ready(function() 			{		
				
				$("#edit_region").change(function(){
					var id = $(this).val();
					console.log("ID: " + id);
					loadSelectedArea1('edit_province', id);
					//loadSelectedArea1('edit_city', id);
			
				});
				$("#edit_province").change(function(){
					var id = $(this).val();
					console.log("Province: " + id);
					loadSelectedArea1('edit_city', id);
				});
				$("#edit_city").change(function(){
					var id = $(this).val();
					console.log("City: " + id);
					loadSelectedArea1('edit_brgy', id);
				});
				

			});
			
			
			function loadSelectedArea1(request, id)
			{
				
				$.ajax({
					url:'get_data1.php?request='+request+'&id='+id,
					success:function(data){
						console.log(request);
						console.log(data);
						$('#'+request).empty().append(data);
						
						if(request == "edit_province"){
							loadSelectedArea1('edit_city', id);
							loadSelectedArea1('edit_brgy', id);
						}
						
						if(request == "edit_city"){
							console.log("City: " + id);
							loadSelectedArea1('edit_brgy', id);
						}
					}
				});
			}


			

</script>






<script>
  $(function () {
    $('.select2').select2()
  })
</script>

</body>
</html>