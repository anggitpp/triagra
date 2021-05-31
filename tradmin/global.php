<?php
session_start();
$server   = "localhost";
$user     = "root";
$pass     = "0";
$db       = "triagrac_db";

$con = mysqli_connect($server, $user, $pass, $db);
if (mysqli_connect_errno()) {
	echo "Gagal Koneksi : " .mysqli_connect_error();
} else {
}

function db($sql){
	global $con;
	mysqli_query($con, $sql);
}

function getField($sql) {
	global $con;
	$res = mysqli_query($con, $sql);
	$r = mysqli_fetch_row($res);
	return $r[0];
}

function getTanggal2($date, $format){
  $middle = strtotime($date);
  $new_date = date($format, $middle);

  return $new_date;
}

function sendMail($address, $subject, $message){
	include "plugins/PHPMailer/PHPMailerAutoload.php";
	$mail = new PHPMailer;
	$mail->SMTPDebug = 0;

	$mail->Debugoutput = 'html';
	$mail->Host = 'mail.triagra.co.id';

	$mail->Port = 465;
	$mail->SMTPSecure = 'ssl';

	$mail->SMTPAuth = true;
	$mail->Username = "support@triagra.co.id";
	$mail->Password = "semangat2020";

	$mail->setFrom('noreply@triagra.co.id', 'noreply');

	$mail->addAddress($address);
	$mail->Subject = $subject
	;
	$mail->msgHTML($message);
	if (!$mail->send()){
		return "Mailer Error: " . $mail->ErrorInfo;
	}else{
		return "DONE";
	}
}
?>