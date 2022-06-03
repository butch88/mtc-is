<?php
	session_start();
	include 'includes/conn.php';
	include 'includes/conn_to_ctris.php';

	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = md5($_POST['password']);

		$sql = "SELECT * FROM userprofile WHERE empno = '$username' && password= '$password'";
		$query = $conn1->query($sql);

		if($query->num_rows == 1){
			$row = $query->fetch_assoc();
			$empno = $row['empno'];
			$ictms = "ICTMS";
			
			$sql1 = "SELECT * FROM user_lib WHERE empno = '$empno' && module= '$ictms'";
			$query1 = $conn->query($sql1);
			if ($query1->num_rows == 1)
			{
				$row1 = $query1->fetch_assoc();
				$_SESSION['user_id'] = $row1['empno'];
			}
			else
			{
				$_SESSION['error'] = 'You are not allowed to access this module';
				$row1 = $query1->fetch_assoc();
			}
		}
		else{
			
			$_SESSION['error'] = 'Invalid Username/Password';
			$row = $query->fetch_assoc();
		
		}
	}
	header('location: index.php');
?>



