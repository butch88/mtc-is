<?php
	require_once 'includes/conn.php';
	$conn->query("UPDATE `placement_lib` SET  `deleted` = 'YES' WHERE placement_id = '$_REQUEST[placement_id]'") or die(mysqli_error());
    header('location: placement.php');
?>