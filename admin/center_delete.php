<?php
	require_once 'includes/conn.php';
	$conn->query("UPDATE `center_lib` SET  `deleted` = 'YES' WHERE center_id = '$_REQUEST[center_id]'") or die(mysqli_error());
    header('location: center.php');

	?>