<?php
	require_once 'includes/conn.php';
	$conn->query("UPDATE `manner_lib` SET  `deleted` = 'YES' WHERE manner_id = '$_REQUEST[manner_id]'") or die(mysqli_error());
    header('location: manner.php');

?>