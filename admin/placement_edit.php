<?php   
    require_once 'includes/conn.php';

	if(ISSET($_POST['submit_edit'])){
        
		$center_id = $_POST['edit_center_id'];
		$center_name = $_POST['edit_center_name'];
        $placement_id = $_POST['edit_placement_id'];
		$type_of_placement = strtoupper($_POST['edit_type_of_placement']);
		
		
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

			$conn->query("UPDATE `placement_lib` SET `type_of_placement` = '$type_of_placement'  WHERE `placement_id` = '$placement_id'") or die(mysqli_error());
			echo '
				<script type = "text/javascript">
					alert("Successfully edited data.");
                    window.location = "placement.php";					
				</script>
			';
		}

	}
	
?>