<?php   
    require_once 'includes/conn.php';

	if(ISSET($_POST['submit_edit'])){
        
		$center_id = $_POST['edit_center_id'];
		$case_id = $_POST['edit_case_id'];
		$case_sub_id = $_POST['edit_case_sub_id'];
		$case_sub_name =strtoupper( $_POST['edit_case_sub_name']);
		
		$qcase_sub = $conn->query("SELECT *FROM `case_sub_lib` WHERE `case_sub_name` = '$case_sub_name'  AND `center_id` = '$center_id' AND `case_id` = '$case_id' AND `deleted` = 'NO' ") or die(mysqli_error());
		$vcase_sub = $qcase_sub->num_rows;

		if($vcase_sub == 1)
		{
			echo '
				<script type = "text/javascript">
					alert("This case sub category already exists for this center.");
					window.location = "case_sub.php";
				</script>
			';
		}
		else
		{

			$conn->query("UPDATE `case_sub_lib` SET `case_sub_name` = '$case_sub_name'  WHERE `cs_id` = '$case_sub_id'") or die(mysqli_error());
			echo '
				<script type = "text/javascript">
					alert("Successfully edited data");
                    window.location = "case_sub.php";
					
				</script>
			';
		}

	}
	
?>