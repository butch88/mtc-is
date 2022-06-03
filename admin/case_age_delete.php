<?php
	require_once 'includes/conn.php';
	$conn->query("UPDATE `case_age_lib` SET  `deleted` = 'YES' WHERE case_age_id = '$_REQUEST[case_age_id]'") or die(mysqli_error());
    header('location: case_age.php');

?>