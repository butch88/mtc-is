<?php   
    require_once 'includes/conn.php';

	if(ISSET($_POST['submit_edit']))
	{
        
		$user_id = $_POST['edit_user_id'];
		$center_id = $_POST['edit_center_id'];
        $usermodule = $_POST['edit_user_module'];
		$userlevel = $_POST['edit_user_level'];


			$conn->query("UPDATE `user_lib` SET `user_level` = '$userlevel' ,  `module` = '$usermodule' ,  `center_id` = '$center_id' WHERE `user_id` = '$user_id'") or die(mysqli_error());
			echo '
				<script type = "text/javascript">
					alert("Successfully edited data");
                    window.location = "user.php";
					
				</script>
			';
	}
	
?>