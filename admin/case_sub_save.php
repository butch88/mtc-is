<?php   

	require_once 'includes/conn.php';
	
	if(ISSET($_POST['submit'])){
        
		$center_id = $_POST['center_id'];
		$case_id = $_POST['case_id'];
		$case_sub_name = strtoupper ($_POST['case_sub_name']);
	
		
		
		$qcase = $conn->query("SELECT *FROM `case_sub_lib` WHERE `case_sub_name` = '$case_sub_name'  AND  `case_id` = '$case_id' AND `center_id` = '$center_id' AND `deleted` = 'NO' ") or die(mysqli_error());
		$vcase = $qcase->num_rows;
	
		if($vcase == 1)
		{
			echo '
				<script type = "text/javascript">
					alert("This case category already exists for this center.");
					window.location = "case_sub.php";
				</script>
			';
		}
		else
		{
			$conn->query("INSERT INTO `case_sub_lib` VALUES('','$center_id','$case_id', '$case_sub_name','NO')") or die(mysqli_error());
			echo '
				<script type = "text/javascript">
					alert("Successfully save case category");
                    window.location = "case_sub.php";
					
				</script>
			';
		}
		
	}
	
?>