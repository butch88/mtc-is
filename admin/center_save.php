<?php   
    require_once 'includes/conn.php';
	
	
	
	if(ISSET($_POST['submit_center'])){      
		$center_category = $_POST['center_category'];
        $center_name = strtoupper ($_POST['center_name']);		
		$center_head = strtoupper ($_POST['center_head']);
		$contact_no = $_POST['contact_no'];
		$block = strtoupper ($_POST['block']);
		$street = strtoupper ($_POST['street']);
		$region = $_POST['add_region'];
		$province = $_POST['add_province'];
		$municipality = $_POST['add_city'];
		$brgy = $_POST['add_brgy'];
		$zipcode = strtoupper ($_POST['zipcode']);
		$date_established = $_POST['date_established'];
		$bed_capacity = $_POST['bed_capacity'];
		$no_sw = $_POST['no_sw'];
		$no_hp = $_POST['no_hp'];
		$description = strtoupper ($_POST['description']);
		$picture = 'NONE.png';
		$deleted = 'NO';
		
		/////
		if($_FILES["fileToUpload"]["name"]=="")
		{             
			$conn->query("INSERT INTO `center_lib` VALUES('', '$center_category', '$center_name','$center_head', '$contact_no', '$block', '$street', '$region', '$province', '$municipality', '$brgy', '$zipcode', '$date_established', '$bed_capacity', '$no_sw', '$no_hp', '$description', '$picture', '$deleted')") or die(mysqli_error());
			echo '
				<script type = "text/javascript">
					alert("Successfully saved data");
                    window.location = "center.php";					
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