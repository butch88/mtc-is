<?php 
	include 'includes/conn.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$sql = "SELECT *FROM case_age_lib JOIN case_sub_lib ON case_age_lib.case_sub_id = case_sub_lib.cs_id JOIN case_lib ON case_sub_lib.case_id = case_lib.case_id JOIN center_lib ON case_lib.center_id = center_lib.center_id WHERE case_age_lib.deleted = 'NO' AND case_age_lib.case_age_id='$id'";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();

		echo json_encode($row);
	}
?>