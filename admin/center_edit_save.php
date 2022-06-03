<?php   
    require_once 'includes/conn.php';

	if(ISSET($_POST['submit_edit'])){
        
		$center_category = $_POST['edit_center_category'];
		$center_id = strtoupper ($_POST['edit_center_id']);
        $center_name = strtoupper ($_POST['edit_center_name']);
		$center_head = strtoupper ($_POST['edit_center_head']);
		$contact_no = $_POST['edit_contact_no'];
		$block = strtoupper ($_POST['edit_block']);
		$street = strtoupper ($_POST['edit_street']);
		$region = $_POST['edit_region'];
		$province = $_POST['edit_province'];
		$municipality = $_POST['edit_city'];
		$barangay = $_POST['edit_brgy'];
		$zipcode = strtoupper ($_POST['edit_zipcode']);
		$date_established = $_POST['edit_date_established'];
		$bed_capacity = $_POST['edit_bed_capacity'];
		$no_sw = $_POST['edit_no_sw'];
		$no_hp = $_POST['edit_no_hp'];
		$description = strtoupper ($_POST['edit_description']);
		$picture = 'NONE.png';
		$deleted = 'NO';		
			
		if($_FILES["edit_fileToUpload"]["name"]=="")
		{             
				
			$conn->query("UPDATE `center_lib` SET `center_category` = '$center_category', `center_name` = '$center_name', `center_head` = '$center_head', `contact_no` = '$contact_no' , `block` = '$block' , `street` = '$street' ,`region` = '$region'  ,`province` = '$province'  ,`municipality` = '$municipality' ,`barangay` = '$barangay' ,`zipcode` = '$zipcode'  ,`date_established` = '$date_established' , `bed_capacity` = '$bed_capacity', `no_sw` = '$no_sw', `no_hp` = '$no_hp', `description` = '$description'  WHERE  `center_id` = '$center_id'  ") or die(mysqli_error());
			
			echo '
			<script type = "text/javascript">
				alert("Centers information successfully edited.");
                window.location = "center.php";
					
			</script>
			';
		}
		else 
			
		{
            
				$target_dir = "centers_images/".$center_name;
				$target_file = $target_dir . basename($_FILES["edit_fileToUpload"]["name"]);
				$picture = $center_name. basename($_FILES["edit_fileToUpload"]["name"]);
				$uploadOk = 1;
				$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        
				// Check if image file is a actual image or fake image
				$check = getimagesize($_FILES["edit_fileToUpload"]["tmp_name"]);
				if($check !== false) 
				{
					$uploadOk = 1;
					echo '
					<script type = "text/javascript">
						alert("File is an image - " . $check["mime"] . ".");
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
				if ($_FILES["edit_fileToUpload"]["size"] > 15000000) 
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
					if (move_uploaded_file($_FILES["edit_fileToUpload"]["tmp_name"], $target_file)) 
					{
  
						$conn->query("UPDATE `center_lib` SET  `center_name` = '$center_name', `center_head` = '$center_head', `contact_no` = '$contact_no' , `block` = '$block' , `street` = '$street' ,`region` = '$region'  ,`province` = '$province'  ,`municipality` = '$municipality' ,`barangay` = '$barangay' ,`zipcode` = '$zipcode'  ,`date_established` = '$date_established' , `bed_capacity` = '$bed_capacity', `no_sw` = '$no_sw', `no_hp` = '$no_hp', `description` = '$description' , `picture` = '$picture' WHERE  `center_id` = '$center_id'  ") or die(mysqli_error());				
			
						 echo '
							<script type = "text/javascript">
							   alert("Successfully saved data");
							window.location = "center.php";
						</script>';
					}
					else 
					{
						//echo "Sorry, there was an error uploading your file.";
						echo '
							<script type = "text/javascript">
							   alert("Centers information successfully edited.");
							   window.location = "center.php";
						</script>';
					}
            
            
				}

			}	

	}
	
?>