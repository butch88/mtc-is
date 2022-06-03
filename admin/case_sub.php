<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>DSWD | CRCF-IS</title>
	<?php include 'includes/session.php'; ?>
	<?php include 'includes/header.php'; ?>
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
					Case Sub Category
					<small>List of Case Sub Category</small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
					<li><a href="#">Libraries</a></li>
					<li class="active">Case Sub Category</li>
				</ol>
			</section>

			<!-- Main content -->
			<section class="content">
				<div class="row">
					<div class="col-xs-12">
						<div class="box">
							<div class="box-header">
							  <h3 class="box-title">Case Sub Category List</h3>
							</div>
							
							<div class="box-header" style="overflow:auto;">
								<a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New</a>
							</div>
			
							
							<div class="box-body">
								<table id="example1" class="table table-bordered table-striped" style="width:100%">
									<thead>
										<tr>
											<th>No</th>
											<th>Center Name</th>											
											<th>Case Category</th>
											<th>Case Sub Category</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php
											$count = 0;
											require 'includes/conn.php';
											$q_query = $conn->query("SELECT *FROM case_sub_lib JOIN case_lib ON case_sub_lib.case_id = case_lib.case_id JOIN center_lib ON case_lib.center_id = center_lib.center_id WHERE case_sub_lib.deleted = 'NO'  ORDER BY center_name ASC ") or die(mysqli_error());
											
											
											while($f_query = $q_query->fetch_array())
											{
												$count = $count+1;
							  
										?>
								
										<tr>
											<td><?php echo $count; ?></td>
											<td><?php echo $f_query['center_name']?></td>
											<td><?php echo $f_query['case_name'];?></td>
											<td><?php echo $f_query['case_sub_name'];?></td>
											<td>												
												<button class="btn btn-success btn-sm edit btn-flat"  value = "<?php echo $f_query['cs_id']?>" ><i class="fa  fa-edit" aria-hidden="true"> </i> Edit</button>
												<button class="btn btn-danger btn-sm delete btn-flat"  value = "<?php echo $f_query['cs_id']?>" ><i class="fa  fa-trash" aria-hidden="true"> </i> Delete</button>
											</td>
										</tr>
										
										<?php
											}
										?>
									</tbody>
									<tfoot>
										<tr>
											<th>No</th>
											<th>Center Name</th>											
											<th>Case Category</th>
											<th>Case Sub Category</th>
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
	<?php include 'includes/case_sub_modal.php' ?>

</div>

	<?php include 'includes/script.php'; ?>
	




<script type = "text/javascript">
	$(document).ready(function(){	
			
			$result = $('<center><label>Deleting...</label></center>');
			$('#example1 tbody').on('click', '.delete', function (){
				$case_sub_id = $(this).attr('value');
				$(this).parents('td').empty().append($result);
				$('.delete').attr('disabled', 'disabled');
				setTimeout(function(){
					alert ("Sucessfully Deleted");
					window.location = 'case_sub_delete.php?case_sub_id=' + $case_sub_id;
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
    url: 'case_sub_get.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
		
		$('#edit_center_id').val(response.center_id);
		$('#edit_center_name').val(response.center_name);
		$('#edit_case_id').val(response.case_id);
		$('#edit_case_category').val(response.case_name);
		$('#edit_case_sub_id').val(response.cs_id);
		$('#edit_case_sub_name').val(response.case_sub_name);
		

	}
  });
}
</script>	

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
  })
</script>



</body>
</html>