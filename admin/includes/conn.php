<?php
	$conn = new mysqli('localhost', 'root', '', 'centers_db');
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
?>