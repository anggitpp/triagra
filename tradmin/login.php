<?php
include "global.php";
$query = "SELECT * FROM tr_user where username = '$_POST[lusername]' and password = '".md5($_POST[lpassword])."'";
$sql = mysqli_query($con, $query);
$row = mysqli_num_rows($sql);
if($row > 0){
	$_SESSION['username'] = $_POST['lusername'];
	echo "<script>window.location='http://triagra.co.id/tradmin/dashboard.php';</script>";
}else{
	echo "<script>alert('Username / Password yang anda masukan salah!');</script>";
	echo "<script>window.location='http://triagra.co.id/tradmin/';</script>";
}


?>