<?php   
    require_once 'includes/conn.php';

	if(ISSET($_POST['submit_edit'])){
        
		$user_id = $_POST['edit_userid'];
 		$userlevel = $_POST['edit_userlevel'];


			$conn->query("UPDATE `user_lib` SET `userlevel` = '$userlevel' WHERE `user_id` = '$user_id'") or die(mysqli_error());
			echo '
				<script type = "text/javascript">
					alert("Successfully edited data");
                    window.location = "user.php";
					
				</script>
			';

	}
	
?>