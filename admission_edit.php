<?php   
    require_once 'includes/conn.php';

	if(ISSET($_POST['submit_edit'])){
        
		$admission_id =  $_POST['edit_admissionID'];
				
		$lastname = strtoupper ($_POST['edit_lastname']);
		$firstname =strtoupper ($_POST['edit_firstname']);
		$middlename = strtoupper ($_POST['edit_lastname']);
		$extension_name = strtoupper ($_POST['edit_extension_name']);
		$age_of_client = $_POST['edit_age_of_client'];
		$address_of_client =strtoupper ($_POST['edit_address_of_client']);
		$referring_party = strtoupper ($_POST['edit_referring_party']);
		$referring_address = strtoupper ($_POST['edit_address_of_referring_party']);
		$admitting_social_worker = strtoupper ($_POST['edit_admitting_social_worker']);
		$supervising_social_worker = strtoupper ($_POST['edit_supervising_social_worker']);
				
	

		$conn->query("UPDATE `admission_lib` SET `Lastname_Client` = '$lastname', `Firstname_Client` = '$firstname', `Middlename_Client` = '$middlename', `ExtensionName_Client` = '$extension_name', `Age_of_Client` = '$age_of_client', `Address_of_Client` = '$address_of_client', `Referring_Party` = '$referring_party', `Referring_Address` = '$referring_address',`Admitting_Social_Worker` = '$admitting_social_worker', `Supervising_Social_Worker` = '$supervising_social_worker' WHERE `Admission_ID` = '$admission_id'") or die(mysqli_error());
		echo '
			<script type = "text/javascript">
				alert("Successfully edited data");
                window.location = "admission_client.php";
			</script>
			';
		
	}
	
?>