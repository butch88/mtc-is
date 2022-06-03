		<!-- Left side column. contains the logo and sidebar -->
		<aside class="main-sidebar">
			<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">
			<!-- Sidebar user panel -->
				<div class="user-panel">
					<div class="pull-left image">
						<img src="../../ctris/empPhoto/<?php echo $user['myphoto'];?>"  class="img-circle" alt="User Image">
					</div>
					<div class="pull-left info">
						<p><?php echo $user['fname'].' '.$user['sname']; ?></p>
						<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
					</div>
				</div>

				<!-- sidebar menu: : style can be found in sidebar.less -->
				<ul class="sidebar-menu" data-widget="tree">
					<li class="header">MAIN NAVIGATION</li>
						<li class="active treeview">
							<a href="home.php">
								<i class="fa fa-dashboard"></i> <span>Dashboard</span>
							</a>				 
						</li>
						<li class="treeview">
							<a href="#">
								<i class="fa fa-users"></i>
								<span>Client</span>
								<span class="pull-right-container">
									<span class="label label-primary pull-right">4</span>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="minor_application.php"><i class="fa fa-circle-o"></i> Application</a></li>
								<li><a href="client.php"><i class="fa fa-circle-o"></i> Intake Sheet</a></li>								
							</ul>
						</li>
								
						<li class="treeview">
							<a href="#">
								<i class="fa fa-folder"></i> <span> Libraries</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
							<li><a href="user.php"><i class="fa fa-circle-o"></i> User's Management</a></li>


							</ul>
						</li>

						<li class="header">System</li>
						<li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Profile</span></a></li>
						<li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Change Password</span></a></li>
						<li><a href="logout.php"><i class="fa fa-circle-o text-aqua"></i> <span>Sign Out</span></a></li>
				</ul>
			</section>
    <!-- /.sidebar -->
		</aside>