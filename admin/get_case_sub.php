<?php

    require_once 'includes/conn.php';
	
	if(isset($_POST['case_id'])){
		$case_id = $_POST['case_id'];
		$sql = "SELECT * FROM case_sub_lib WHERE case_id= '$case_id' AND deleted='NO'";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result))
            {
				echo "<option value =".$row['cs_id']." >".$row['case_sub_name']."</option>";
            }     	
	}
?>
