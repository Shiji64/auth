<?php
include_once 'database.php';
extract($_POST);

if(isset($submit))
{
	$pass = md5($password);
	$rs=mysqli_query($conn,"select * from users where email_id='$username' and password='$pass'");
	if(mysqli_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION["login"]=$username;
	}
}
if (isset($_SESSION["login"]))
{
	echo "<h1 align=center>You are sucessfully loginned!!!</h1>";
	if($rs[1] == 0){
		header("Location: amin_welcome.php");
	}else{
		header("Location: others.php");
	}
	exit();
}
?>