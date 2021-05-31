<?php
include '../global.php';
$fFile = "./files";
global $con;
if(!empty($_GET['id'])) {
    $sql = mysqli_query($con, "SELECT * from tr_product where id = '" . $_GET['id'] . "'");
    $r = mysqli_fetch_assoc($sql);
}
if(isset($_POST['submit'])){
    $filename = $_FILES['filename']['name'];
    move_uploaded_file(
        $_FILES['filename']['tmp_name'], $fFile."/".$_FILES['filename']['name']
    );
    if(!empty($_GET['id'])){
        $filename = empty($filename) ? $r['filename'] : $filename;
        mysqli_query($con, "UPDATE tr_product SET name = '$_POST[name]', description = '$_POST[description]', filename = '$filename' WHERE id = '".$_GET['id']."'");
    }else{
        mysqli_query($con, "INSERT tr_product SET name = '$_POST[name]', description = '$_POST[description]', filename = '$filename'");
    }

    echo "<script>window.location='dashboard.php?c=product';</script>";
}
?>
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Add Product</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form id="demo-form2"
                              data-parsley-validate
                              class="form-horizontal form-label-left"
                              method="post"
                              action="dashboard.php?c=addProduct<?= !empty($_GET['id']) ? "&id=".$_GET['id'] : ""?>"
                              enctype="multipart/form-data">
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama Produk <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="name" name="name" required="required" class="form-control" value="<?= $r['name'] ?? '' ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Deskripsi
                                </label>
                                <div class="col-md-9 col-sm-9 ">
                                    <textarea class="form-control" name="description" rows="3"><?= $r['description'] ?? '' ?></textarea>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Contact to Webmail <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="file" name="filename" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <button type="submit" class="btn btn-success" name="submit" value="submit">Submit</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>