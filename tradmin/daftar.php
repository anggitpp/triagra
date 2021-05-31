<?php
include "global.php";
$username = $_POST['username'];
$email = $_POST['email'];
$password = md5($_POST['password']);	
$cek = getField("SELECT username from tr_user where username = '$username'");
if(isset($_POST['daftar'])){
	if(!empty($cek)){
		echo "<script>alert('Username telah terdaftar');</script>";
		echo "<script>window.location='http://triagra.co.id/tradmin/';</script>";
	}else{
		$query = "INSERT INTO tr_user (id_user, username, email, password, created_date) VALUES (NULL, '$username', '$email', '$password', now())";

		db($query);

		echo "<script>alert('Register account berhasil, silahkan login menggunakan akun yang telah dibuat');</script>";
		echo "<script>window.location='http://triagra.co.id/tradmin/';</script>";
	}
}
?>