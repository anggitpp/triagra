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
            <li><a href="#">Product</a></li>
            <li><a href="contact.php">Contact</a></li>
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
                    <li><a href="#">Product</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div style="height: 2132px; width: 1366px; background-image:url(images/temp/product.jpg); background-repeat:no-repeat; background-size: 100% 100%; padding: 50px; padding-right: 0; padding-top: 120px;">
</div>
<br/>
<br/>

<div style="padding-left: 20px; padding-right: 20px;">
    <h4><b>Document Lists</b></h4>
    <table class="table" style="width: 100%">
        <tr>
            <th width="50%">Name</th>
            <th width="5%">Download</th>
        </tr>
        <?php
        $sql_ = mysqli_query($con, "SELECT * from tr_product");
        while ($r_ = mysqli_fetch_assoc($sql_)){
            $link = "tradmin/files/".$r_['filename'];
            ?>
            <tr>
                <td><?= $r_['name'] ?></td>
                <td align="left"><a href="<?= $link ?>" download><i class="fa fa-download fa-2x" style="color: green"></i></a></td>
            </tr>
        <?php
        }
        ?>
    </table>
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

<script src="scripts/custom.js"></script>
</body>
</html>
