<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>DSWD | MTA-IS</title>
	<?php include 'includes/session.php'; ?>
	<?php include 'includes/header.php'; ?>
	<?php $try1 = null; ?>
</head>

<body class="hold-transition skin-blue sidebar-mini">
	
	<div class="wrapper">
		<?php include 'includes/navbar.php'; ?>
		<?php include 'includes/sidebar.php'; ?>


		<?php
			$center_id =  $user['center_id']; 
		?>
  
	<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>
					Application
					<small>MINORS TRAVEL APPLICATION FORM</small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
					<li><a href="#">Client</a></li>
					<li class="active">Admission</li>
				</ol>
			</section>

			<!-- Main content -->
			<section class="content">
				<div class="row">
					<div class="col-xs-12">
						<div class="box">
							<div class="box-header">
							  <h3 class="box-title">Client Admission List</h3>
							</div>
							
							<div class="box-header" style="overflow:auto;">
								<a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New</a>
							</div>
			
							
							<div class="box-body">
								<table id="example1" class="table table-bordered table-striped" style="width:100%">
									<thead>
										<tr>
											<th>No</th>
											<th>Date</th>
											<th>T.C#</th>
											<th>Lastname</th>
											<th>Firstname</th>
											<th>Middlename</th>
											<th>Extension Name</th>
											<th>Age</th>
											<th>Status Of Birth</th>
											<th>Region</th>
											<th>Province</th>
											<th>City/Municipality</th>
											<th>Barangay</th>
											<th>Address</th>
											<th>Purpose of Travel</th>
											<th>Name of Travelling Companion</th>
											<th>Country of Destination</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php
											$count = 0;
											require 'includes/conn.php';
											$q_query = $conn->query("SELECT *FROM `tblminorinfo` WHERE `Deleted` = 'NO'") or die(mysqli_error());
											while($f_query = $q_query->fetch_array())
											{
												$count = $count+1;
							  
										?>
								
										<tr>
											<td><?php echo $count; ?></td>
											<td><?php echo $f_query['date'];?></td>
											<td><?php echo $f_query['tc_no'];?></td>
											<td><?php echo $f_query['minor_lastname'];?></td>
											<td><?php echo $f_query['minor_firstname'];?></td>
											<td><?php echo $f_query['minor_middlename'];?></td>
											<td><?php echo $f_query['minor_extensionname'];?></td>
											<td><?php echo $f_query['minor_age'];?></td>
											<td><?php echo $f_query['minor_statusofbirth'];?></td>
											<td><?php echo $f_query['minor_region'];?></td>
											<td><?php echo $f_query['minor_province'];?></td>
											<td><?php echo $f_query['minor_city'];?></td>
											<td><?php echo $f_query['minor_barangay'];?></td>
											<td><?php echo $f_query['minor_saddress'];?></td>
											<td><?php echo $f_query['reasonfortravelabroad'];?></td>
											<td><?php echo $f_query['companion_lastname']. ", ". $f_query['companion_firstname']. " ". $f_query['companion_middlename']." ". $f_query['companion_extensionname'];?></td>
											<td><?php echo $f_query['destination'];?></td>
																						
											<td>
												<button class="btn btn-success btn-sm edit btn-flat"  value = "<?php echo $f_query['mta_no']?>" ><i class="fa  fa-edit" aria-hidden="true"> </i> Edit</button>
												
												<button class="btn btn-warning btn-sm intake btn-flat"  value = "<?php echo $f_query['mta_no']?>" ><i class="fa  fa-edit" aria-hidden="true"> </i> Intake Sheet</button>
												
												<button class="btn btn-danger btn-sm delete btn-flat"  value = "<?php echo $f_query['mta_no']?>" ><i class="fa  fa-trash" aria-hidden="true"> </i> Delete</button>
											
											</td>
										</tr>
										
										<?php
											}
										?>
									</tbody>
									<tfoot>
										<tr>
											<th>No</th>
											<th>Date</th>
											<th>T.C#</th>
											<th>Lastname</th>
											<th>Firstname</th>
											<th>Middlename</th>
											<th>Extension Name</th>
											<th>Age</th>
											<th>Status Of Birth</th>
											<th>Region</th>
											<th>Province</th>
											<th>City/Municipality</th>
											<th>Barangay</th>
											<th>Address</th>
											<th>Purpose of Travel</th>
											<th>Name of Travelling Companion</th>
											<th>Country of Destination</th>
											<th>Action</th>
										</tr>
									</tfoot>
								</table>
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
	<?php include 'includes/admission_modal.php' ?>


</div>

	<?php include 'includes/script.php'; ?>
	

	





<script type = "text/javascript">
	$(document).ready(function(){	
			
			$result = $('<center><label>Deleting...</label></center>');
			$('#example1 tbody').on('click', '.delete', function (){
				$admission_id = $(this).attr('value');
				$(this).parents('td').empty().append($result);
				$('.delete').attr('disabled', 'disabled');
				setTimeout(function(){
					alert ("Sucessfully Deleted");
					window.location = 'admission_delete.php?admission_id=' + $admission_id;
				}, 1000);
				
			});

		});
</script>


<script>
$(function(){

  $('#example1 tbody').on('click', '.edit', function (){
    $('#edit').modal('show');
	var id = $(this).attr('value');
	getRowE(id);	
  });
 });


function getRowE(id){  
	
	$.ajax({
    type: 'POST',
    url: 'admission_get.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
		$('#edit_date_of_admission').val(response.Date_of_Admission);
		$('#edit_time_of_admission').val(response.Time_of_Admission);
		$('#edit_admissionID').val(response.Admission_ID);
		$('#edit_lastname').val(response.Lastname_Client);
		$('#edit_firstname').val(response.Firstname_Client);
		$('#edit_middlename').val(response.Middlename_Client);
		$('#edit_extension_name').val(response.ExtensionName_Client);
		$('#edit_age_of_client').val(response.Age_of_Client);
		$('#edit_address_of_client').val(response.Address_of_Client);
		$('#edit_referring_party').val(response.Referring_Party);
		$('#edit_address_of_referring_party').val(response.Referring_Address);
		$('#edit_admitting_social_worker').val(response.Admitting_Social_Worker);
		$('#edit_supervising_social_worker').val(response.Supervising_Social_Worker);
		

	}
  });
}
</script>

<script>
$(function(){

  $('#example1 tbody').on('click', '.intake', function (){ 
    var id = $(this).attr('value');
	window.location.href="client_add.php?id="+id;	
  });
 });


</script>	

	

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
  })
</script>



</body>
</html>