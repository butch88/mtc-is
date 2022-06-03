<?php   
    require_once 'includes/conn.php';

	if(ISSET($_POST['submit_edit'])){
        
		$center_id = $_POST['edit_center_id'];
		$center_name = $_POST['edit_center_name'];
        $physical_id = $_POST['edit_physical_id'];
		$physical_description = strtoupper($_POST['edit_physical_description']);
		
		
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

			$conn->query("UPDATE `physical_lib` SET `physical_description` = '$physical_description'  WHERE `physical_id` = '$physical_id'") or die(mysqli_error());
			echo '
				<script type = "text/javascript">
					alert("Successfully edited data");
                    window.location = "physical.php";
					
				</script>
			';
		}

	}
	
?>