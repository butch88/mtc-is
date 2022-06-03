<?php   
    require_once 'includes/conn.php';

	if(ISSET($_POST['submit_edit'])){
        
		$center_id = $_POST['edit_center_id'];
		$center_name = $_POST['edit_center_name'];
        $manner_id = $_POST['edit_manner_id'];
		$manner_name = strtoupper($_POST['edit_manner_name']);
		
		
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

			$conn->query("UPDATE `manner_lib` SET `manner_name` = '$manner_name'  WHERE `manner_id` = '$manner_id'") or die(mysqli_error());
			echo '
				<script type = "text/javascript">
					alert("Successfully edited data");
                    window.location = "manner.php";
					
				</script>
			';
		}

	}
	
?>