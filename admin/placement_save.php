<?php   
	require_once 'includes/conn.php';
	
	if(ISSET($_POST['submit'])){
        
		$center_id = $_POST['center_id'];
		$type_of_placement = strtoupper ($_POST['type_of_placement']);
	
		
		
		$qcase = $conn->query("SELECT *FROM `placement_lib` WHERE `type_of_placement` = '$type_of_placement'  AND `center_id` = '$center_id' AND `deleted` = 'NO' ") or die(mysqli_error());
		$vcase = $qcase->num_rows;
	
		if($vcase == 1)
		{
			echo '
				<script type = "text/javascript">
					alert("This type of placement already exists for this center.");
					window.location = "placement.php";
				</script>
			';
		}
		else
		{
			$conn->query("INSERT INTO `placement_lib` VALUES('','$center_id', '$type_of_placement','NO')") or die(mysqli_error());
			echo '
				<script type = "text/javascript">
					alert("Successfully save data.");
                    window.location = "placement.php";					
				</script>
			';
		}
		
	}
	
?>