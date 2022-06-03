<?php 
	include 'includes/conn.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$sql = "SELECT *FROM offense_lib JOIN center_lib ON offense_lib.center_id = center_lib.center_id WHERE offense_lib.offense_id = '$id'";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();

		echo json_encode($row);
	}
?>
