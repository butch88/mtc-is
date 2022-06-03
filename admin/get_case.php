<?php

    require_once 'includes/conn.php';
	
	if(isset($_POST['center_id'])){
		$center_id = $_POST['center_id'];
		$sql = "SELECT * FROM case_lib WHERE center_id= '$center_id' AND deleted='NO'";
        $result = mysqli_query($conn, $sql);
		echo "<option selected='selected'>SELECT ONE</option>";	
        while($row = mysqli_fetch_assoc($result))
            {
				echo "<option value =".$row['case_id']." >".$row['case_name']."</option>";
            }     	
	}
?>
