<?php   
    require_once 'includes/conn_to_ctris.php';
	require_once 'includes/conn.php';
	
	if(ISSET($_POST['submit'])){
        
		$empno = $_POST['user'];
		$userlevel = $_POST['userlevel'];
		
		$sql = "SELECT * FROM userprofile WHERE empno = '$empno'";
		$query = $conn1->query($sql);
		
		$row = $query->fetch_assoc();
		$surname = $row['sname'];
		$firstname = $row['fname'];
		$middlename = $row['mname'];
		
	

		$conn->query("INSERT INTO `user_lib` VALUES('', '$surname', '$firstname', '$middlename', '$empno','$userlevel', '$middle_name_c', '$ext_name_c', '$birthdate_c', '$contact_no_c', '$gender_c', '$inputProvince_c', '$inputCity_c', '$inputBarangay_c', '$age_c', '$relationship', '$last_name', '$first_name', '$middle_name', '$ext_name', '$birthdate', '$contact_no', '$age', '$facilitated_by', '$gender', '$inputProvince', '$inputCity', '$inputBarangay', '$fullname', '$social_worker', '$date_sw', '$approved', '$date_approved', '$tog', '$cash_grant', '$serv_provider', '$released', '$date_released', '$assigned_sw', '$busy_remarks', '$referral')") or die(mysqli_error());
			
			
			echo '
				<script type = "text/javascript">
					alert("Successfully saved data");
                    window.location = "user.php";
					
				</script>
			';
		
	}
	
?>