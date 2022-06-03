<?php
	require_once 'includes/conn.php';
	$conn->query("DELETE FROM `user_lib` WHERE user_id = '$_REQUEST[user_id]'") or die(mysqli_error());
    header('location: user.php');
?>
