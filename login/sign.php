<html>
	<head>
		<title>
		Sidang UP
		</title>
	</head>


<style type="text/css">
				body{
			background-image:url(bgfix.jpg);
			background-size:cover;
			background-attachment: fixed;
		}	
		</style>

		<body bgcolor="" topmargin=10 leftmargin=10><center>
         <img src=am.jpg weight=100 height=100>
		<font face='Bernard MT Condensed' size=7 color=black face='#8A2BE2'><b><i>REGISTER</i></b></font><br>

		<table width=90% align="center">
		<tr bgcolor=white>
			<td><center><a href=index.php>HOME</a></center></td>
			
			<td><center><a href=login.php>Login</a></center></td>
			<td><center><a href=sign.php>Sign Up</a></center></td>
		</tr>
		<td colspan=2 width=50%>
<center>
<table>
<form name=frm1 action=sign1.php>
<?php
if(isset($_GET['x'])){
$a=$_GET['x'];
if($a==1)
{
	echo"<tr bgcolor=yellow><td colspan=2><center><font color=blue>User Already Exists</font></center></td></tr>";
}
if($a==2)
{
	echo"<tr><td colspan=2 bgcolor=pink><center><font color=blue>User created sucessfully</font></center></td></tr>";
}
}
?><br>
<tr ><td colspan=2><center><font color=black>Sign up here<br></font></center></td></tr>

	<tr><td>Enter User Name<td><input type=text name=t3></td></tr>
	<tr><td>Enter Password</td><td><input type=password name=t4></td></tr>
	<tr></tr><tr></tr><br>
	<tr><td></td><td><input type=submit></td></tr>
</table>
</form>
</center>
</td></tr></table>
</font>
</pre>
<br><br><br><br><br><br>
			</form>
			</body>
</html>
