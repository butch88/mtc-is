<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>DSWD | MTA-IS </title>
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
					Dashboard
					<small>
						MINORS TRAVEL APPLICATION -  INFORMATION SYSTEM	
					</small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
					<li class="active">Dashboard</li>
				</ol>
			</section>

			<!-- Main content -->
			<section class="content">
					<!-- Small boxes (Stat box) -->
				<div class="row">
					<div class="col-lg-3 col-xs-6">
						<!-- small box -->
						<div class="small-box bg-aqua">
							<div class="inner">
								<h3>							  
									<?php
										require 'includes/conn.php';
										//$q_query = $conn->query("SELECT *FROM `tblminorinfo`") or die(mysqli_error());
										//$row_cnt = $q_query->num_rows;								
										//echo $row_cnt;
									?>							  
								</h3>
							  
							  <p>ISSUED</p>
							</div>
							<div class="icon">
							  <i class="ion ion-bag"></i>
							</div>
							<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
					<!-- ./col -->
					<div class="col-lg-3 col-xs-6">
					  <!-- small box -->
						<div class="small-box bg-green">
							<div class="inner">
								<h3>Count<sup style="font-size: 20px">%</sup></h3>

								<p>Exempted</p>
							</div>
						<div class="icon">
						  <i class="ion ion-stats-bars"></i>
						</div>
						<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
					<!-- ./col -->
					<div class="col-lg-3 col-xs-6">
					  <!-- small box -->
						<div class="small-box bg-yellow">
							<div class="inner">
								<h3>Count</h3>

								<p>Issued as of Today</p>
							</div>
							<div class="icon">
								<i class="ion ion-person-add"></i>
							</div>
							<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
					<!-- ./col -->
					<div class="col-lg-3 col-xs-6">
						<!-- small box -->
						<div class="small-box bg-red">
							<div class="inner">
								<h3>COUNT</h3>

								<p>Exception as of Today</p>
							</div>
							<div class="icon">
								<i class="ion ion-pie-graph"></i>
							</div>
							<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					  </div>
					</div>
				<!-- ./col -->
				</div>
			  <!-- /.row -->
			  <!-- Main row -->
				<div class="row">       
					<section class="col-lg-6 connectedSortable">       

						<div class="box box-solid bg-green-gradient">
							<div class="box-header">
								<i class="fa fa-calendar"></i>
								<h3 class="box-title">Calendar</h3>
								<div class="pull-right box-tools">						
									<button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
									</button>
									<button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
									</button>
								</div>
							</div>
							<div class="box-body no-padding">
							  <!--The calendar -->
							  <div id="calendar" style="width: 100%"></div>
							</div>
						</div>
					</section>
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
