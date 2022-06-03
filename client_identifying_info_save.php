<?php   
    require_once 'includes/conn.php';
	
	
	
	if(ISSET($_POST['submit_client'])){      
		
		$center_id = $_POST['center_id'];
		$prev_center_id = "NONE";
		$date_of_intake = $_POST['date_of_intake'];
		$admission_type = $_POST['admission_type'];		
		
		
		//identifying
		
		$lastname = strtoupper ($_POST['lastname']);
		$firstname = strtoupper ($_POST['firstname']);
		$middlename = strtoupper ($_POST['middlename']);
		$extension_name = strtoupper ($_POST['extension_name']);
		$alias = strtoupper ($_POST['alias']);
		
		$sex = $_POST['sex'];
		$religion  = strtoupper ($_POST['religion']);
		$date_of_birth = $_POST['date_of_birth'];
		$age = $_POST['age'];
		$place_of_birth  = strtoupper ($_POST['place_of_birth']);
		
		
		$no_street =   strtoupper ($_POST['no_street']);
		$region =  $_POST['region'];
		$province =  $_POST['province'];
		$city =  $_POST['city'];
		$brgy =  $_POST['brgy'];
		
		$mobile_no = $_POST['mobile_no'];
		$landline_no = $_POST['landline_no'];
		
		
		$educational_attainment = strtoupper ($_POST['educational_attainment']);
		$educational_status = $_POST['educational_status'];
		$educational_sped = $_POST['educational_sped'];
		$name_of_school = strtoupper ($_POST['name_of_school']);
		$year_last_attended = $_POST['year_last_attended'];
		$health_condition = strtoupper ($_POST['health_condition']);
		$deleted = "NO";
		
		
		
		// family info
		$RowCount =  $_POST['RowCountSiblings'];
		$family_name = strtoupper ($_POST['family_name']);
		$family_relationship = strtoupper ($_POST['family_relationship']);
		$family_sex = $_POST['family_sex'];
		$family_date_of_birth = $_POST['family_date_of_birth'];
		$family_age =  $_POST['family_age'];
		$family_address = strtoupper ($_POST['family_address']);
		$family_contact_no =  $_POST['family_contact_no'];
		$family_educational_attainment = strtoupper ($_POST['family_educational_attainment']);
		$family_occupation = strtoupper ($_POST['family_occupation']);
		$family_income = $_POST['family_income'];
		$family_deleted = "NO";
		
		
		
		
		//family sibling
		
		$g_lastname = strtoupper ($_POST['g_lastname']);
		$g_firstname = strtoupper ($_POST['g_firstname']);
		$g_middlename = strtoupper ($_POST['g_middlename']);
		
		$g_extension_name = $_POST['g_extension_name'];
		$g_age =  $_POST['g_age'];
		$g_sex =  $_POST['g_sex'];
		$g_relation_to_client = strtoupper ($_POST['g_relation_to_client']);		
		$g_mobile_no =  $_POST['g_mobile_no'];
		$g_landline_no =  $_POST['g_landline_no'];
		$g_address = strtoupper ($_POST['g_address']);
		$sibling_deleted = "NO";
		
		
		
		
		
		// auto generate case number
		$qcase = $conn->query("SELECT case_no FROM client_identifying_info ORDER BY case_no DESC") or die(mysqli_error());

        $fcase= $qcase->fetch_array();
        $case_no = substr($fcase['case_no'],4);
        $case_no= intval($case_no);
        $case_no = $case_no + 1;
        if (strlen($case_no) == 1) {
            $case_no = 'CN' . date("y") . '000' . $case_no;
        } 
        elseif (strlen($case_no) == 2) {
            $case_no = 'CN' . date("y") . '00' . $case_no;
        }
        elseif (strlen($case_no) == 3) {
            $case_no = 'CN' . date("y") . '0' . $case_no;
        } 
        elseif (strlen($case_no) == 4) {
            $case_no = 'CN' . date("y")  . $case_no;		
        } 
		else{
            $case_no = 'CN' . date("y") . $case_no;
        }
		//
		
		// auto generate referral number
		$qreferral = $conn->query("SELECT referral_no FROM client_identifying_info ORDER BY referral_no DESC") or die(mysqli_error());

        $freferral = $qreferral->fetch_array();
        $referral_no = substr($freferral['referral_no'],4);
        $referral_no= intval($referral_no);
        $referral_no = $referral_no + 1;
        if (strlen($referral_no) == 1) {
            $referral_no = 'RN' . date("y") . '000' . $referral_no;
        } 
        elseif (strlen($referral_no) == 2) {
            $referral_no = 'RN' . date("y") . '00' . $referral_no;
        }
        elseif (strlen($referral_no) == 3) {
            $referral_no = 'RN' . date("y") . '0' . $referral_no;
        } 
        elseif (strlen($case_no) == 4) {
            $referral_no = 'RN' . date("y")  . $referral_no;		
        } 
		else{
            $referral_no = 'RN' . date("y") . $referral_no;
        }
		//
		
		
		// auto generate case number
        $qclient = $conn->query("SELECT client_id FROM client_identifying_info ORDER BY client_id DESC") or die(mysqli_error());

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
		
		if (($_FILES["fileToUpload"]["name"]=="") &&  ($_FILES["fileToUploadMed"]["name"]=="")){
			
			$photo_client = "NONE";
			$photo_med = "NONE";
			
			
			//inserting identifying information
			$conn->query("INSERT INTO `client_identifying_info` VALUES('', '$case_no', '$referral_no','$client_id','$center_id', '$prev_center_id','$date_of_intake', '$admission_type','$lastname', '$firstname', '$middlename', '$extension_name', '$alias','$sex', '$religion', '$date_of_birth', '$age','$place_of_birth', '$no_street', '$region', '$province', '$city', '$brgy', '$mobile_no', '$landline_no','$educational_attainment', '$educational_status', '$educational_sped', '$name_of_school', '$year_last_attended','$health_condition', '$photo_client', '$photo_med', '$deleted')") or die(mysqli_error());
			
			
			//inserting family info
			
			$conn->query("INSERT INTO `client_family_info` VALUES ('', '$client_id', '$f_lastname', '$f_firstname', '$f_middlename', '$f_extension_name', '$f_date_of_birth', '$f_age', '$f_occupation', '$f_income', '$f_mobile_no', '$f_landline_no', '$f_address', '$f_educational_attainment', '$f_health_condition', '$m_lastname', '$m_firstname', '$m_middlename', '$m_extension_name', '$m_date_of_birth', '$m_age', '$m_occupation', '$m_income', '$m_mobile_no', '$m_landline_no', '$m_address', '$m_educational_attainment', '$m_health_condition', '$g_lastname', '$g_firstname', '$g_middlename', '$g_extension_name', '$g_age', '$g_sex', '$g_relation_to_client', '$g_mobile_no', '$g_landline_no', '$g_address', '$family_deleted')") or die (mysqli_error());
			
			
			//inserting sibling info
			
			
			for($i=0;$i<=$RowCount;$i++)
				{
					
					$name = strtoupper ($s_name[$i]);					
					$address = strtoupper($sibling_address[$i]);
					$education=  strtoupper($sibling_educational_attainment[$i]);
					$relationship=  strtoupper($sibling_relationship_to_client[$i]);
					$occupation =  strtoupper($sibling_occupation[$i]);
					
					
					$conn->query("INSERT INTO `client_sibling_info` VALUES ('','$client_id', '$name', '$sibling_sex[$i]', '$sibling_date_of_birth[$i]', '$sibling_age[$i]', '$address', '$education', '$relationship', '$occupation', '$sibling_income[$i]', '$sibling_deleted')") or die(mysqli_error());
					
					echo '
						<script type = "text/javascript">
							alert("' . $i . ' ");
										
						</script>
						';
					
				
				}
			
			
			echo '
				<script type = "text/javascript">
					alert("Successfully saved data.  ' . $client_id . ' ");
                    window.location = "client.php";					
				</script>
			';
		
		}
		else if (($_FILES["fileToUpload"]["name"]!=="") &&  ($_FILES["fileToUploadMed"]["name"]==""))		
		{	
			$target_dir = "client_images/".$client_id;
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			$photo_client = $client_id.basename($_FILES["fileToUpload"]["name"]);
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
					window.location = "client_add.php";
				</script>';
			} 
			else 
			{
				$uploadOk = 0;
				echo '
				<script type = "text/javascript">
					alert("File is not an image.");
					window.location = "client_add.php";
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
                    window.location = "client_add.php";
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
					window.location = "client_add.php";
				</script>';
			}
            
			if ($uploadOk == 0) 
			{
                //echo "Sorry, your file was not uploaded.";
	            // if everything is ok, try to upload file
                echo '
				<script type = "text/javascript">
                    alert(""Sorry, your file was not uploaded."");
                    window.location = "client_add.php";
                </script>';
	         } 
			else 
			{
				if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
				{
  
					$photo_med = "NONE";
			
					$conn->query("INSERT INTO `client_identifying_info` VALUES('', '$case_no', '$referral_no','$client_id','$center_id', '$prev_center_id','$date_of_intake', '$admission_type','$lastname', '$firstname', '$middlename', '$extension_name', '$alias','$sex', '$religion', '$date_of_birth', '$age','$place_of_birth', '$no_street', '$region', '$province', '$city', '$brgy', '$mobile_no', '$landline_no','$educational_attainment', '$educational_status', '$educational_sped', '$name_of_school', '$year_last_attended','$health_condition', '$photo_client', '$photo_med', '$deleted')") or die(mysqli_error());
					
					

			
						echo '
							<script type = "text/javascript">
								alert("Successfully saved data.  ' . $client_id . ' ");
								window.location = "client.php";					
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
		
		else if (($_FILES["fileToUpload"]["name"]=="") &&  ($_FILES["fileToUploadMed"]["name"]!==""))
		{			
			$target_dir = "client_medcert/".$client_id;
			$target_file = $target_dir . basename($_FILES["fileToUploadMed"]["name"]);
			$photo_med = $client_id.basename($_FILES["fileToUploadMed"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			
			//check file size
			if ($_FILES["fileToUploadMed"]["size"] > 15000000) 
			{
				//echo "Sorry, your file is too large.";
				$uploadOk = 0;
				echo '
					<script type = "text/javascript">
						alert("Sorry, your file is too large.");
						window.location = "client_add.php";
					</script>';
			}
             
			// Allow certain file formats
			if( $imageFileType != "pdf" ) 
			{
				//echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				$uploadOk = 0;
				echo '
					<script type = "text/javascript">
						alert("Sorry, pdf files is allowed.");
						window.location = "client_add.php";
					</script>';
			}
            
			if ($uploadOk == 0) 
			{
                //echo "Sorry, your file was not uploaded.";
	            // if everything is ok, try to upload file
                echo '
                    <script type = "text/javascript">
                        alert(""Sorry, your file was not uploaded."");
                        window.location = client_add.php";
                    </script>';
	        } 
			else 
			{
					if (move_uploaded_file($_FILES["fileToUploadMed"]["tmp_name"], $target_file)) 
					{
						$photo_client = "NONE";
			
						$conn->query("INSERT INTO `client_identifying_info` VALUES('', '$case_no', '$referral_no','$client_id','$center_id', '$prev_center_id','$date_of_intake', '$admission_type','$lastname', '$firstname', '$middlename', '$extension_name', '$alias','$sex', '$religion', '$date_of_birth', '$age','$place_of_birth', '$no_street', '$region', '$province', '$city', '$brgy', '$mobile_no', '$landline_no','$educational_attainment', '$educational_status', '$educational_sped', '$name_of_school', '$year_last_attended','$health_condition', '$photo_client', '$photo_med', '$deleted')") or die(mysqli_error());
			
						echo '
							<script type = "text/javascript">
								alert("Successfully saved data.  ' . $client_id . ' ");
								window.location = "client.php";					
							</script>
						';

		
					}
					else 
					{
						//echo "Sorry, there was an error uploading your file.";
						echo '
							<script type = "text/javascript">
							   alert("Sorry, there was an error uploading your file.");
							   window.location = "client_add.php";
							</script>';
					}            
            
			}
		
		}
		else
		{
			/// client
			$target_dir = "client_images/".$client_id;
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			$photo_client = $client_id.basename($_FILES["fileToUpload"]["name"]);
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
					window.location = "client_add.php";
				</script>';
			} 
			else 
			{
				$uploadOk = 0;
				echo '
				<script type = "text/javascript">
					alert("File is not an image.");
					window.location = "client_add.php";
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
                    window.location = "client_add.php";
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
					window.location = "client_add.php";
				</script>';
			}
			///
		
		
			/// med
			
			$target_dirMed = "client_medcert/".$client_id;
			$target_fileMed = $target_dirMed . basename($_FILES["fileToUploadMed"]["name"]);
			$photo_med = $client_id.basename($_FILES["fileToUploadMed"]["name"]);
			$uploadOkMed = 1;
			$imageFileTypeMed = pathinfo($target_fileMed,PATHINFO_EXTENSION);
			
			//check file size
			if ($_FILES["fileToUploadMed"]["size"] > 15000000) 
			{
				//echo "Sorry, your file is too large.";
				$uploadOkMed = 0;
				echo '
					<script type = "text/javascript">
						alert("Sorry, your file is too large.");
						window.location = "client_add.php";
					</script>';
			}
             
			// Allow certain file formats
			if( $imageFileTypeMed != "pdf" ) 
			{
				//echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				$uploadOkMed = 0;
				echo '
					<script type = "text/javascript">
						alert("Sorry, pdf files is allowed.");
						window.location = "client_add.php";
					</script>';
			}
			
			///
			
			if (($uploadOk == 0) && ($uploadOkMed == 0)) 
			{
                //echo "Sorry, your file was not uploaded.";
	            // if everything is ok, try to upload file
                echo '
				<script type = "text/javascript">
                    alert(""Sorry, your file was not uploaded."");
                    window.location = "client_add.php";
                </script>';
	         } 
			else 
			{
				if ((move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) && (move_uploaded_file($_FILES["fileToUploadMed"]["tmp_name"], $target_fileMed))) 
				{
  
					$conn->query("INSERT INTO `client_identifying_info` VALUES('', '$case_no', '$referral_no','$client_id','$center_id', '$prev_center_id','$date_of_intake', '$admission_type','$lastname', '$firstname', '$middlename', '$extension_name', '$alias','$sex', '$religion', '$date_of_birth', '$age','$place_of_birth', '$no_street', '$region', '$province', '$city', '$brgy', '$mobile_no', '$landline_no','$educational_attainment', '$educational_status', '$educational_sped', '$name_of_school', '$year_last_attended','$health_condition', '$photo_client', '$photo_med', '$deleted')") or die(mysqli_error());
			
						echo '
							<script type = "text/javascript">
								alert("Successfully saved data.  ' . $client_id . ' ");
								window.location = "client.php";					
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