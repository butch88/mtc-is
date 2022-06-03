<?php
	require_once 'includes/conn.php';
	$conn->query("UPDATE `offense_lib` SET  `deleted` = 'YES' WHERE offense_id = '$_REQUEST[offense_id]'") or die(mysqli_error());
    header('location: offense.php');
?>