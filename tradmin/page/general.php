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
  <div class="">
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
          <div class="x_title">
            <h2>General Setting</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="dashboard.php?c=general">

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Company Name <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="nama_perusahaan" name="nama_perusahaan" required="required" class="form-control" value="<?= $r[nama_perusahaan] ?>">
                </div>
              </div>
              <div class="form-group row">
              <label class="col-form-label col-md-3 col-sm-3 label-align">Summary
                </label>
                <div class="col-md-9 col-sm-9 ">
                  <textarea class="form-control" name="summary" rows="3"><?= $r[summary] ?></textarea>
                </div>
              </div>
              <div class="form-group row">
              <label class="col-form-label col-md-3 col-sm-3 label-align">Address
                </label>
                <div class="col-md-9 col-sm-9 ">
                  <textarea class="form-control" name="alamat" rows="3"><?= $r[alamat] ?></textarea>
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">No Telepon <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="notelp" name="notelp" required="required" class="form-control" value="<?= $r[notelp] ?>">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Fax <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="fax" name="fax" required="required" class="form-control" value="<?= $r[fax] ?>">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Email <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="email" name="email" required="required" class="form-control" value="<?= $r[email] ?>">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Contact to Webmail <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="email" name="webmail" required="required" class="form-control" value="<?= $r[webmail] ?>" placeholder="Enter your email">
                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="item form-group">
                <div class="col-md-6 col-sm-6 offset-md-3">
                  <button class="btn btn-primary" type="reset">Reset</button>
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