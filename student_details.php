<!DOCTYPE html> 
<html> 
<head> 
	<link rel="stylesheet" type="text/css" href="student_details.css">	
    <style type="text/css">
        
#name_full{height: 215.15px;float: left;padding-left: 70px;padding-top: 20px;box-sizing: border-box;
              font-family: Arial;font-size: 41px;color: white;}
    </style>
</head> 
	
<body> 

    <div id="wrapper">
    	<div id="header"></div>
    	<div id="img_div"><img src="student_photo.jpg" id="s_img"></div>
    	<div id="name_full"><div class="name" style="display: inline;">--</div> <div class="ide" style="display: inline;">--</div>
        </div>    	
    	<div id="info">
    		Personal Details<hr>
    		<ul>
    			<li>Name : <div class="name" style="display: inline;">--</div></li>
    			<li>ID : <div class="ide" style="display: inline;">--</div></li>
    			<li>Deparment : DEPSTAR</li> 
    			<li>Branch : CSE</li>     			
    			<li>Semester : 4th Sem</li>
    			<li>Phone Number : <div id="phone" style="display: inline;">--</div></li> 
    			<li>Blood Group : <div id="bld" style="display: inline;">--</div></li>
    		</ul>
    		Courses<hr>
    		<ul>
    			<li>Total Subjects : 5</li>
    			<li>Subjects Name :
    				<ul style="padding-left: 50px;list-style: disc;">
    					<li>Web Technology</li>
    					<li>Database Management System</li>
    					<li>Operating System</li>
    					<li>Data Structure Algorithms</li>
    					<li>Computer Organization</li>		
    				</ul>
    			</li>
    			<li>Elective Subject : Introduction to Ardino</li> 
    		</ul>
    		Fees<hr>
    		<ul>
    			<li>Fees of current Sem : Rs 52,000</li>
    			<li>Fees status : <div style="color: green;display: inline;">Payed<div></li>
    			<li>Fees Pending : None</li>
    		</ul>    	
    </div>

    </div>




    <?php
    session_start();
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
    	echo "	<script>
                var x=document.getElementsByClassName('name');
				x[0].innerHTML='".$_SESSION['name']."';
                x[1].innerHTML='".$_SESSION['name']."';
			</script>";
        echo "  <script>
                var x=document.getElementsByClassName('ide');
                x[0].innerHTML='".$_SESSION['user_display']."';
                x[1].innerHTML='".$_SESSION['user_display']."';
            </script>";            
    	echo "	<script>
				document.getElementById('phone').innerHTML='".$_SESSION['ph_no']."';
			</script>";
    	echo "	<script>
				document.getElementById('bld').innerHTML='".$_SESSION['blood']."';
			</script>";


    ?>
</body> 
</html>