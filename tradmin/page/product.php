<?php
include '../global.php';
global $con;
$sql = mysqli_query($con, "SELECT * from tr_general where id_general = '1'");
$r = mysqli_fetch_assoc($sql);
if(isset($_POST['submit'])){
    mysqli_query($con, "UPDATE tr_general SET nama_perusahaan = '$_POST[nama_perusahaan]', summary = '$_POST[summary]', alamat = '$_POST[alamat]', notelp = '$_POST[notelp]', fax = '$_POST[fax]', email = '$_POST[email]', webmail = '$_POST[webmail]'");

    echo "<script>window.location='dashboard.php?c=general';</script>";
}
?>
<div class="right_col" role="main">
    <a href="dashboard.php?c=addProduct" class="btn btn-info">Tambah Data</a>
    <table class="table">
        <thead>
        <tr>
            <th width="5%">No.</th>
            <th width="25%">Name</th>
            <th width="50%">Description</th>
            <th width="10%">File</th>
            <th width="10%">Control</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $sql = mysqli_query($con, "SELECT * from tr_product");
        $no = 0;
        while ($r = mysqli_fetch_assoc($sql)){
            $no++;
            $link = "./files/".$r['filename'];
        ?>
            <tr>
                <th scope="row"><?= $no ?></th>
                <td><?= $r['name'] ?></td>
                <td><?= $r['description'] ?></td>
                <td><a href="<?= $link ?>" download><i class="fa fa-download fa-2x" aria-hidden="true"></i>
                    </a></td>
                <td>
                    <a href="dashboard.php?c=addProduct&id=<?= $r['id']?>"><i class="fa fa-pencil fa-lg" aria-hidden="true"></i></a>
                    <a href="dashboard.php?c=deleteProduct&id=<?= $r['id']?>" onclick="return confirm('Apakah anda yakin untuk menghapus data ini?')"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></a>
                </td>
            </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
</div>