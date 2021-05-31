<?php
include '../global.php';
global $con;
$sql = mysqli_query($con, "DELETE FROM tr_product WHERE id = '".$_GET['id']."'");
echo "<script>alert('DATA BERHASIL DIHAPUS');window.location='dashboard.php?c=product';</script>";
?>