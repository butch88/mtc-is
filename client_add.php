<!DOCTYPE html>

<?php 
		include 'includes/conn.php';
?>



<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>DSWD | MTA-IS </title>
	<?php include 'includes/session.php'; ?>
	<?php include 'includes/header.php'; ?>
	<?php $try1 = null; ?>
</head>
<style>
	#show-me {
		display:none;
			}
</style>
<body class="hold-transition skin-blue sidebar-mini">
	
	<div class="wrapper">
		<?php include 'includes/navbar.php'; ?>
		<?php include 'includes/sidebar.php'; ?>


  
  
	<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>
					Minor's Application
					<small>Adding</small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
					<li class="active">Minor's Application Form</li>
				</ol>
			</section>
			
			<div class="pad margin no-print">
				<div class="callout callout-info" style="margin-bottom: 0!important;">
					<h4>Note:</h4>
					<b>All information collected shall be used for the purpose of monitoring and evaluation of the DSWD Minor's Travelling Abroad clients.				
					The same shall be issued in accordance with the provision of the National Archives of the Philippines Act.
					</b>
				</div>
			</div>
				
			<!-- Main content -->
			<section class="content">
				
				<div class="row">
					<div class="col-md-12">
						<div class="box box-solid">
							<div class="box-header with-border">
							  <h3 class="box-title">Please fill out all necessary details.</h3>
							</div>
						<!-- /.box-header -->
						<div class="box-body">
							<div class="box-group" id="accordion">
							<!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
								
								<form method = "POST" action = "save_identifying_information.php" enctype="multipart/form-data">								
									<div class="panel box box-primary">									
										<div class="box-header with-border">
											<h4 class="box-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
													Minor's Basic Information
												</a>
											</h4>
										</div>
										<div id="collapseOne" class="panel-collapse collapse in">
											<div class="box-body">
										
											
												<div class="form-group">
													<div class="form-row">											
														<div class="col-md-9">
															<img class="profile-user-img img-responsive img-square-o" src="uploads/NONE.png" alt="User profile picture" id="blah">
															<label for="exampleInputFile">Upload Photo</label>
															<input type="file" name="fileToUpload" id="fileToUpload" onchange="readURL(this);">														
														</div>										
													</div>
												</div>
																					
																	
													
										
												<div class="form-group">
													<div class="form-row">
														<div class="col-md-12">
															<label for="division_name">Minor's Name</label>							
														</div>               
													</div>
												</div>
										
												<div class="form-group">
													<div class="form-row">
														<div class="col-md-3">
															<input class="form-control" name="lastname" id="lastname" type="text" style="text-transform: uppercase;" >	
															<label style="font-size:12px;" ><i>Lastname</i></label>
														</div> 
														<div class="col-md-3">
															<input class="form-control" name="firstname" id="firstname" type="text" style="text-transform: uppercase;">
															<label style="font-size:12px;"><i>Firstname</i></label>												
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
													
														<div class="col-md-4">
															<label for="division_name">Date of Birth</label>							
															<input class="form-control" name="date_of_birth" id="date_of_birth" type="date" onchange="GetAge()">
															
														</div>
														
														<div class="col-md-4">
															<label for="division_name">Age</label>							
															<input class="form-control" name="age" id="age" type="text" style="text-transform: uppercase;" readonly>	  		
														</div>
														
														<div class="col-md-4">
															<label for="division_name">Sex</label>		
															<select class="form-control" name="sex" id="sex" >
																<option value="" selected="selected">SELECT ONE</option>
																<option value="MALE">MALE</option>
																<option value="FEMALE">FEMALE</option>
															</select>	  		
														</div>											
													</div>								
												</div>
											
											
												<div class="form-group">
													<div class="form-row">
														
														<div class="col-md-4">
															<label for="division_name">Status of Birth</label>		
															<select class="form-control" name="sex" id="sex" >
																<option value="" selected="selected">SELECT ONE</option>
																<option value="MALE">Legitimate</option>
																<option value="FEMALE">Illegitimate</option>
															</select>	  		
														</div>	
														
														<div class="col-md-4">
															<label for="division_name">With Special needs</label>		
															<select class="form-control" name="sex" id="sex" >
																<option value="" selected="selected">SELECT ONE</option>
																<option value="MALE">Yes</option>
																<option value="FEMALE">No</option>
															</select>	  		
														</div>	
														
														<div class="col-md-4">
															<label for="division_name">Adopted SPOC No.</label>							
															<input class="form-control" name="age" id="age" type="text" style="text-transform: uppercase;">	  		
														</div>
													
																							
													</div>								
												</div>
											
											
				
												<div class="form-group">
													<div class="form-row">
														<div class="col-md-12">
															<hr>
															<h5 class="box-title"> <b>Address</b></h5>
														</div>
													</div>							
												</div>
												<div class="form-group">
													<div class="form-row">
														<div class="col-md-12">
															<input class="form-control" name="no_street" id="no_street" type="text" style="text-transform: uppercase;">	
															<label style="font-size:12px; "><i>No/Lot/Block/Street</i></label>
														</div>																						
													</div>
												</div>
											
												<div class="form-group">
													<div class="form-row">
														<div class="col-md-3">											
															<select class="form-control styleFontSelect fieldStyle styleFont" name="region" id="region" >
																<option value='' selected>REGION</option>
															</select>
															<label style="font-size:12px; "><i>Region</i></label>													
														</div>
														<div class="col-md-3">											
															<select class="form-control" name="province" id="province" >
																<option value='' selected>PROVINCE</option>
															</select>
															<label style="font-size:12px; "><i>Province</i></label>												
														</div>
														<div class="col-md-3">											
															<select class="form-control" name="city" id="city" >
																<option value='' selected>CITY/MUNICIPALITY</option>								
															</select>
															<label style="font-size:12px; "><i>Municipality</i></label>												
														</div>
														<div class="col-md-3">											
															<select class="form-control" name="brgy" id="brgy" >
																<option value='' selected>BARANGAY</option>								
															</select>
															<label style="font-size:12px; "><i>Barangay</i></label>												
														</div>																						
													</div>
												</div>
												
												<div class="form-group">
													<div class="form-row">
														<div class="col-md-12">
															<hr>
															<h5 class="box-title"> <b>Contact No.</b></h5>
														</div>
													</div>							
												</div>
											
												<div class="form-group">
													<div class="form-row">
														<div class="col-md-3">
															<input class="form-control" name="mobile_no" id="mobile_no" type="text" style="text-transform: uppercase;">	
															<label style="font-size:12px; "><i>Local Phone No.</i></label>
														</div>

														<div class="col-md-3">
															<input class="form-control" name="landline_no" id="landline_no" type="text" style="text-transform: uppercase;">	
															<label style="font-size:12px; "><i>Phone Number Abroad</i></label>
														</div>
													</div>
												</div>
											</div>
										
										<div class="box-header with-border">
											<h4 class="box-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
													Parent / Guardian Information
												</a>
											</h4>
										</div>
											
												<div class="form-group">
													<div class="form-row">
														<div class="col-md-12">
															<label for="division_name">Father's Inforamtion</label>							
														</div>               
													</div>
												</div>
										
												<div class="form-group">
													<div class="form-row">
														<div class="col-md-3">
															<input class="form-control" name="lastname" id="lastname" type="text" style="text-transform: uppercase;" >	
															<label style="font-size:12px;" ><i>Lastname</i></label>
														</div> 
														<div class="col-md-3">
															<input class="form-control" name="firstname" id="firstname" type="text" style="text-transform: uppercase;">
															<label style="font-size:12px;"><i>Firstname</i></label>												
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
												
												<div class="form-row">
														
														<div class="col-md-3">
															<label for="division_name">Age</label>							
															<input class="form-control" name="age" id="age" type="text" style="text-transform: uppercase;">	  		
														</div>
													
														<div class="col-md-3">
															<label for="division_name">Occupation</label>							
															<input class="form-control" name="age" id="age" type="text" style="text-transform: uppercase;">	  		
														</div>
														<div class="col-md-3">
															<label for="division_name">Father's Valid ID</label>		
															<select class="form-control" name="sex" id="sex" >
																<option value="" selected="selected">SELECT ONE</option>
																<option value="MALE">Legitimate</option>
																<option value="FEMALE">Illegitimate</option>
															</select>	  		
														</div>
														<div class="col-md-3">
															<label for="division_name">Valid ID Number</label>		
															<select class="form-control" name="sex" id="sex" >
																<option value="" selected="selected">SELECT ONE</option>
																<option value="MALE">Legitimate</option>
																<option value="FEMALE">Illegitimate</option>
															</select>	  		
														</div>															
												</div>
												<div class="form-group">
													<div class="form-row">
														<div class="col-md-12">
															<hr>
															<h5 class="box-title"> <b>Address</b></h5>
														</div>
													</div>							
												</div>
												<div class="form-group">
													<div class="form-row">
														<div class="col-md-3">											
															<select class="form-control styleFontSelect fieldStyle styleFont" name="region" id="region" >
																<option value='' selected>REGION</option>
															</select>
															<label style="font-size:12px; "><i>Region</i></label>													
														</div>
														<div class="col-md-3">											
															<select class="form-control" name="province" id="province" >
																<option value='' selected>PROVINCE</option>
															</select>
															<label style="font-size:12px; "><i>Province</i></label>												
														</div>
														<div class="col-md-3">											
															<select class="form-control" name="city" id="city" >
																<option value='' selected>CITY/MUNICIPALITY</option>								
															</select>
															<label style="font-size:12px; "><i>Municipality</i></label>												
														</div>
														<div class="col-md-3">											
															<select class="form-control" name="brgy" id="brgy" >
																<option value='' selected>BARANGAY</option>								
															</select>
															<label style="font-size:12px; "><i>Barangay</i></label>												
														</div>																						
													</div>
												</div>
											
												<div class="form-group">
													<div class="form-row">
														<div class="col-md-12">
															<label for="division_name">Mothers's Inforamtion</label>							
														</div>               
													</div>
												</div>
										
												<div class="form-group">
													<div class="form-row">
														<div class="col-md-3">
															<input class="form-control" name="lastname" id="lastname" type="text" style="text-transform: uppercase;" >	
															<label style="font-size:12px;" ><i>Lastname</i></label>
														</div> 
														<div class="col-md-3">
															<input class="form-control" name="firstname" id="firstname" type="text" style="text-transform: uppercase;">
															<label style="font-size:12px;"><i>Firstname</i></label>												
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
												
												<div class="form-row">
														
														<div class="col-md-3">
															<label for="division_name">Age</label>							
															<input class="form-control" name="age" id="age" type="text" style="text-transform: uppercase;">	  		
														</div>
													
														<div class="col-md-3">
															<label for="division_name">Occupation</label>							
															<input class="form-control" name="age" id="age" type="text" style="text-transform: uppercase;">	  		
														</div>
														<div class="col-md-3">
															<label for="division_name">Father's Valid ID</label>		
															<select class="form-control" name="sex" id="sex" >
																<option value="" selected="selected">SELECT ONE</option>
																<option value="MALE">Legitimate</option>
																<option value="FEMALE">Illegitimate</option>
															</select>	  		
														</div>
														<div class="col-md-3">
															<label for="division_name">Valid ID Number</label>		
															<select class="form-control" name="sex" id="sex" >
																<option value="" selected="selected">SELECT ONE</option>
																<option value="MALE">Legitimate</option>
																<option value="FEMALE">Illegitimate</option>
															</select>	  		
														</div>															
												</div>
												<div class="form-group">
													<div class="form-row">
														<div class="col-md-12">
															<hr>
															<h5 class="box-title"> <b>Address</b></h5>
														</div>
													</div>							
												</div>
												<div class="form-group">
													<div class="form-row">
														<div class="col-md-3">											
															<select class="form-control styleFontSelect fieldStyle styleFont" name="region" id="region" >
																<option value='' selected>REGION</option>
															</select>
															<label style="font-size:12px; "><i>Region</i></label>													
														</div>
														<div class="col-md-3">											
															<select class="form-control" name="province" id="province" >
																<option value='' selected>PROVINCE</option>
															</select>
															<label style="font-size:12px; "><i>Province</i></label>												
														</div>
														<div class="col-md-3">											
															<select class="form-control" name="city" id="city" >
																<option value='' selected>CITY/MUNICIPALITY</option>								
															</select>
															<label style="font-size:12px; "><i>Municipality</i></label>												
														</div>
														<div class="col-md-3">											
															<select class="form-control" name="brgy" id="brgy" >
																<option value='' selected>BARANGAY</option>								
															</select>
															<label style="font-size:12px; "><i>Barangay</i></label>												
														</div>																						
													</div>
												</div>
						
						
										<div class="box-header with-border">
											<h4 class="box-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
													Travelling Companion
												</a>
											</h4>
										</div>
										
										<div class="form-group">
													<div class="form-row">
														<div class="col-md-12">
															<label for="division_name">Travelling Companion Inforamtion</label>							
														</div>               
													</div>
												</div>
										
												<div class="form-group">
													<div class="form-row">
														<div class="col-md-3">
															<input class="form-control" name="lastname" id="lastname" type="text" style="text-transform: uppercase;" >	
															<label style="font-size:12px;" ><i>Lastname</i></label>
														</div> 
														<div class="col-md-3">
															<input class="form-control" name="firstname" id="firstname" type="text" style="text-transform: uppercase;">
															<label style="font-size:12px;"><i>Firstname</i></label>												
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
												
												
												<div class="form-row">
														
														<div class="col-md-3">
															<label for="division_name">Age</label>							
															<input class="form-control" name="age" id="age" type="text" style="text-transform: uppercase;">	  		
														</div>
													
														<div class="col-md-3">
															<label for="division_name">Occupation</label>							
															<input class="form-control" name="age" id="age" type="text" style="text-transform: uppercase;">	  		
														</div>
														<div class="col-md-3">
															<label for="division_name">Passport No</label>		
															<select class="form-control" name="sex" id="sex" >
																<option value="" selected="selected">SELECT ONE</option>
																<option value="MALE">Legitimate</option>
																<option value="FEMALE">Illegitimate</option>
															</select>	  		
														</div>
														<div class="col-md-3">
															<label for="division_name">Validity </label>		
															<select class="form-control" name="sex" id="sex" >
																<option value="" selected="selected">SELECT ONE</option>
																<option value="MALE">Legitimate</option>
																<option value="FEMALE">Illegitimate</option>
															</select>	  		
														</div>															
												</div>
												
												
												<div class="form-row">
														
														<div class="col-md-12">
															<label for="division_name">Relationship to Minor</label>							
															<input class="form-control" name="age" id="age" type="text" style="text-transform: uppercase;">	  		
														</div>
													
																								
												</div>
												
												<div class="form-group">
													<div class="form-row">
														<div class="col-md-12">
															<hr>
															<h5 class="box-title"> <b>Address</b></h5>
														</div>
													</div>							
												</div>
												
												<div class="form-group">
													<div class="form-row">
														<div class="col-md-3">											
															<select class="form-control styleFontSelect fieldStyle styleFont" name="region" id="region" >
																<option value='' selected>REGION</option>
															</select>
															<label style="font-size:12px; "><i>Region</i></label>													
														</div>
														<div class="col-md-3">											
															<select class="form-control" name="province" id="province" >
																<option value='' selected>PROVINCE</option>
															</select>
															<label style="font-size:12px; "><i>Province</i></label>												
														</div>
														<div class="col-md-3">											
															<select class="form-control" name="city" id="city" >
																<option value='' selected>CITY/MUNICIPALITY</option>								
															</select>
															<label style="font-size:12px; "><i>Municipality</i></label>												
														</div>
														<div class="col-md-3">											
															<select class="form-control" name="brgy" id="brgy" >
																<option value='' selected>BARANGAY</option>								
															</select>
															<label style="font-size:12px; "><i>Barangay</i></label>												
														</div>																						
													</div>
												</div>
				
												<div class="box-header with-border">
													<h4 class="box-title">
														<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
															Travel Information
														</a>
													</h4>
												</div>
												
												<div class="form-row">
														
													
														<div class="col-md-6">
															<label for="division_name">Destination </label>		
															<select class="form-control" name="sex" id="sex" >
																<option value="" selected="selected">SELECT ONE</option>
																<option value="MALE">Legitimate</option>
																<option value="FEMALE">Illegitimate</option>
															</select>	  		
														</div>
														<div class="col-md-6">
															<label for="division_name">Duration of Stay</label>		
															<select class="form-control" name="sex" id="sex" >
																<option value="" selected="selected">SELECT ONE</option>
																<option value="MALE">Legitimate</option>
																<option value="FEMALE">Illegitimate</option>
															</select>	  		
														</div>															
												</div>
												
												<div class="form-row">
														
													
														<div class="col-md-6">
															<label for="division_name">Destination </label>		
															<select class="form-control" name="sex" id="sex" >
																<option value="" selected="selected">SELECT ONE</option>
																<option value="MALE">Legitimate</option>
																<option value="FEMALE">Illegitimate</option>
															</select>	  		
														</div>
														<div class="col-md-6">
															<label for="division_name">Duration of Stay</label>		
															<select class="form-control" name="sex" id="sex" >
																<option value="" selected="selected">SELECT ONE</option>
																<option value="MALE">Legitimate</option>
																<option value="FEMALE">Illegitimate</option>
															</select>	  		
														</div>															
												</div>
												<div class="form-row">
														
														<div class="col-md-12">
															<label for="division_name">Reasons for Travel Abroad</label>							
															<input class="form-control" name="age" id="age" type="text" style="text-transform: uppercase;">	  		
														</div>
													
																						
												</div>
												
												<div class="form-row">
														
														<div class="col-md-12">
															<label for="division_name">Where the minor intends to stay during his/her travel and with whom (please indicate names, complete address and phone numbers)</label>							
																<textarea class="form-control" rows="2" name="description" id="description" style="text-transform: uppercase;"></textarea>		 		
														</div>
													
																						
												</div>
												
												<br>
												
												
									
										
										<div class="box-footer">				
											<button type="submit" name="submit_client" id="submit_client" class="btn btn-primary pull-right">Save</button>
										</div>
									</div>
			
							
									
									
								</div>
							</form>
								

		
	
	
		
							</div>
						</div>

						</div>

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
	

<script type="text/javascript">
		var siblings_rowid = 0;
        function GetDays(){
                var current_date = new Date();
                var date_of_admission = new Date(document.getElementById("date_of_admission").value);				

				
				var years =  current_date.getYear()  - date_of_admission.getYear();
				var months = Math.abs (current_date.getMonth() - date_of_admission.getMonth());
				var days =  Math.abs (current_date.getDate()  - date_of_admission.getDate());
				document.getElementById("d_total_days").value = Math.abs((current_date - date_of_admission) / (24 * 3600 * 1000));
				
				
				document.getElementById("d_years").value = years;
				document.getElementById("d_months").value = months;
				document.getElementById("d_days").value = days;
			
				document.getElementById("d_total_days").value = Math.round(Math.abs((current_date - date_of_admission) / (24 * 3600 * 1000)));
		}
		
		function GetAge(){
                var current_date = new Date();
                var birthday = new Date(document.getElementById("date_of_birth").value);				
				
				var current_month = current_date.getMonth();
				var current_day = current_date.getDate();
				
				var birthday_month = birthday.getMonth();
				var birthday_date = birthday.getDate();
				
				if ((current_month == birthday_month) && (current_day == birthday_date ))
				{
					var years = Math.round((current_date - birthday)/31557600000);
					document.getElementById("age").value = years;
				}
				else
				{
					var years = Math.floor((current_date - birthday)/31557600000);
					document.getElementById("age").value = years;
					
				}
				
				
	
			
		}
		
		function GetAgeF(){
                var f_current_date = new Date();
                var f_birthday = new Date(document.getElementById("f_date_of_birth").value);				
				
				var f_current_month = f_current_date.getMonth();
				var f_current_day = f_current_date.getDate();
				
				var f_birthday_month = f_birthday.getMonth();
				var f_birthday_date = f_birthday.getDate();
				
				if ((f_current_month == f_birthday_month) && (f_current_day == f_birthday_date ))
				{
					var f_years = Math.round((f_current_date - f_birthday)/31557600000);
					document.getElementById("f_age").value = f_years;
				}
				else
				{
					var f_years = Math.floor((f_current_date - f_birthday)/31557600000);
					document.getElementById("f_age").value = f_years;
					
				}
						
		}
		
		function GetAgeM(){
                var m_current_date = new Date();
                var m_birthday = new Date(document.getElementById("m_date_of_birth").value);				
				
				var m_current_month = m_current_date.getMonth();
				var m_current_day = m_current_date.getDate();
				
				var m_birthday_month = m_birthday.getMonth();
				var m_birthday_date = m_birthday.getDate();
				
				if ((m_current_month == m_birthday_month) && (m_current_day == m_birthday_date ))
				{
					var m_years = Math.round((m_current_date - m_birthday)/31557600000);
					document.getElementById("m_age").value = m_years;
				}
				else
				{
					var m_years = Math.floor((m_current_date - m_birthday)/31557600000);
					document.getElementById("m_age").value = m_years;
					
				}
						
		}
		
	
		function getRowID(row){
			siblings_rowid = row.rowIndex - 1;
		}
		
		
	
</script>



	
<script>
			loadSelectedArea('region', "");			
			$(document).ready(function() {
				
				$("#region").change(function(){
					var id = $(this).val();
					loadSelectedArea('province', id);
				});
				
				$("#province").change(function(){
					var id = $(this).val();
					loadSelectedArea('city', id);
				});
				
				$("#city").change(function(){
					var id = $(this).val();
					loadSelectedArea('brgy', id);
				});			
			});
			 
			
			function loadSelectedArea(request, id){				
				$.ajax({
					url:'get_data.php?request='+request+'&id='+id,
					success:function(data){
						$('#'+request).empty().append(data);
						
						if(request == "province"){
							loadSelectedArea('city', id);
							loadSelectedArea('brgy', id);
						}
						
						if(request == "city"){
							loadSelectedArea('brgy', id);
						}
					}
				});
			}
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$(document).on("change","#case_id", function(){
			var case_id= this.value;
			if(case_id != '')  {
				$.ajax
				({
					type: "POST",
					url: "get_case_sub.php",
					data: "case_id="+ case_id,
					success: function(option)
					{					
						$("#cs_id").html(option);
					}
				});
				
			}
			else
			{
				$("#cs_id").html("<option value=''>-- No Sub Category --</option>");
			}
			return false;
		});
		
	
});
</script>

<script>
	var rowcount = $("#RowCountSiblings").val();

	
    $(function () {
            
			$(".AddRow").click(function () {
				rowcount++;
				
                $(this).closest('table').find('tr:last').prev().after('<tr id="'+rowcount+'" onclick="getRowID(this)"><td><input type="text" id="family_name'+rowcount+'" name="family_name[]" class="form-control border-input text-center" value="" style="text-transform: uppercase;" /></td><td><input type="text" id="family_relationship'+rowcount+'" name="family_relationship[]" class="form-control border-input text-center"  style="text-transform: uppercase;"/></td><td><select class="form-control" id="family_sex'+rowcount+'" name="family_sex[]"><option value="" selected="selected">SELECT ONE</option><option value="MALE">MALE</option><option value="FEMALE">FEMALE</option></select></td><td><input type="date" id="family_date_of_birth'+rowcount+'" name="family_date_of_birth[]" class="form-control border-input text-center " value=""/></td><td><input type="text" id="family_age'+rowcount+'" name="family_age[]" class="form-control border-input text-center"/></td><td><input type="text" id="family_address'+rowcount+'" name="family_address[]" class="form-control border-input text-center"  style="text-transform: uppercase;" /></td><td><input type="text" id="family_contact_no'+rowcount+'" name="family_contact_no[]" class="form-control border-input text-center"  style="text-transform: uppercase;" /></td>  <td><input type="text" id="family_educational_attainment'+rowcount+'" name="family_educational_attainment[]" class="form-control border-input text-center"  style="text-transform: uppercase;"/></td><td><input type="text" id="family_occupation'+rowcount+'" name="family_occupation[]" class="form-control border-input text-center"  style="text-transform: uppercase;"/></td><td><input type="text" id="family_income'+rowcount+'" name="family_income[]" text="number" class="form-control border-input text-center"  style="text-transform: uppercase;"/></td><td><a href="#" class="removeRow"><center><i class="fa fa-minus-square fa-fw"></i></center></a></td></tr> ');
                $("#RowCountSiblings").val(rowcount);
                return false;
            });
			
            $("#tblFamily").on('click','.removeRow',function(){
                $(this).parent().parent().remove();
               
				rowcount--;
				 $("#RowCountSiblings").val(rowcount);
            });   
			
           
			

        }); 
</script>

<script type="text/javascript">
	function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
    
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>

<script>
  $(function () {
    $('.select2').select2()
  })
  
  
	//iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
	
	
	//Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
</script>


<script>
	$('.btnNext').click(function(){
		$('.nav-tabs > .active').next('li').find('a').trigger('click');
	});

	$('.btnPrevious').click(function(){
		$('.nav-tabs > .active').prev('li').find('a').trigger('click');	
	});
</script>

<script>
	$(document).ready(function() {
	   $('input[type="radio"]').click(function() {
		   if($(this).attr('id') == 'watch-me') {
				$('#show-me').show();
				$('#show-bday').hide();
		   }
		   else {
				$('#show-me').hide();
				$('#show-bday').show();
		   }
	   });
	});
</script>

</body>
</html>



