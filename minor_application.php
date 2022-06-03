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


  
  
	<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>
					Application
					<small>
						MINORS TRAVEL APPLICATION FORM								
					</small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>					
					<li class="">Client</li>
					<li class="active">Application</li>
				</ol>
			</section>

			<!-- Main content -->
			<section class="content">
				<div class="row">
					<div class="col-xs-12">
						<div class="box">
							<div class="box-header">
							  <h3 class="box-title">Minors Travel Application List</h3>
							</div>
							
							<div class="box-header" style="overflow:auto;">
								<a href="client_add.php"  class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New</a>
							</div>
			
							
            <div class="box-body">
              <table id="example2" class="table table-bordered">
                <thead>
					<th width="50%">Client No.</th>
					<th width="15%">Queuing No.</th>
					<th width="15%">Screen By</th>
					<th width="50%">Report Date</th>
					<th width="15%">Last Name (Client)</th>
					<th width="15%">First Name (Client)</th>
					<th width="15%">Middle Name (Client)</th>
					<th width="15%">Extension Name (Client)</th>
					<th width="15%">Last Name (Beneficiary)</th>
					<th width="15%">First Name (Beneficiary)</th>
					<th width="15%">Middle Name (Beneficiary)</th>
					<th width="15%">Extension Name (Beneficiary)</th>
					<th width="15%">Amount</th>
					<th width="15%">Social Worker</th>
					<th width="20%">Action</th>
                </thead>
                <tbody>
                    <?php
						require 'includes/conn.php';
						//$quser = $conn->query("SELECT *FROM `user_lib`") or die(mysqli_error());
						//while($fuser = $quser->fetch_array()){
						//$name =  $fuser['last_name']. ", " .  $fuser['first_name']. " " .  $fuser['middle_name']
					?>
                                          
				<tr>
					<td> <?php echo "Name" ?></td>	
					<td> <?php echo "User Level"?> </td>
									
					<td class = "center" style = "text-align:center;">
				
                        <button class="btn btn-success btn-sm edit btn-flat" value = "<?php echo "User ID"?>"><i class="fa fa-edit" aria-hidden="true"> </i> Edit</button>                           
            
                        
						<a href ="#" class = "btn btn-danger btn-sm delete_id btn-flat" value = "<?php echo "User ID"?>"><i class="fa fa-trash" aria-hidden="true"> </i> Delete</a>
		
					</td>
				</tr>
                       
				<?php
					//}
				?>	
				
				
                </tbody>
              </table>
            </div>      
						</div>				
					</div>
				</div>
			</section>
	
		</div>
  
  s
	<footer class="main-footer">
		<div class="pull-right hidden-xs">
		<b>Version</b> 1.0
		</div>
		<strong>Copyright &copy; DSWD <a href="#">ICTMS-2021</a>.</strong> All rights
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