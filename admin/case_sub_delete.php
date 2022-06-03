<?php
	require_once 'includes/conn.php';
	$conn->query("UPDATE `case_sub_lib` SET  `deleted` = 'YES' WHERE cs_id = '$_REQUEST[case_sub_id]'") or die(mysqli_error());
    header('location: case_sub.php');

?>