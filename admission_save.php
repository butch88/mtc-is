<?php   
	require_once 'includes/conn.php';
	
	if(ISSET($_POST['submit'])){
        
		$center_id = $_POST['center_id'];
		
		$date_of_admission = $_POST['date_of_admission'];
		$time_of_admission = $_POST['time_of_admission'];
		$lastname = strtoupper ($_POST['lastname']);
		$firstname =strtoupper ($_POST['firstname']);
		$middlename = strtoupper ($_POST['lastname']);
		$extension_name = strtoupper ($_POST['extension_name']);
		$age_of_client = $_POST['age_of_client'];
		$address_of_client =strtoupper ($_POST['address_of_client']);
		$referring_party = strtoupper ($_POST['referring_party']);
		$address_of_referring_party = strtoupper ($_POST['address_of_referring_party']);
		$admitting_social_worker = strtoupper ($_POST['admitting_social_worker']);
		$supervising_social_worker = strtoupper ($_POST['supervising_social_worker']);
		$encoded_by = strtoupper ($_POST['encoded_by']);
		
		// auto generated admission id //
		    $qadmission_id = $conn->query("SELECT Admission_ID FROM admission_lib WHERE center_id = '$center_id' ORDER BY Admission_ID DESC") or die(mysqli_error());
            
            $fadmission_id = $qadmission_id->fetch_array();
            $admission_id = substr($fadmission_id ['Admission_ID'],5);
            $admission_id  = intval($admission_id );
            $admission_id  = $admission_id  + 1;
            if (strlen($admission_id ) == 1) {
                $admission_id = 'ADM' . '0'. $center_id . '000' . $admission_id;
            } 
            elseif (strlen($admission_id) == 2) {
                 $admission_id = 'ADM' .'0'. $center_id . '00' . $admission_id;
            }
            elseif (strlen($admission_id) == 3) {
                $admission_id = 'ADM' . '0'. $center_id . '0' . $admission_id;
            } 
            elseif (strlen($admission_id) == 4) {
                $admission_id = 'ADM' . '0'. $center_id . $admission_id;		
            } else 
            {
                $admission_id = 'ADM' . '0'. $center_id. $admission_id;
                    }
		
		
		//auto generated admission id //
		
		
		
		
		
			$conn->query("INSERT INTO `admission_lib` VALUES('','$admission_id','$date_of_admission','$time_of_admission','$lastname','$firstname','$middlename','$extension_name','$age_of_client','$address_of_client','$referring_party','$address_of_referring_party','$admitting_social_worker','$supervising_social_worker','$encoded_by','$center_id','NO')") or die(mysqli_error());
			echo '
				<script type = "text/javascript">
					alert("Successfully save data.");
                    window.location = "admission_client.php";					
				</script>
			';
		
		
	}
	
?>