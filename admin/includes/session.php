<?php
	 if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
	
	include 'includes/conn_to_ctris.php';

	if(!isset($_SESSION['user_id']) || trim($_SESSION['user_id']) == ''){
		header('location: index.php');
	}

	$sql = "SELECT * FROM userprofile WHERE empno = '".$_SESSION['user_id']."'";
	$query = $conn1->query($sql);
	$user = $query->fetch_assoc();
	
?>