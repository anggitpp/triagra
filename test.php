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
<link rel="stylesheet" type="text/css" href="css/style.css">
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div style="position:absolute; left:0px; top:0px; width:1366px; height:6700px;">
    <div style="background-image:url(images/header.png); position:absolute; left:0px; top:0px; width:1366px; height: 300px;" id="home">
        <div style="float:left; width: 50%;">
            <img src="images/WEB_TRIAGRA_1366x768-rev_03.png" style="margin: 80px; margin-top: 50px;">
        </div>
        <div style="float:right; width: 50%; text-align: right; padding-top: 20px;  font-size: 14px;">
            <a href="http://triagra.co.id/webmail" target="_blank" class="login">Login</a>

            <ul style="margin-right: 150px; margin-top: 50px;">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="/contact.php">Contact Us</a></li>
            </ul>
        </div>
    </div>
    <div id='fixedmenu'>
        <div class='content-wrapper'>
            <div class='topnav'>
                <div>
                    <ul style="padding: 30px;">
                        <li style="padding-right: 700px; background: url(images/WEB_TRIAGRA_1366x768-rev_03.png); background-repeat: no-repeat; background-size: 150px;">
                        </li>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="/contact.php">Contact Us</a></li>
                        <li><a href="http://triagra.co.id/webmail" target="_blank">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <div style="background-image:url(images/WEB_TRIAGRA_1366x768-rev_12.png); position:absolute; left:0px; top:166px; width:678px; height:527px;" title="">
    </div>
    <div style="background-image:url(images/WEB_TRIAGRA_1366x768-rev_13.gif); position:absolute; left:678px; top:166px; width:131px; height:527px;" title="">
    </div>
    <div style="background-image:url(images/WEB_TRIAGRA_1366x768-rev_14.gif); position:absolute; left:809px; top:166px; width:385px; height:306px;" title="">
    </div>
    <div style="background-image:url(images/WEB_TRIAGRA_1366x768-rev_15.gif); position:absolute; left:1194px; top:166px; width:172px; height:306px;" title="">
    </div>
    <div style="background-image:url(images/WEB_TRIAGRA_1366x768-rev_16.gif); position:absolute; left:809px; top:472px; width:386px; height:58px;" title="">
    </div>
    <div style="background-image:url(images/WEB_TRIAGRA_1366x768-rev_17.gif); position:absolute; left:1195px; top:472px; width:171px; height:221px;" title="">
    </div>
    <div style="background-image:url(images/WEB_TRIAGRA_1366x768-rev_18.gif); position:absolute; left:809px; top:530px; width:385px; height:163px;" title="">
    </div>
    <div style="background-image:url(images/WEB_TRIAGRA_1366x768-rev_19.gif); position:absolute; left:1194px; top:530px; width:1px; height:163px;" title="">
    </div>
    <div style="background-image:url(images/WEB_TRIAGRA_1366x768-rev_20.gif); position:absolute; left:0px; top:693px; width:1366px; height:75px;" title="">
    </div>
    <div style="background-image:url(images/WEB_TRIAGRA_1366x768-rev_21.png); position:absolute; left:0px; top:768px; width:1366px; height:768px;" id="about">
    </div>
    <div style="background-image:url(images/WEB_TRIAGRA_1366x768-rev_22.png); position:absolute; left:0px; top:1536px; width:1366px; height:768px;" title="">
    </div>
    <div style="background-image:url(images/WEB_TRIAGRA_1366x768-rev_23.png); position:absolute; left:0px; top:2304px; width:1366px; height:767px;" title="">
    </div>
    <div style="background-image:url(images/WEB_TRIAGRA_1366x768-rev_24.png); position:absolute; left:0px; top:3071px; width:1366px; height:768px;" title="">
    </div>
    <div style="background-image:url(images/WEB_TRIAGRA_1366x768-rev_25.png); position:absolute; left:0px; top:3839px; width:1366px; height:768px;" title="">
    </div>
    <div style="background-image:url(images/WEB_TRIAGRA_1366x768-rev_26.png); position:absolute; left:0px; top:4607px; width:1366px; height:769px;" title="">
    </div>
    <div style="background-image:url(images/WEB_TRIAGRA_1366x768-rev_27.png); position:absolute; left:0px; top:5376px; width:1366px; height:767px;" title="">
    </div>
    <div style="background-image:url(images/WEB_TRIAGRA_1366x768-rev_28.png); position:absolute; left:0px; top:6143px; width:1366px; height:301px;" title="">
    </div>
    <div style="background-image:url(images/WEB_TRIAGRA_1366x768-rev_28.png); position:absolute; left:0px; top:6143px; width:1366px; height:301px;" title="">
    </div>
    <div style="background-image:url(images/footer.png); position:absolute; left:0px; top:6444px;  width:1366px; height:231px;">
        <div style="float:left; width:40%; padding: 40px; color:#fff; padding-top: 50px; padding-left: 70px; font-weight: bolder">
            <h4><i class="fa fa-map-marker"></i>&nbsp;&nbsp; <?= $r[alamat] ?></h4>
            <i class="fa fa-inbox"></i>&nbsp;&nbsp; Email : <?= $r[email] ?><br>
            <i class="fa fa-phone"></i>&nbsp;&nbsp; Telp : <?= $r[notelp] ?><br>
            <i class="fa fa-fax"></i>&nbsp;&nbsp; Fax : <?= $r[fax] ?>
        </div>
        <div style="float:right; width:50%; color:#fff; padding-left: 0px;" align="right">
            <img src="images/WEB_TRIAGRA_1366x768-rev_03.png" style="margin: 80px; margin-top: 50px; margin-bottom: 0px;">
            <p style="margin: 80px; margin-top: 50px; font-size: 14px;">Copyright &copy; <?= $r[nama_perusahaan] ?> <?= date("Y") ?></p>
        </div>
    </div>

</div>
</div>
<script src="scripts/custom.js"></script>
</body>
</html>
