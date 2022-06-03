<?php
	session_start();
	include 'includes/conn.php';
	include 'includes/conn_to_ctris.php';

	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = md5($_POST['password']);

		$sql = "SELECT *FROM ctris.userprofile JOIN centers_db.user_lib ON ctris.userprofile.empno = centers_db.user_lib.empno WHERE ctris.userprofile.empno = '$username' && ctris.userprofile.password= '$password'";
		$query = $conn1->query($sql);
		
		
	

		if($query->num_rows !=0)
		{
			$row = $query->fetch_assoc();
			$center_id = $row['center_id'];
			echo $module;
			
			if ($center_id == '1')
			{
				$_SESSION['error'] = 'You are not allowed to access this module';
				$row = $query->fetch_assoc();
			}
			else 
			{				
				$_SESSION['user_id'] = $row['empno'];
			}
		}
		else
		{
			
			$_SESSION['error'] = 'Invalid Username/Password';
			$row = $query->fetch_assoc();
		
		}
	}
	header('location: index.php');
?>



