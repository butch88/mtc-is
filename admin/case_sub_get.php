<?php 
	include 'includes/conn.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$sql = "SELECT *FROM case_sub_lib JOIN case_lib ON case_sub_lib.case_id = case_lib.case_id JOIN center_lib ON case_lib.center_id = center_lib.center_id WHERE case_sub_lib.deleted = 'NO' AND case_sub_lib.cs_id ='$id'";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();

		echo json_encode($row);
	}
?>