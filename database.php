<?php
$url='localhost';
$username='root';
$password='root';
$conn=mysqli_connect($url,$username,$password,"db_auth");
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}
?>