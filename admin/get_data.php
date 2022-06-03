
<?php

set_time_limit(0);
include 'includes/conn.php';

	$str = "";
	if($_REQUEST['request'] == "add_region"){
		$sql = "SELECT * FROM lib_regions ORDER BY region_name";
		$str .= "<option value=''>REGION</option>";
		$result = mysqli_query($conn, $sql);
		while($row = mysqli_fetch_assoc($result))
		{
		$str .= '<option value="'.$row[region_code].'">'.$row[region_name].'</option>';
		}	
		echo $str;
	}
	else if($_REQUEST['request']=="add_province"){
		$sql = "SELECT * FROM lib_provinces WHERE region_code = '".$_REQUEST['id']."' ORDER BY prov_name";
		$str .= "<option value='' selected>PROVINCE</option>";
		
		$result = mysqli_query($conn, $sql);
		while($row = mysqli_fetch_assoc($result))
		{
		$str .= '<option value="'.$row[prov_code].'">'.$row[prov_name].'</option>';
		}	
		echo $str;
	
	
	
	
	
	}else if($_REQUEST['request']=="add_city" ){
		$sql = "SELECT * FROM lib_cities WHERE prov_code = '".$_REQUEST['id']."' ORDER BY city_name";
		$str .= "<option value='' selected>CITY/MUNICIPALITY</option>";
		
		$result = mysqli_query($conn, $sql);
		while($row = mysqli_fetch_assoc($result))
		{
		$str .= '<option value="'.$row[city_code].'">'.$row[city_name].'</option>';
		}	
		echo $str;
		
		
	}else{
		
		$sql = "SELECT * FROM lib_brgy WHERE city_code = '".$_REQUEST['id']."' ORDER BY brgy_name";
		$str .= "<option value='' selected>BARANGAY</option>";	
		
	
		
		$result = mysqli_query($conn, $sql);
		while($row = mysqli_fetch_assoc($result))
		{
		$str .= '<option value="'.$row[brgy_code].'">'.$row[brgy_name].'</option>';
		}	
		echo $str;
		

	}

	
?>
