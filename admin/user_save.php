<?php   
    require_once 'includes/conn_to_ctris.php';
	require_once 'includes/conn.php';
	
	if(ISSET($_POST['submit'])){
        
		$empno = $_POST['user'];
		$usermodule = $_POST['usermodule'];
		$center_id = $_POST['center_id'];
		$userlevel = $_POST['userlevel'];
		
		$sql = "SELECT * FROM userprofile WHERE empno = '$empno'";
		$query = $conn1->query($sql);
		
		$row = $query->fetch_assoc();
		$surname = $row['sname'];
		$firstname = $row['fname'];
		$middlename = $row['mname'];
		
		
		$q_user = $conn->query("SELECT * FROM `user_lib` WHERE `empno` = '$empno'") or die(mysqli_error());
		$v_user = $q_user->num_rows;
		
		
		echo $v_user;
		if($v_user != 0){
			echo '
				<script type = "text/javascript">
					alert("Employee number already exist");
                    window.location = "user.php";
				</script>
			';
	
		}else{
			
			$conn->query("INSERT INTO `user_lib` VALUES('', '$surname', '$firstname', '$middlename', '$empno', '$usermodule', '$center_id','$userlevel','NO')") or die(mysqli_error());
			echo '
				<script type = "text/javascript">
					alert("Successfully saved data");
                    window.location = "user.php";
					
				</script>
			';
		}
	

		
	}
	
?>