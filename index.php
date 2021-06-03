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
<link rel="stylesheet" type="text/css"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div style="position:absolute; left:0px; top:0px; width:1366px; height:4000px;">
    <div id="home"/>
    <div style="float:right; width: 60%; text-align: right; padding-top: 40px;  font-size: 14px;">
        <ul style="margin-right: 80px; margin-top: 70px;">
            <li><a href="#home">Home</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="product.php">Product</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </div>
</div>
<div id='fixedmenuindex'>
    <div class='content-wrapper'>
        <div class='topnav'>
            <div>
                <ul style="padding: 20px;">
                    <li style="margin-left: 20px;padding-right: 700px; background: url(images/WEB_TRIAGRA_1366x768-rev_03.png); background-repeat: no-repeat; background-size: 200px;">
                    </li>
                    <li><a style="margin-top: 10px;" href="#home">Home</a></li>
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="product.php">Product</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="about"/>
<div id="image1"/>
<div id="values"/>
<div id="flow"/>
<div id="project"/>
<div id="partner"/>
<div style="background-image:url(images/footer.png); position:absolute; left:0px; top:765px;  width:1366px; height:231px;">
    <div style="float:left; width:40%; padding: 40px; color:#fff; padding-top: 50px; padding-left: 70px; font-weight: bolder">
        <h4><i class="fa fa-map-marker"></i>&nbsp;&nbsp; <?= $r['alamat'] ?></h4>
        <i class="fa fa-inbox"></i>&nbsp;&nbsp; Email : <?= $r['email'] ?><br>
        <i class="fa fa-phone"></i>&nbsp;&nbsp; Telp : <?= $r['notelp'] ?><br>
        <i class="fa fa-fax"></i>&nbsp;&nbsp; Fax : <?= $r['fax'] ?>
    </div>
    <div style="float:right; width:50%; color:#fff; padding-left: 0px;" align="right">
        <img src="images/WEB_TRIAGRA_1366x768-rev_03.png"
             style="margin: 80px; margin-top: 50px; margin-bottom: 0px;">
        <p style="margin: 80px; margin-top: 50px; font-size: 14px;">Copyright
            &copy; <?= $r['nama_perusahaan'] ?> <?= date("Y") ?></p>
    </div>
</div>
<script src="scripts/custom.js"></script>
</body>
</html>
<style>
    #home {
        background-image: url(images/temp/header.jpg);
        position: absolute;
        left: 0px;
        top: 0px;
        width: 1400px;
        height: 1200px;
        background-size: 1400px 1200px;
    }

    #about {
        background-image: url(images/temp/about.png);
        position: absolute;
        left: 0px;
        top: 800px;
        width: 1400px;
        height: 1000px;
        background-size: 1400px 1000px;
    }

    #values {
        background-image: url(images/WEB_TRIAGRA_1366x768-rev_22.png);
        position: absolute;
        left: 0px;
        top: 788px;
        width: 1366px;
        height: 768px;
    }

    #flow {
        background-image: url(images/WEB_TRIAGRA_1366x768-rev_25.png);
        position: absolute;
        left: 0px;
        top: 769px;
        width: 1366px;
        height: 768px;
    }

    #image1 {
        background-image: url(images/temp/image1.jpg);
        position: absolute;
        left: 0px;
        top: 936px;
        width: 1366px;
        height: 767px;
    }

    #project {
        background-image: url(images/temp/project.jpg);
        position: absolute;
        left: 0px;
        top: 750px;
        width: 1366px;
        height: 769px;
    }

    #partner {
        background-image: url(images/temp/partner.jpg);
        position: absolute;
        left: 0px;
        top: 763px;
        width: 1366px;
        height: 769px;
    }

</style>
