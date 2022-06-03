<?php
	require_once 'includes/conn.php';
	$conn->query("UPDATE `admission_lib` SET  `Deleted` = 'YES' WHERE Admission_ID = '$_REQUEST[admission_id]'") or die(mysqli_error());
    header('location: admission.php');
?>