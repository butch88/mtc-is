<?php
	require_once 'includes/conn.php';
	$conn->query("UPDATE `case_lib` SET  `deleted` = 'YES' WHERE case_id = '$_REQUEST[case_id]'") or die(mysqli_error());
    header('location: case.php');

?>