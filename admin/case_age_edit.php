<?php   
    require_once 'includes/conn.php';

	if(ISSET($_POST['submit_edit'])){
        
		$center_id = $_POST['edit_center_id'];
		$case_id = $_POST['edit_case_id'];
		$case_sub_id = $_POST['edit_case_sub_id'];
		$case_age_id = $_POST['edit_case_age_id'];
		$age_from = $_POST['edit_age_from'];
		$middle_age = $_POST['edit_middle_age'];
		$age_to = $_POST['edit_age_to'];
		




			$conn->query("UPDATE `case_age_lib` SET `age_bracket_from` = '$age_from' , `middle_age` = '$middle_age' , `age_bracket_to` = '$age_to' WHERE `case_age_id` = '$case_age_id'") or die(mysqli_error());
			echo '
				<script type = "text/javascript">
					alert("Successfully edited data");
                    window.location = "case_age.php";
					
				</script>
			';


	}
	
?>