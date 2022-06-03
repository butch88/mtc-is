<!DOCTYPE html>

<?php
  	session_start();
  	if(isset($_SESSION['user_id'])){
    	header('location:home.php');
  	}
?>


<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>DSWD | MTA-IS</title>
		<?php include 'includes/header.php'; ?>
	</head>

	<body class="hold-transition login-page">
		<div class="login-box">
			<div class="login-logo">
				<b>MTA-IS</b>
			</div>
	  
			<div class="login-box-body">
				<p class="login-box-msg">LOGIN HERE</p>

				<form action="login.php" method="POST">
					<div class="form-group has-feedback">
						<input type="text" class="form-control" name="username" placeholder="EMPLOYEE ID" required autofocus>
						<span class="fa fa-credit-card form-control-feedback"></span>
					</div>
				  <div class="form-group has-feedback">
					<input type="password" class="form-control" name="password" placeholder="PASSWORD">
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				  </div>
					<div class="row">
						<div class="col-xs-4">
							<button type="submit" name="submit" class="btn btn-primary  btn-block btn-flat" >Login</button>
						</div>
					</div>
				</form>
			</div>
			<?php
				if(isset($_SESSION['error'])){
					echo "
						<div class='callout callout-danger text-center mt20'>
							<p>".$_SESSION['error']."</p> 
						</div>
					";
					unset($_SESSION['error']);
				}
			?>
		</div>


		<?php include 'includes/script.php'; ?>
	</body>
</html>
