<html>
	<head>
		<title>
		Sidang UP
		</title>
		<!-- <link rel="stylesheet" href="css1.css"> -->
		<!-- <link href="https://fonts.googleapis.com/css?family=Acme&display=swap" rel="stylesheet"> -->
	</head>

<style type="text/css">
				body{
			background-image:url(bgfix.jpg);
			background-size:cover;
			background-attachment: fixed;
		}	
		</style>



		<body topmargin=10 leftmargin=10 ><center>
         <img src=am.jpg weight=100 height=100>
		<font face='Bernard MT Condensed' size=7 color=white face='#8A2BE2'><b><i>Pendaftaran Sidang UP</u></i></b></font>


		<table width=90%>
		<!-- <tr bgcolor=pink><td><center><a href=index.php>HOME</a></center></td><td><center><a href=about.php>About Us</a></center></td><td><center><a href=login.php>Login</a></center></td><td><center><a href=sign.php>Sign Up</a></center></td></tr> -->
		<!-- <tr><td colspan=2 width=50%>
		<font size=5><br>
			Online course portal for a  campus is a web based
 	   application which can be used for a campus.<br><br>
 	   In the present computerized world, one can built up
 	   his career through online courses having
 	   beneficial in time and achieving his goal
 	   in earning the biggest and most
 	   important investment in life.<br>
 	   The system stores information about
 	   all the latest courses and the registered users.<br><br>
 	   This allows registered users of the system
 	   to join a course available in the site
 	   and access the materials published for the course.<br>
 	   There will be a course portal home page
 	   which contain a registration link as well as login
</td><td colspan=2 width=50%> -->
<center>
<table>
<form name=frm1 action=login1.php>
<?php
if(isset($_GET['y'])){
$a=$_GET['y'];
if($a==1)
{
	echo"<tr ><td colspan=2><center><font color=red>*Invalid Id/Password</font></center></td></tr>";
}}

?>



<tr><td colspan=2><center><font color=yellow>Login here</font></center></td></tr>
	<tr><td>Enter User Id</td><td><input type=text name=t1></td></tr>
	<tr><td>Enter Password</td><td><input type=password name=t2></td></tr><br><br>
	<tr><td><input type=reset></td><td><input type=submit ></td></tr>
</table>
</form>
</center>
</td></tr></table>
</font>
</pre>
<br><br><br><br><br><br>
<!-- <center><a href="about.php">About us</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="about.php">Contact Us</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href>Site map</a></center> -->



			</form>
			</body>
</html>
