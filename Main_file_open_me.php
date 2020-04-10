<!DOCTYPE html>
<html>
<head>
	<title>Student Portal</title>

	<style>
		#first_img{height: 900px;width: 1350px;}
		#first_img_div{width: 100%;height: 100px;overflow: hidden;border-radius: 8px;position: absolute;z-index: -1;margin: 0}
		body {background-color: #303641;}
		#head{padding-top: 20px;padding-bottom: 20px;font-family: Arial;font-size: 40px;color: white;padding-left: 20px;margin: 0; }

		ul{list-style-type: none;height: 65px;padding: 0px;margin: 0px;background-color: #808080;border-radius: 4px}

		li{display: inline-block;width: 24.7%;height: 65px;text-align: center;margin:0px;}

		a{font-family: Arial;font-size: 20px;color: white;text-decoration:none;height: 65px;display: block;padding-top: 22.5px;margin: 0; box-sizing: border-box;}

		.bor{border-right: 2px solid rgba(255,255,255,0.1)}
		a:hover{color: black;background-color: #C0C0C0;box-shadow: 0 0 6px rgba(0,0,0,90);}

		#sticky_navbar{  position: sticky;top: 0;}

		#main_frame{width: 100%;height: 1500px;}

	</style>


</head>
<body>


<div id="first_img_div"><img id="first_img"src="hum_hai_image.jpg"></div>

<header id="head">Charusat Student Portal</header>
<br>

<div id="sticky_navbar">
		<ul>
			<li id="f_navbar"><a class="bor" href="student_details.php" target="main_frame">Student Details</a></li>
			<li><a  class="bor" href="Attendance.php" target="main_frame">Attendance</a></li>
			<li><a class="bor" href="Search.php" target="main_frame">Search</a></li>
			<li><a href="login.php" target="_self">Logout</a></li>
		</ul>
</div>

<br><br>

<iframe src="student_details.php" id="main_frame" name="main_frame" frameborder="0"></iframe>


    <?php
    	session_start();
      /*error_reporting(E_ERROR | E_WARNING | E_PARSE);*/
    	$usr = $_GET['username'];
		$pw = $_GET['password'];
		$con=mysqli_connect("localhost","root","","login_db");

		$result_query = "select * from login_tb where user='$usr' and pwd='$pw'";

		$run_result = mysqli_query($con,$result_query);

		$num_row=mysqli_num_rows($run_result);

		if($num_row==0){
			
			$_SESSION['invalid_password']='invalid_password';
			header('Location: login.php');
		}


		$row_result=mysqli_fetch_array($run_result);
			
		$user_display=$row_result['user'];


		$detail_query = "select * from details_tb where user='$usr'";

		$run_detail = mysqli_query($con,$detail_query);
	
		

		while($row_detail=mysqli_fetch_array($run_detail)){

			$name=$row_detail['name'];
			$ph_no=$row_detail['ph_no'];
			$blood=$row_detail['blood'];
			$atd_wt=$row_detail['atd_wt'];
			$atd_dbms=$row_detail['atd_dbms'];
		}

		$_SESSION['user_display']=$user_display;
		$_SESSION['name']=$name;
		$_SESSION['ph_no']=$ph_no;
		$_SESSION['blood']=$blood;
		$_SESSION['atd_wt']=$atd_wt;
		$_SESSION['atd_dbms']=$atd_dbms;


    	/*echo "	<script>
				document.getElementById('head').innerHTML='$user_display';
			</script>";*/


	
    ?>
</body>
</html>