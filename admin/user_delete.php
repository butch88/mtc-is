<?php
	require_once 'includes/conn.php';
	$conn->query("UPDATE `user_lib` SET  `deleted` = 'YES' WHERE user_id = '$_REQUEST[user_id]'") or die(mysqli_error());
    header('location: user.php');

?>