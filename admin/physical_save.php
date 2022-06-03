<?php   
    require_once 'includes/conn_to_ctris.php';
	require_once 'includes/conn.php';
	
	if(ISSET($_POST['submit'])){
        
		$center_id = $_POST['center_id'];
		$physical_description = strtoupper ($_POST['physical_description']);
	
		
		
		$qphysical = $conn->query("SELECT *FROM `physical_lib` WHERE `physical_description` = '$physical_description'  AND `center_id` = '$center_id' AND `deleted` = 'NO' ") or die(mysqli_error());
		$vphysical = $qphysical->num_rows;
	
		if($vphysical == 1)
		{
			echo '
				<script type = "text/javascript">
					alert("This physical description already exists for this center.");
					window.location = "physical.php";
				</script>
			';
		}
		else
		{
			$conn->query("INSERT INTO `physical_lib` VALUES('','$center_id', '$physical_description','NO')") or die(mysqli_error());
			echo '
				<script type = "text/javascript">
					alert("Successfully save physical description");
                    window.location = "physical.php";
					
				</script>
			';
		}
		
	}
	
?>