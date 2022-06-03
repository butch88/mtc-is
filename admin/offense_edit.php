<?php   
    require_once 'includes/conn.php';

	if(ISSET($_POST['submit_edit'])){
        
		$center_id = $_POST['edit_center_id'];
		$center_name = $_POST['edit_center_name'];
        $offense_id = $_POST['edit_offense_id'];
		$offense_name = strtoupper($_POST['edit_offense_name']);
		
		
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

			$conn->query("UPDATE `offense_lib` SET `offense_name` = '$offense_name'  WHERE `offense_id` = '$offense_id'") or die(mysqli_error());
			echo '
				<script type = "text/javascript">
					alert("Successfully edited data.");
                    window.location = "offense.php";					
				</script>
			';
		}

	}
	
?>