<?php
include 'tradmin/global.php';
global $con;
$sql = mysqli_query($con, "SELECT * from tr_general WHERE id_general = '1'");
$r = mysqli_fetch_assoc($sql);
?>
<html>
<head>
	<title>TRIAGRA SURYA NUSANTARA</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<link rel="shortcut icon" href="favicon.png">
</head>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<style type="text/css">
	label{
		font-weight: bolder;
	}
</style>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
	<div style="background-image:url(images/header.png); width:1366px; height: 160px;" id="home">
        <div style="float:left; width: 40%;">
            <img src="images/WEB_TRIAGRA_1366x768-rev_03.png" style="margin: 80px; margin-top: 50px;">
        </div>
        <div style="float:right; width: 60%; text-align: right; padding-top: 20px;  font-size: 14px;">
            <ul style="margin-right: 150px; margin-top: 50px;">
                <li><a href="index.php">Home</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="product.php">Product</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
	</div>
	<div id='fixedmenu'>
		<div class='content-wrapper'>
			<div class='topnav'>
                <div style="margin-top: 15px;">
                    <ul style="padding: 20px;">
                        <li style="margin-left: 20px;padding-right: 700px; background: url(images/WEB_TRIAGRA_1366x768-rev_03.png); background-repeat: no-repeat; background-size: 200px;">
                        </li>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="profile.php">Profile</a></li>
                        <li><a href="product.php">Product</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
				</div>
			</div>
		</div>
	</div>

	<div style="height: 850px; width: 1366px; background-image:url(images/contact-form.png); background-repeat:no-repeat; background-size: 100% 100%; padding: 50px; padding-right: 0; padding-top: 120px;">
		<div class="row" style="margin: auto; width: 70%;">
			<div class="col-md-12 col-xm-12">
				<form method="post" action="">
					<fieldset style="border:0px solid #ccc; border-radius: 5px; padding: 10px;">
						<div class="form-group">
							<label for="exampleSelect1">Type <span style='color:red;'>*</span></label>
							<select class="form-control" id="exampleSelect1" name="tipe" required>
								<option value="Informasi & Pertanyaan">Informasi &amp; Pertanyaan</option>
								<option value="Saran & Kritik">Saran &amp; Kritik</option>
							</select>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col">
									<label>Name <span style='color:red;'>*</span></label>
									<input type="text" name="nama" class="form-control" placeholder="Enter Name" required>
								</div>
								<div class="col">
									<label>Email <span style='color:red;'>*</span></label>
									<input type="email" name="email" class="form-control" placeholder="Enter Email" required>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label>Subject <span style='color:red;'>*</span></label>
							<input type="text" name="subjek" class="form-control" placeholder="Enter Subject" required>
						</div>				
						<div class="form-group">
							<label for="exampleTextarea">Message <span style='color:red;'>*</span></label>
							<textarea name="pesan" class="form-control" id="exampleTextarea" rows="3" required></textarea>
						</div>
						<div class="form-group">
							<label>Phone</label>
							<input name="hp" type="text" class="form-control" placeholder="Enter Phone">
						</div>
						<div align="right">
							<button type="submit" class="btn btn-success" name="BtnSubmit" value="1">Submit</button>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
	
	<div style="background-image:url(images/footer.png); width:1366px; height:231px; padding-top:20px; margin-top: 0px; padding-left: 70px;">
		<div style="float:left; width:45%; padding: 40px; color:#fff; font-weight: bolder;">
			<h5 style="font-weight: bolder;"><i class="fa fa-map-marker"></i>&nbsp;&nbsp; <?= $r['alamat'] ?></h5>
			<i class="fa fa-inbox"></i>&nbsp;&nbsp; Email : <?= $r['email'] ?><br>
			<i class="fa fa-phone"></i>&nbsp;&nbsp; Telp : <?= $r['notelp'] ?><br>
			<i class="fa fa-fax"></i>&nbsp;&nbsp; Fax : <?= $r['fax'] ?>
		</div>
		<div style="float:right; width:45%; color:#fff;" align="right">
			<img src="images/WEB_TRIAGRA_1366x768-rev_03.png" style="margin: 80px; margin-top: 40px; margin-bottom: 0px;">
			<p style="margin: 80px; margin-top: 50px; font-size: 14px;">Copyright &copy; <?= $r['nama_perusahaan'] ?> <?= date("Y") ?></p>
		</div>
	</div>

	<?php
	if(!empty($_POST['BtnSubmit'])){
		mysqli_query($con, "INSERT INTO tr_inbox (id_inbox, tipe, nama, email, hp, subjek, pesan, created_date) VALUES (NULL,'$_POST[tipe]','$_POST[nama]','$_POST[email]','$_POST[hp]','$_POST[subjek]','$_POST[pesan]',now())");

		sendMail("$r[webmail]", "Hallo admin, ada pesan masuk dari $_POST[nama]", "Type : $_POST[tipe]<br>Name : $_POST[nama]<br>Email : $_POST[email]<br>Subject : $_POST[subjek]<br>Message : $_POST[pesan]<br>Phone : $_POST[hp]");

		echo "<script>alert('Your message has been successfully submitted!');</script>";
		echo "<script>window.location = 'contact.php';</script>";
	}
	?>

	<script src="scripts/custom.js"></script>
</body>
</html>
