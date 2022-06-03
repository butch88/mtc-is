<?php 
	include 'includes/conn.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$sql = "SELECT *FROM placement_lib JOIN center_lib ON placement_lib.center_id = center_lib.center_id WHERE placement_lib.placement_id = '$id'";
		
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();

		echo json_encode($row);
	}
?>
