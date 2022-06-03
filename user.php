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
								<a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New</a>
								
							</div>
			
							
            <div class="box-body">
              <table id="example2" class="table table-bordered">
                <thead>
					<th width="50%">Fullname</th>
					<th width="15%">User Level</th>
					<th width="20%">Action</th>
                </thead>
                <tbody>
                    <?php
						require 'includes/conn.php';
						$quser = $conn->query("SELECT *FROM `user_lib`") or die(mysqli_error());
						while($fuser = $quser->fetch_array()){
						$name =  $fuser['last_name']. ", " .  $fuser['first_name']. " " .  $fuser['middle_name']
					?>
                                          
				<tr>
					<td> <?php echo $name ?></td>	
					<td> <?php echo $fuser['userlevel']?> </td>
									
					<td class = "center" style = "text-align:center;">
				
                        <button class="btn btn-success btn-sm edit btn-flat" value = "<?php echo $fuser['user_id']?>"><i class="fa fa-edit" aria-hidden="true"> </i> Edit</button>                           
            
                        
						<a href ="#" class = "btn btn-danger btn-sm delete_id btn-flat" value = "<?php echo $fuser['user_id']?>"><i class="fa fa-trash" aria-hidden="true"> </i> Delete</a>
		
		
					</td>
				</tr>
                       
				<?php
					}
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
	<?php include 'includes/user_modal.php'; ?>
	




<script>
$(function(){

  $('#example2 tbody').on('click', '.edit', function (){
    $('#edit').modal('show');
    var id = $(this).attr('value');	
    getRow(id);
  });

  $('#example2 tbody').on('click', '.delete', function (){
    $('#delete').modal('show');
    var id = $(this).attr('value');	
    getRow(id);
  });
});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'user_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
	  $('#edit_userid').val(response.user_id);      
	  $('#edit_surname').val(response.last_name + ", " + response.first_name + " " + response.middle_name);
	  $('#edit_empno').val(response.empno);
	  $('select[name=edit_userlevel]').val(response.userlevel);
    }
  });
}

</script>
<script type = "text/javascript">
	$(document).ready(function(){         	
			
			$result = $('<center><label>Deleting...</label></center>');
			$('#example2 tbody').on('click', '.delete_id', function (){
				$user_id = $(this).attr('value');
				$(this).parents('td').empty().append($result);
				$('.delete_id').attr('disabled', 'disabled');
				$('.viewdetail_id').attr('disabled', 'disabled');
				setTimeout(function(){
					alert ("Sucessfully Deleted");
					window.location = 'delete_user.php?user_id=' + $user_id;
				}, 1000);
				
			});

		});
</script>



<script>
  $(function () {
    $('.select2').select2()
  })
</script>




</body>
</html>