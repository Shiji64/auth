<?php
include_once 'database.php';

$email_id=$_POST['email_id'];

$rs=mysqli_query($conn,"select * from users where email_id='$email_id'");
if (mysqli_num_rows($rs)>0)
{
	echo "<br><br><br><div class=head1>Login Id Already Exists</div>";
	exit;
}
$first_name =$_POST['first_name'];
$last_name =$_POST['last_name'];
$email_id =$_POST['email_id'];
$password = md5($_POST['password']);
$user_dob =date('Y-m-d',strtotime($_POST['user_dob']));
$user_type =$_POST['user_type'];

$sql = "INSERT INTO users (user_type,first_name,last_name,email_id,password,user_dob)
 VALUES ('$user_type','$first_name','$last_name','$email_id','$password','$user_dob')";

if (mysqli_query($conn, $sql)) {
	echo "New record created successfully !";
} else {
	echo "Error: " . $sql . " " . mysqli_error($conn);
}
mysqli_close($conn);


