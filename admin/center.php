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
					Centers
					<small>List of Centers</small>
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
					<div class="col-xs-12">
						<div class="box">
							<div class="box-header">
							  <h3 class="box-title">Center List</h3>
							</div>
							
							<div class="box-header" style="overflow:auto;">
								<a href="center_add.php"  class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New</a>
							</div>
			
							
							<div class="box-body">
								<table id="example1" class="table table-bordered table-striped" style="width:100%">
									<thead>
										<tr>
											<th>No</th>
											<th>Picture</th>
											<th>Center Name</th>
											<th>Center Head</th>
											<th>Contact No.</th>
											<th>Region</th>
											<th>Province</th>
											<th>Municipality</th>
											<th>Barangay</th>
											<th>Date Established</th>
											<th>Bed Capacity</th>
											<th>No. of Social Worker</th>
											<th>No. of House Parent</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php
											$count = 0;
											require 'includes/conn.php';
											$q_query = $conn->query("SELECT *FROM `center_lib`WHERE `deleted` = 'NO' AND center_id != '1'") or die(mysqli_error());
											while($f_query = $q_query->fetch_array())
											{
												$count = $count+1;
							  
										?>
								
										<tr>
											<td><?php echo $count; ?></td>
											<td>
												<img src="centers_images/<?php echo $f_query['picture']; ?>" class="img-thumbnail" width="75px" height="50px">
											</td>
											<td><?php echo $f_query['center_name'];?></td>
											<td><?php echo $f_query['center_head'];?></td>
											<td><?php echo $f_query['contact_no'];?></td>
											<td>
												<?php 
													$region = $f_query['region'];
													$q_query1 = $conn->query("SELECT *FROM `lib_regions` WHERE `region_code` = '$region'") or die(mysqli_error());
													$f_query1 = $q_query1->fetch_array();
													echo $f_query1['region_name'];	
												?>
											</td>
											<td>
												<?php 
													$province = $f_query['province'];
													$q_query1 = $conn->query("SELECT *FROM `lib_provinces` WHERE `prov_code` = '$province'") or die(mysqli_error());
													$f_query1 = $q_query1->fetch_array();
													echo $f_query1['prov_name'];
												?>
											</td>
											<td>
												<?php 
													$municipality =  $f_query['municipality'];
													$q_query1 = $conn->query("SELECT *FROM `lib_cities` WHERE `city_code` = '$municipality'") or die(mysqli_error());
													$f_query1 = $q_query1->fetch_array();
													echo $f_query1['city_name'];
												?>
											</td>
											<td>
												<?php 
													$barangay =  $f_query['barangay'];
													$q_query1 = $conn->query("SELECT *FROM `lib_brgy` WHERE `brgy_code` = '$barangay'") or die(mysqli_error());
													$f_query1 = $q_query1->fetch_array();
													echo $f_query1['brgy_name'];
												?>
											</td>
											<td><?php echo $f_query['date_established'];?></td>
											<td><?php echo $f_query['bed_capacity'];?></td>
											<td><?php echo $f_query['no_sw'];?></td>
											<td><?php echo $f_query['no_hp'];?></td>
											<td>
												<button class="btn btn-warning btn-sm view btn-flat"  value = "<?php echo $f_query['center_id']?>" ><i class="fa  fa-search-plus" aria-hidden="true"> </i> View</button>
												<button class="btn btn-success btn-sm edit btn-flat"  value = "<?php echo $f_query['center_id']?>" ><i class="fa  fa-edit" aria-hidden="true"> </i> Edit</button>
												<button class="btn btn-danger btn-sm delete btn-flat"  value = "<?php echo $f_query['center_id']?>" ><i class="fa  fa-trash" aria-hidden="true"> </i> Delete</button>
											</td>
										</tr>
										
										<?php
											}
										?>
									</tbody>
									<tfoot>
										<tr>
											<th>No</th>
											<th>Picture</th>
											<th>Center Name</th>
											<th>Center Head</th>
											<th>Contact No.</th>
											<th>Region</th>
											<th>Province</th>
											<th>Municipality</th>
											<th>Barangay</th>
											<th>Date Established</th>
											<th>Bed Capacity</th>
											<th>No. of Social Worker</th>
											<th>No. of House Parent</th>
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


</div>

	<?php include 'includes/script.php'; ?>
	

	





<script type = "text/javascript">
	$(document).ready(function(){	
			
			$result = $('<center><label>Deleting...</label></center>');
			$('#example1 tbody').on('click', '.delete', function (){
				$center_id = $(this).attr('value');
				$(this).parents('td').empty().append($result);
				$('.delete').attr('disabled', 'disabled');
				setTimeout(function(){
					alert ("Sucessfully Deleted");
					window.location = 'center_delete.php?center_id=' + $center_id;
				}, 1000);
				
			});

		});
</script>


<script>
$(function(){

  $('#example1 tbody').on('click', '.edit', function (){ 
    var id = $(this).attr('value');
	window.location.href="centers_edit.php?id="+id;	
  });
 });


</script>	






<script>
  $(function () {
    $('.select2').select2()
  })
</script>


<script>
$(function(){

  $('#example1 tbody').on('click', '.view', function (){
    var id = $(this).attr('value');
	window.location.href="centers_view.php?id="+id;	
  });
 });


</script>	







</body>
</html>