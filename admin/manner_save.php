<?php   
    require_once 'includes/conn_to_ctris.php';
	require_once 'includes/conn.php';
	
	if(ISSET($_POST['submit'])){
        
		$center_id = $_POST['center_id'];
		$manner_name = strtoupper ($_POST['manner_name']);
	
		
		
		$qmanner = $conn->query("SELECT *FROM `manner_lib` WHERE `manner_name` = '$manner_name'  AND `center_id` = '$center_id' AND `deleted` = 'NO' ") or die(mysqli_error());
		$vmanner = $qmanner->num_rows;
	
		if($vmanner == 1)
		{
			echo '
				<script type = "text/javascript">
					alert("This manner of relating to social worker already exists for this center.");
					window.location = "manner.php";
				</script>
			';
		}
		else
		{
			$conn->query("INSERT INTO `manner_lib` VALUES('','$center_id', '$manner_name','NO')") or die(mysqli_error());
			echo '
				<script type = "text/javascript">
					alert("Successfully save data");
                    window.location = "manner.php";
					
				</script>
			';
		}
		
	}
	
?>