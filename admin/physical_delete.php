<?php
	require_once 'includes/conn.php';
	$conn->query("UPDATE `physical_lib` SET  `deleted` = 'YES' WHERE physical_id = '$_REQUEST[physical_id]'") or die(mysqli_error());
    header('location: physical.php');

?>