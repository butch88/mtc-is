<?php

    require_once 'includes/conn.php';
	
	if(isset($_POST['case_id'])){
		$case_id = $_POST['case_id'];
		
		$q_query = $conn->query("SELECT *FROM case_sub_lib WHERE case_id= '$case_id' AND deleted='NO' ORDER BY case_sub_name ") or die(mysqli_error());
		
		$row_cnt = $q_query->num_rows;	
		
		
		if ($row_cnt != 0 )
		{
		
			while($f_query = $q_query->fetch_array())
			{
				echo "<option value =".$f_query['cs_id']." >".$f_query['case_sub_name']."</option>";
			}
		}
		else
		{
			echo "<option value ='0'> N/A </option>";
			
		}
	}
?>
