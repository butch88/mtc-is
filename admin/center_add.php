<!DOCTYPE html>
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
											<div class="col-md-3">
												<label for="division_name">Category</label>											
												<select class="form-control" name="center_category" id="center_category" >
													<option value="" selected="selected">SELECT ONE</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>														
												</select>
											</div>               
										</div>
									</div>
									
									
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
				 

								<div class="box-footer">
									<button type="submit" name="submit_center" id="submit_center" class="btn btn-primary">Submit</button>
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
			loadSelectedArea('add_region', "");			
			$(document).ready(function() {
				
				$("#add_region").change(function(){
					var id = $(this).val();
					loadSelectedArea('add_province', id);
				});
				
				$("#add_province").change(function(){
					var id = $(this).val();
					loadSelectedArea('add_city', id);
				});
				
				$("#add_city").change(function(){
					var id = $(this).val();
					loadSelectedArea('add_brgy', id);
				});			
			});
			 
			
			function loadSelectedArea(request, id){				
				$.ajax({
					url:'get_data.php?request='+request+'&id='+id,
					success:function(data){
						$('#'+request).empty().append(data);
						
						if(request == "add_province"){
							loadSelectedArea('add_city', id);
							loadSelectedArea('add_brgy', id);
						}
						
						if(request == "add_city"){
							loadSelectedArea('add_brgy', id);
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