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
					<small>Adding</small>
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
					
						<div class="box box-primary">
							<div class="box-header with-border">
							  <h3 class="box-title">Add Center Information</h3>
							</div>
							<form method = "POST" action = "center_save.php" enctype="multipart/form-data">							
								<div class="box-body">
								
									<div class="form-group">
										<div class="form-row">
											<div class="col-md-12">
												<label for="division_name">Centers/ Facility Name</label>											
												<input class="form-control" name="view_center_name" id="view_center_name" type="text" value= "<?php echo $row['center_name']; ?>" style="text-transform: uppercase;" readonly>	
											</div>               
										</div>
									</div>
					
									<div class="form-group">
										<div class="form-row">
											<div class="col-md-12">
												<label for="division_name">Center Head</label>											
													<input class="form-control" name="view_center_head" id="view_center_head" type="text" value= "<?php echo $row['block']; ?>" style="text-transform: uppercase;" readonly>	                  
												
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
													<?php
														$region = $row['region'];											
														$sql = "SELECT * FROM lib_regions WHERE region_code = '$region' ORDER BY region_name ASC";
														$result = mysqli_query($conn, $sql);
														while($row1 = mysqli_fetch_assoc($result))
															{
																echo "<option value =".$row1['region_code'].">".$row1['region_name']."</option>";
															}
													?>
														
												</select>
												<label style="font-size:12px; "><i>Region</i></label>								
											</div>

											<div class="col-md-6">
											<select class="form-control select2" name="view_province" id="view_province"  disabled="disabled"  style="width: 100%;">
													<?php
														$province = $row['province'];
														
														$sql = "SELECT * FROM lib_provinces WHERE prov_code = '$province' ORDER BY prov_name ASC";
														$result = mysqli_query($conn, $sql);
														while($row1 = mysqli_fetch_assoc($result))
															{
																echo "<option value =".$row1['prov_code'].">".$row1['prov_name']."</option>";
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
														<?php
															$municipality = $row['municipality'];
														
															$sql = "SELECT * FROM lib_cities WHERE city_code = '$municipality' ORDER BY city_name ASC";
															$result = mysqli_query($conn, $sql);
															while($row1 = mysqli_fetch_assoc($result))
															{
																echo "<option value =".$row1['city_code'].">".$row1['city_name']."</option>";
															}     		

													?> 
												</select>
												<label style="font-size:12px; "><i>City/Municipality</i></label>							
											</div>

											<div class="col-md-6">
												<select class="form-control select2" name="view_brgy" id="view_brgy" disabled="disabled" style="width: 100%;" >
													
														<?php
																$brgy =$row['barangay'];
																
																$sql = "SELECT * FROM lib_brgy WHERE brgy_code = '$brgy' ORDER BY brgy_name ASC";
																$result = mysqli_query($conn, $sql);
																while($row1 = mysqli_fetch_assoc($result))
																{
																	echo "<option value =".$row1['brgy_code'].">".$row1['brgy_name']."</option>";
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
												<input class="form-control" name="view_block" id="view_block" type="text" value="<?php echo $row['block']; ?>" style="text-transform: uppercase;" readonly>	                  
												<label style="font-size:12px;"><i>Lot No. /Block No.</i></label>
											</div>
											<div class="col-md-5">											
												<input class="form-control" name="view_street" id="view_street" type="text" value="<?php echo $row['street']; ?>" style="text-transform: uppercase;" readonly>	                  
												<label style="font-size:12px;"><i>Street</i></label>
											</div>
											<div class="col-md-2">											
												<input class="form-control" name="view_zipcode" id="view_zipcode" type="text"  value="<?php echo $row['zipcode']; ?>"style="text-transform: uppercase;" readonly>	                  
												<label style="font-size:12px;"><i>Zipcode</i></label>
											</div>
											
										</div>
									</div>
					
									<div class="form-group">
										<div class="form-row">
											<div class="col-md-6">	
												<label for="division_name">Contact No.</label>									
												<input class="form-control" name="view_contact_no" id="view_contact_no" type="text"  value="<?php echo $row['contact_no']; ?>" style="text-transform: uppercase;" readonly>	                  
										
											</div>
											<div class="col-md-6">
												<label for="division_name">Date Established</label>								
												<input class="form-control" name="view_date_established" id="view_date_established" type="date"  value="<?php echo $row['date_established']; ?>" style="text-transform: uppercase;" readonly>
											</div>						
										</div>
									</div>
					
									<div class="form-group">
										<div class="form-row">
											<div class="col-md-4">	
												<label for="division_name">Bed Capacity</label>									
												<input class="form-control" name="view_bed_capacity" id="view_bed_capacity"  value="<?php echo $row['bed_capacity']; ?>" type="number" readonly>	                  
										
											</div>
											<div class="col-md-4">
												<label for="division_name">No. of Social Worker</label>								
												<input class="form-control" name="view_no_sw" id="view_no_sw" type="number"  value="<?php echo $row['no_sw']; ?>" readonly>
											</div>
											<div class="col-md-4">
												<label for="division_name">No. of House Parent</label>								
												<input class="form-control" name="view_no_hp" id="view_no_hp" type="number"  value="<?php echo $row['no_hp']; ?>"readonly>
											</div>								
										</div>
									</div>
									
									<div class="form-group">
										<div class="form-row">
											<div class="col-md-12">
												<label for="division_name">Description</label>
												<textarea class="form-control" rows="5" name="view_description" id="view_description" style="text-transform: uppercase;"  readonly><?php echo $row['description']; ?> </textarea>          
											</div>
										</div>
									</div>
					
									<div class="form-group">
										<div class="form-row">
											<div class="col-md-12">								
												
												<img class="thumbnail" width="275px" height="250px" name="view_photo" id="view_photo"  src="centers_images/<?php echo $row['picture'];?>" >
												
											</div>
										</div>
									</div>
								</div>
				 

								<div class="box-footer">									
									<a href ="center.php" class = "btn btn-danger btn-sm delete_id"> Back</a>
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

</body>
</html>