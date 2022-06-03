<?php   
	require_once 'includes/conn.php';
	
	if(ISSET($_POST['submit'])){
        
		$center_id = $_POST['center_id'];
		$offense_name = strtoupper ($_POST['offense_name']);
	
		
		
		$qcase = $conn->query("SELECT *FROM `offense_lib` WHERE `offense_name` = '$offense_name'  AND `center_id` = '$center_id' AND `deleted` = 'NO' ") or die(mysqli_error());
		$vcase = $qcase->num_rows;
	
		if($vcase == 1)
		{
			echo '
				<script type = "text/javascript">
					alert("This offense already exists for this center.");
					window.location = "offense.php";
				</script>
			';
		}
		else
		{
			$conn->query("INSERT INTO `offense_lib` VALUES('','$center_id', '$offense_name','NO')") or die(mysqli_error());
			echo '
				<script type = "text/javascript">
					alert("Successfully save data.");
                    window.location = "offense.php";					
				</script>
			';
		}
		
	}
	
?>