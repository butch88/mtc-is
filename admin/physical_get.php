<?php 
	include 'includes/conn.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$sql = "SELECT *FROM physical_lib JOIN center_lib ON physical_lib.center_id = center_lib.center_id WHERE physical_lib.physical_id = '$id'";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();

		echo json_encode($row);
	}
?>
