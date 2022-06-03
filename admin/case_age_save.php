<?php   
	require_once 'includes/conn.php';
	
	if(ISSET($_POST['submit'])){
        
		$center_id = $_POST['center_id'];
		$case_id = $_POST['case_id'];
		$case_sub_id = $_POST['cs_id'];
		$age_from = $_POST['age_from'];
		$middle_age = $_POST['middle_age'];
		$age_to = $_POST['age_to'];
	

	

		$conn->query("INSERT INTO `case_age_lib` VALUES('','$center_id','$case_id', '$case_sub_id','$age_from','$middle_age','$age_to','NO')") or die(mysqli_error());
			echo '
				<script type = "text/javascript">
					alert("Successfully save case category");
                    window.location = "case_age.php";
					
				</script>
			';
	
		
	}
	
?>