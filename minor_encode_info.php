<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>DSWD | MTA-IS </title>
	<?php include 'includes/session.php'; ?>
	<?php include 'includes/header.php'; ?>

    <style>
        .form-control {
            border-color: #898a8c;
        }
    </style>
</head>

<body class="hold-transition skin-blue sidebar-mini">
	
	<div class="wrapper">
		<?php include 'includes/navbar.php'; ?>
		<?php include 'includes/sidebar.php'; ?>


  
  
	<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>
                    Minor's Application
					<small>
						Information Encoding	
					</small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
					<li class="active">Dashboard</li>
				</ol>
			</section>

			<!-- Main content -->
			<section class="content">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Minor's Basic Information </h3>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-12">
                                    <label for="division_name">Minor's Name</label>							
                                </div>               
                            </div>
                        </div>
                        <div class="form-group mb-10">
                            <div class="form-row">
                                <div class="col-md-3">
                                    <label style="font-size:12px;" ><i>Lastname</i></label>
                                    <input class="form-control" name="lname" id="lname" type="text" style="text-transform: uppercase;" >	
                                </div> 
                                <div class="col-md-4">
                                    <label style="font-size:12px;"><i>Firstname</i></label>	
                                    <input class="form-control" name="fname" id="fname" type="text" style="text-transform: uppercase;">                                        											
                                </div> 
                                <div class="col-md-3">
                                    <label style="font-size:12px; "><i>Middlename</i></label>
                                    <input class="form-control" name="mname" id="mname" type="text" style="text-transform: uppercase;">											
                                </div> 
                                <div class="col-md-2">
                                    <label style="font-size:12px; "><i>Extension Name</i></label>
                                    <select class="form-control" name="ext" id="ext" >
                                        <option value="" selected="selected">SELECT ONE</option>
                                        <option value="JR.">JR.</option>
                                        <option value="SR.">SR.</option>
                                        <option value="I">I</option>
                                        <option value="II">II</option>
                                        <option value="III">III</option>
                                        <option value="IV">IV</option>
                                        <option value="V">V</option>
                                        <option value="VI">VI</option>
                                        <option value="VII">VII</option>
                                        <option value="VIII">VIII</option>
                                        <option value="IX">IX</option>
                                        <option value="X">X</option>														
                                    </select>											 						
                                </div>
                            </div>
                        </div>&nbsp;
                        <div class="form-group">
                            <div class="form-row">                                
                                <div class="col-md-3">
                                    <label for="dob">Date of Birth</label>							
                                    <input class="form-control" name="dob" id="dob" type="date" onchange="GetAge()">
                                </div>                                    
                                <div class="col-md-3">
                                    <label for="age">Age</label>							
                                    <input class="form-control" name="age" id="age" type="text" readonly>	  		
                                </div>                                    
                                <div class="col-md-3">
                                    <label for="sex">Sex</label>		
                                    <select class="form-control" name="sex" id="sex" >
                                        <option value="" selected="selected">SELECT ONE</option>
                                        <option value="MALE">MALE</option>
                                        <option value="FEMALE">FEMALE</option>
                                    </select>	  		
                                </div>
                                <div class="col-md-3">
                                    <label for="birth_stat">Status of Birth</label>		
                                    <select class="form-control" name="birth_stat" id="birth_stat" >
                                        <option value="" selected="selected">SELECT ONE</option>
                                        <option value="legitmate">LEGITIMATE</option>
                                        <option value="illegitmate">ILLEGITIMATE</option>
                                    </select>	  		
                                </div>												
                            </div>								
                        </div>&nbsp;
                        <div class="form-group">
                            <div class="form-row">                                
                                <div class="col-md-6">
                                    <label for="w_special_needs">With Special needs</label>		
                                    <select class="form-control" name="w_special_needs" id="w_special_needs" >
                                        <option value="" selected="selected">SELECT ONE</option>
                                        <option value="Y">YES</option>
                                        <option value="N">NO</option>
                                    </select>	  		
                                </div>                  
                                <div class="col-md-6">
                                    <label for="asn">Adopted SPOC No.</label>
                                    <input class="form-control" name="asn" id="asn" type="text" style="text-transform: uppercase;">
                                </div>
                            </div>
                        </div>&nbsp;
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-12">
                                    <h5 class="box-title"> <b>Address</b></h5>
                                </div>
                            </div>							
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-12">
                                    <label style="font-size:12px; "><i>No/Lot/Block/Street</i></label>
                                    <input class="form-control" name="no_street" id="no_street" type="text" style="text-transform: uppercase;">	
                                </div>																						
                            </div>
                        </div>&nbsp;
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-3">	
                                    <label style="font-size:12px; "><i>Region</i></label>											
                                    <select class="form-control styleFontSelect fieldStyle styleFont" name="region" id="region" >
                                        <option value='' selected>REGION</option>
                                    </select>                                    												
                                </div>
                                <div class="col-md-3">		
                                    <label style="font-size:12px; "><i>Province</i></label>											
                                    <select class="form-control" name="province" id="province" >
                                        <option value='' selected>PROVINCE</option>
                                    </select>										
                                </div>
                                <div class="col-md-3">				
                                    <label style="font-size:12px; "><i>Municipality</i></label>								
                                    <select class="form-control" name="city" id="city" >
                                        <option value='' selected>CITY/MUNICIPALITY</option>								
                                    </select>											
                                </div>
                                <div class="col-md-3">		
                                    <label style="font-size:12px; "><i>Barangay</i></label>											
                                    <select class="form-control" name="brgy" id="brgy" >
                                        <option value='' selected>BARANGAY</option>								
                                    </select>										
                                </div>																						
                            </div>
                        </div>&nbsp;
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-12">
                                    <h5 class="box-title"> <b>Contact No.</b></h5>
                                </div>
                            </div>							
                        </div>
                    
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-3">
                                    <label style="font-size:12px; "><i>Local Phone No.</i></label>
                                    <input class="form-control" name="local_no" id="local_no" type="text" style="text-transform: uppercase;">	
                                </div>

                                <div class="col-md-3">
                                    <label style="font-size:12px; "><i>Phone Number Abroad</i></label>
                                    <input class="form-control" name="abroad_no" id="abroad_no" type="text" style="text-transform: uppercase;">	
                                </div>
                            </div>
                        </div>
                    </div>&nbsp;


                    <div class="box box-primary">
                        <div class="box-body">

                            <div class="box-header with-border">
                                <h3 class="box-title">Parent / Guardian Information </h3>
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <label for="division_name">Father's Inforamtion</label>							
                                    </div>               
                                </div>
                            </div>                    
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-3">	
                                        <label style="font-size:12px;" ><i>Lastname</i></label>
                                        <input class="form-control" name="f_lname" id="f_lname" type="text" style="text-transform: uppercase;" >
                                    </div> 
                                    <div class="col-md-3">
                                        <label style="font-size:12px;"><i>Firstname</i></label>												
                                        <input class="form-control" name="f_fname" id="f_fname" type="text" style="text-transform: uppercase;">
                                    </div> 
                                    <div class="col-md-3">
                                        <label style="font-size:12px; "><i>Middlename</i></label>												
                                        <input class="form-control" name="f_mname" id="f_mname" type="text" style="text-transform: uppercase;">
                                    </div> 
                                    <div class="col-md-3">
                                        <label style="font-size:12px; "><i>Extension Name</i></label>	
                                        <select class="form-control" name="f_ext" id="f_ext" >
                                            <option value="" selected="selected">SELECT ONE</option>
                                            <option value="JR.">JR.</option>
                                            <option value="SR.">SR.</option>
                                            <option value="I">I</option>
                                            <option value="II">II</option>
                                            <option value="III">III</option>
                                            <option value="IV">IV</option>
                                            <option value="V">V</option>
                                            <option value="VI">VI</option>
                                            <option value="VII">VII</option>
                                            <option value="VIII">VIII</option>
                                            <option value="IX">IX</option>
                                            <option value="X">X</option>														
                                        </select>										 						
                                    </div>
                                </div>
                            </div>&nbsp;
                            <div class="form-row">
                                <div class="col-md-3">
                                    <label for="f_age">Age</label>							
                                    <input class="form-control" name="f_age" id="f_age" type="text" style="text-transform: uppercase;">	  		
                                </div>
                                <div class="col-md-3">
                                    <label for="f_occupation">Occupation</label>							
                                    <input class="form-control" name="f_occupation" id="f_occupation" type="text" style="text-transform: uppercase;">	  		
                                </div>
                                <div class="col-md-3">
                                    <label for="f_valid_id">Father's Valid ID</label>		
                                    <input class="form-control" name="f_valid_id" id="f_valid_id" type="text">	 	  		
                                </div>
                                <div class="col-md-3">
                                    <label for="f_valid_id_no">Valid ID Number</label>		
                                    <input class="form-control" name="f_valid_id_no" id="f_valid_id_no" type="text">	  		
                                </div>															
                            </div>&nbsp;
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <h5 class="box-title"> <b>Address</b></h5>
                                    </div>
                                </div>							
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-3">		
                                        <label style="font-size:12px; "><i>Region</i></label>										
                                        <select class="form-control styleFontSelect fieldStyle styleFont" name="f_region" id="f_region" >
                                            <option value='' selected>REGION</option>
                                        </select>												
                                    </div>
                                    <div class="col-md-3">									
                                        <label style="font-size:12px; "><i>Province</i></label>				
                                        <select class="form-control" name="f_province" id="f_province" >
                                            <option value='' selected>PROVINCE</option>
                                        </select>										
                                    </div>
                                    <div class="col-md-3">				
                                        <label style="font-size:12px; "><i>Municipality</i></label>								
                                        <select class="form-control" name="f_city" id="f_city" >
                                            <option value='' selected>CITY/MUNICIPALITY</option>								
                                        </select>											
                                    </div>
                                    <div class="col-md-3">
                                        <label style="font-size:12px; "><i>Barangay</i></label>										
                                        <select class="form-control" name="f_brgy" id="f_brgy" >
                                            <option value='' selected>BARANGAY</option>								
                                        </select>											
                                    </div>																						
                                </div>
                            </div>&nbsp;
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <label for="division_name">Mothers's Inforamtion</label>							
                                    </div>               
                                </div>
                            </div>                    
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-3">
                                        <label style="font-size:12px;" ><i>Lastname</i></label>
                                        <input class="form-control" name="m_lname" id="m_lname" type="text" style="text-transform: uppercase;" >	
                                    </div> 
                                    <div class="col-md-3">
                                        <label style="font-size:12px;" ><i>Lastname</i></label>
                                        <input class="form-control" name="m_fname" id="m_fname" type="text" style="text-transform: uppercase;">
                                    </div> 
                                    <div class="col-md-3">
                                        <label style="font-size:12px; "><i>Middlename</i></label>												
                                        <input class="form-control" name="m_mname" id="m_mname" type="text" style="text-transform: uppercase;">
                                    </div> 
                                    <div class="col-md-3">
                                        <label style="font-size:12px; "><i>Extension Name</i></label>
                                        <select class="form-control" name="m_ext" id="m_ext" >
                                            <option value="" selected="selected">SELECT ONE</option>
                                            <option value="JR.">JR.</option>
                                            <option value="SR.">SR.</option>
                                            <option value="I">I</option>
                                            <option value="II">II</option>
                                            <option value="III">III</option>
                                            <option value="IV">IV</option>
                                            <option value="V">V</option>
                                            <option value="VI">VI</option>
                                            <option value="VII">VII</option>
                                            <option value="VIII">VIII</option>
                                            <option value="IX">IX</option>
                                            <option value="X">X</option>														
                                        </select>											 						
                                    </div>
                                </div>
                            </div>&nbsp;
                            <div class="form-row">													
                                <div class="col-md-3">
                                    <label for="m_age">Age</label>							
                                    <input class="form-control" name="m_age" id="m_age" type="text" style="text-transform: uppercase;">	  		
                                </div>                            
                                <div class="col-md-3">
                                    <label for="m_occupation">Occupation</label>							
                                    <input class="form-control" name="m_occupation" id="m_occupation" type="text" style="text-transform: uppercase;">	  		
                                </div>
                                <div class="col-md-3">
                                    <label for="m_valid_id">Mother's Valid ID</label>							
                                    <input class="form-control" name="m_valid_id" id="m_valid_id" type="text" style="text-transform: uppercase;">  		
                                </div>
                                <div class="col-md-3">
                                    <label for="m_valid_id_no">Valid ID Number</label>	
                                    <input class="form-control" name="m_valid_id_no" id="m_valid_id_no" type="text" style="text-transform: uppercase;">  	  		
                                </div>															
                            </div>&nbsp;
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <h5 class="box-title"> <b>Address</b></h5>
                                    </div>
                                </div>							
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-3">	
                                        <label style="font-size:12px; "><i>Region</i></label>												
                                        <select class="form-control styleFontSelect fieldStyle styleFont" name="m_region" id="m_region" >
                                            <option value='' selected>REGION</option>
                                        </select>											
                                    </div>
                                    <div class="col-md-3">				
                                        <label style="font-size:12px; "><i>Province</i></label>									
                                        <select class="form-control" name="m_province" id="m_province" >
                                            <option value='' selected>PROVINCE</option>
                                        </select>										
                                    </div>
                                    <div class="col-md-3">			
                                        <label style="font-size:12px; "><i>Municipality</i></label>										
                                        <select class="form-control" name="m_city" id="m_city" >
                                            <option value='' selected>CITY/MUNICIPALITY</option>								
                                        </select>										
                                    </div>
                                    <div class="col-md-3">			
                                        <label style="font-size:12px; "><i>Barangay</i></label>										
                                        <select class="form-control" name="m_brgy" id="m_brgy" >
                                            <option value='' selected>BARANGAY</option>								
                                        </select>										
                                    </div>																						
                                </div>
                            </div>

                        </div>
                    </div>  
                    
                    
                    <div class="box box-primary">
                        <div class="box-body">
                            
                            <div class="box-header with-border">
                                <h3 class="box-title">Travelling Companion </h3>
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <label>Travelling Companion Inforamtion</label>							
                                    </div>               
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-3">	
                                        <label style="font-size:12px;" ><i>Lastname</i></label>
                                        <input class="form-control" name="tc_lname" id="tc_lname" type="text" style="text-transform: uppercase;" >
                                    </div> 
                                    <div class="col-md-3">
                                        <label style="font-size:12px;"><i>Firstname</i></label>												
                                        <input class="form-control" name="tc_fname" id="tc_fname" type="text" style="text-transform: uppercase;">
                                    </div> 
                                    <div class="col-md-3">
                                        <label style="font-size:12px; "><i>Middlename</i></label>												
                                        <input class="form-control" name="tc_mname" id="tc_mname" type="text" style="text-transform: uppercase;">
                                    </div> 
                                    <div class="col-md-3">                                        
                                        <label style="font-size:12px; "><i>Extension Name</i></label>
                                        <select class="form-control" name="tc_ext" id="tc_ext" >
                                            <option value="" selected="selected">SELECT ONE</option>
                                            <option value="JR.">JR.</option>
                                            <option value="SR.">SR.</option>
                                            <option value="I">I</option>
                                            <option value="II">II</option>
                                            <option value="III">III</option>
                                            <option value="IV">IV</option>
                                            <option value="V">V</option>
                                            <option value="VI">VI</option>
                                            <option value="VII">VII</option>
                                            <option value="VIII">VIII</option>
                                            <option value="IX">IX</option>
                                            <option value="X">X</option>														
                                        </select>											 						
                                    </div>
                                </div>
                            </div>&nbsp;
                            <div class="form-row">														
                                <div class="col-md-3">
                                    <label for="tc_age">Age</label>							
                                    <input class="form-control" name="tc_age" id="tc_age" type="text" style="text-transform: uppercase;">	  		
                                </div>
                            
                                <div class="col-md-3">
                                    <label for="tc_occupation">Occupation</label>							
                                    <input class="form-control" name="tc_occupation" id="tc_occupation" type="text" style="text-transform: uppercase;">	  		
                                </div>
                                <div class="col-md-3">
                                    <label for="tc_passport_no">Passport No</label>		
                                    <input class="form-control" name="tc_passport_no" id="tc_passport_no" type="text" style="text-transform: uppercase;">	   		
                                </div>
                                <div class="col-md-3">
                                    <label for="tc_passport_validity">Validity </label>	
                                    <input class="form-control" name="tc_passport_validity" id="tc_passport_validity" type="text" style="text-transform: uppercase;">	   		
                                </div>															
                            </div>&nbsp;
                            <div class="form-row">
                                <div class="col-md-12">
                                    <label for="tc_rel_to_minor">Relationship to Minor</label>							
                                    <input class="form-control" name="tc_rel_to_minor" id="tc_rel_to_minor" type="text" style="text-transform: uppercase;">	  		
                                </div>
                            </div>&nbsp;
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <h5 class="box-title"> <b>Address</b></h5>
                                    </div>
                                </div>							
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-3">	
                                        <label style="font-size:12px; "><i>Region</i></label>											
                                        <select class="form-control styleFontSelect fieldStyle styleFont" name="tc_region" id="tc_region" >
                                            <option value='' selected>REGION</option>
                                        </select>												
                                    </div>
                                    <div class="col-md-3">					
                                        <label style="font-size:12px; "><i>Province</i></label>								
                                        <select class="form-control" name="tc_province" id="tc_province" >
                                            <option value='' selected>PROVINCE</option>
                                        </select>										
                                    </div>
                                    <div class="col-md-3">							
                                        <label style="font-size:12px; "><i>Municipality</i></label>						
                                        <select class="form-control" name="tc_city" id="tc_city" >
                                            <option value='' selected>CITY/MUNICIPALITY</option>								
                                        </select>										
                                    </div>
                                    <div class="col-md-3">			
                                        <label style="font-size:12px; "><i>Barangay</i></label>										
                                        <select class="form-control" name="tc_brgy" id="tc_brgy" >
                                            <option value='' selected>BARANGAY</option>								
                                        </select>										
                                    </div>																						
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="box box-primary">
                        <div class="box-body">

                            <div class="box-header with-border">
                                <h3 class="box-title">Travel Information</h3>
                            </div>
                            <div class="form-row">													
                                <div class="col-md-6">
                                    <label for="destination">Destination </label>	
                                    <input class="form-control" name="destination" id="destination" type="text" style="text-transform: uppercase;">	  
                                </div>
                                <div class="col-md-6">
                                    <label for="duration">Duration of Stay</label>		
                                    <input class="form-control" name="duration" id="duration" type="text" style="text-transform: uppercase;">	    		
                                </div>	
                            </div>&nbsp;
                            <div class="form-row">
                                <div class="col-md-12">
                                    <label for="travel_reason">Reasons for Travel Abroad</label>							
                                    <input class="form-control" name="travel_reaso" id="travel_reaso" type="text" style="text-transform: uppercase;">	  		
                                </div>
                            </div>&nbsp;
                            <div class="form-row">                                    
                                <div class="col-md-12">
                                    <label for="description">Where the minor intends to stay during his/her travel and with whom (please indicate names, complete address and phone numbers)</label>							
                                        <textarea class="form-control" rows="2" name="description" id="description" style="text-transform: uppercase;"></textarea>		 		
                                </div>
                            </div>


                        </div>
                        <div class="box-footer">
                            <button type="button" class="btn btn-danger pull-right"><i class="fa fa-remove"></i> Cancel
                            </button>
                            <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
                                <i class="fa fa-save"></i> Save
                            </button>
                        </div>
                    </div>
                    
                </div>
			</section>	
		</div>
  
  
	<footer class="main-footer">
		<div class="pull-right hidden-xs">
		<b>Version</b> 1.0
		</div>
		<strong>Copyright &copy; DSWD <a href="#">ICTMS-2019</a>.</strong> All rights
		reserved.
	</footer>


</div>

	<?php include 'includes/script.php'; ?>

</body>
</html>
