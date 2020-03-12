<?php
session_start();
if(!isset($_SESSION['uid'])){
header('location:sipetorr.php');

}
else
{
echo "WELCOME :".$_SESSION['uid'];
echo "<a href='signout.php'>LOGOUT</a>";
}


?>
