<?php   
    require_once 'includes/conn.php';
	
	
	
	if(ISSET($_POST['submit_client'])){      
		
		$center_id = $_POST['center_id'];
		$prev_center_id = "NONE";
		$lastname = strtoupper ($_POST['lastname']);
		$firstname = strtoupper ($_POST['firstname']);
		$middlename = strtoupper ($_POST['middlename']);
		$extension_name = strtoupper ($_POST['extension_name']);
		$birthday = $_POST['birthday'];
		$age = $_POST['age'];
		$sex = $_POST['sex'];
		
		$educational_attainment = strtoupper ($_POST['educational_attainment']);
		$educational_status =  $_POST['educational_status'];
		$sped =  $_POST['educational_sped'];
		
		$source_of_referral = strtoupper ($_POST['source_of_referral']);
		$place_of_origin = strtoupper ($_POST['place_of_origin']);
		$region =  $_POST['add_region'];
		$province =  $_POST['add_province'];
		$municipality =  $_POST['add_city'];
		$brgy =  $_POST['add_brgy'];
		$case_id = $_POST['case_id'];
		$cs_id = $_POST['cs_id'];
		$date_of_admission = $_POST['date_of_admission'];
		$d_years = $_POST['d_years'];
		$d_months = $_POST['d_years'];
		$d_days = $_POST['d_days'];
		$d_total_days = $_POST['d_total_days'];
		$type_of_placement = $_POST['type_of_placement'];
		$date_of_discharge = $_POST['date_of_discharge'];
		$total_no_days_spent = $_POST['d_total_days'];
		$total_discharge_days = $_POST['total_discharge_days'];
		$remarks =  strtoupper ($_POST['remarks']);
		$photo = "NONE";
		$deleted = "NO";
		
		/////
		if($_FILES["fileToUpload"]["name"]=="")		{             
			
			// auto generate ticket number
            $qclient = $conn->query("SELECT client_id FROM client_lib ORDER BY client_id") or die(mysqli_error());

            $fclient= $qclient->fetch_array();
            $client_id = substr($fclient['client_id'],6);
            $client_id= intval($client_id);
            $client_id = $client_id + 1;
            if (strlen($client_id) == 1) {
                $client_id = 'CRCF' . date("y") . '000' . $client_id;
            } 
            elseif (strlen($client_id) == 2) {
                 $client_id = 'CRCF' . date("y") . '00' . $client_id;
            }
            elseif (strlen($client_id) == 3) {
                $client_id = 'CRCF' . date("y") . '0' . $client_id;
            } 
            elseif (strlen($client_id) == 4) {
                $client_id = 'CRFC' . date("y")  . $client_id;		
            } else 
            {
                $client_id = 'CRCF' . date("y") . $client_id;
                    }
           //end			
			
			$conn->query("INSERT INTO `client_lib` VALUES('', '$client_id','$center_id', '$prev_center_id', '$lastname', '$firstname', '$middlename', '$extension_name', '$birthday', '$age', '$sex', '$educational_attainment', '$educational_status', '$sped', '$source_of_referral', '$place_of_origin', '$region', '$province', '$municipality', '$brgy', '$case_id', '$cs_id', '$date_of_admission', '$date_of_discharge', '$type_of_placement', '$d_years', '$d_months', '$d_days', '$d_total_days' , '$total_discharge_days' , '$remarks', '$photo', '$deleted')") or die(mysqli_error());
			
			echo '
				<script type = "text/javascript">
					alert("Successfully saved data.  ' . $client_id . ' ");
                    window.location = "client.php";					
				</script>
			';
		
		}
		else			
		{
            
			$target_dir = "centers_images/".$center_name;
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			$picture = $center_name.basename($_FILES["fileToUpload"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        
			// Check if image file is a actual image or fake image
			$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			if($check !== false) 
			{
				$uploadOk = 1;
				echo '
				<script type = "text/javascript">
					alert("File is an image - " . $check["mime"] . ".");
					window.location = "center.php";
				</script>';
			} 
			else 
			{
				$uploadOk = 0;
				echo '
				<script type = "text/javascript">
					alert("File is not an image.");
					window.location = "center.php";
				</script>';
			}
            
			//check file size
			if ($_FILES["fileToUpload"]["size"] > 15000000) 
			{
				//echo "Sorry, your file is too large.";
				$uploadOk = 0;
				echo '
				<script type = "text/javascript">
                    alert("Sorry, your file is too large.");
                    window.location = "center.php";
				</script>';
			}
             
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
				&& $imageFileType != "gif" && $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG"
				&& $imageFileType != "GIF" ) 
			{
				//echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				$uploadOk = 0;
				echo '
				<script type = "text/javascript">
					alert("Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
					window.location = "center.php";
				</script>';
			}
            
			if ($uploadOk == 0) 
			{
                //echo "Sorry, your file was not uploaded.";
	            // if everything is ok, try to upload file
                echo '
				<script type = "text/javascript">
                    alert(""Sorry, your file was not uploaded."");
                    window.location = "center.php";
                </script>';
	         } 
			else 
			{
				if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
				{
  
					$conn->query("INSERT INTO `center_lib` VALUES('', '$center_name','$center_head', '$contact_no', '$block', '$street', '$region', '$province', '$municipality', '$brgy', '$zipcode', '$date_established', '$bed_capacity', '$no_sw', '$no_hp', '$description', '$picture', '$deleted')") or die(mysqli_error());
					echo '
					<script type = "text/javascript">
						alert("Successfully saved data");
						window.location = "center.php";
					</script>
					';
		
				}
				else 
				{
						//echo "Sorry, there was an error uploading your file.";
						echo '
							<script type = "text/javascript">
							   alert("Sorry, there was an error uploading your file.");
							   window.location = "center.php";
						</script>';
				}
            
            
			}
		}
	}
	
?>