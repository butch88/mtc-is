<?php   
    require_once 'includes/conn.php';

	if(ISSET($_POST['submit_edit'])){
        
		$center_id = $_POST['edit_center_id'];
		$center_name = $_POST['edit_center_name'];
        $case_id = $_POST['edit_case_id'];
		$case_name = strtoupper($_POST['edit_case_category']);
		
		
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

			$conn->query("UPDATE `case_lib` SET `case_name` = '$case_name'  WHERE `case_id` = '$case_id'") or die(mysqli_error());
			echo '
				<script type = "text/javascript">
					alert("Successfully edited data");
                    window.location = "case.php";
					
				</script>
			';
		}

	}
	
?>