<?php   
    require_once 'includes/conn_to_ctris.php';
	require_once 'includes/conn.php';
	
	if(ISSET($_POST['submit'])){
        
		$center_id = $_POST['center_id'];
		$case_name = strtoupper ($_POST['case_category']);
	
		
		
		$qcase = $conn->query("SELECT *FROM `case_lib` WHERE `case_name` = '$case_name'  AND `center_id` = '$center_id' AND `deleted` = 'NO' ") or die(mysqli_error());
		$vcase = $qcase->num_rows;
	
		if($vcase == 1)
		{
			echo '
				<script type = "text/javascript">
					alert("This case category already exists for this center.");
					window.location = "case.php";
				</script>
			';
		}
		else
		{
			$conn->query("INSERT INTO `case_lib` VALUES('','$center_id', '$case_name','NO')") or die(mysqli_error());
			echo '
				<script type = "text/javascript">
					alert("Successfully save case category");
                    window.location = "case.php";
					
				</script>
			';
		}
		
	}
	
?>