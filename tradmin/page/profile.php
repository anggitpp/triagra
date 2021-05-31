<?php
	include '../global.php';
	global $con;
	$sql = mysqli_query($con, "SELECT * from tr_user where username = '$_SESSION[username]'");
	$r = mysqli_fetch_assoc($sql);
	if(isset($_POST['submit'])){
    if(!empty($_POST[password])){
		  mysqli_query($con, "UPDATE tr_user SET nama = '$_POST[nama]', hp = '$_POST[hp]', email = '$_POST[email]', password = '".md5($_POST[password])."' where username = '$_SESSION[username]'");
		}else{
      mysqli_query($con, "UPDATE tr_user SET nama = '$_POST[nama]', hp = '$_POST[hp]', email = '$_POST[email]' where username = '$_SESSION[username]'");
    }

		echo "<script>window.location='dashboard.php?c=profile';</script>";
	}
?>
<div class="right_col" role="main">
  <div class="">
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
          <div class="x_title">
            <h2>Profile Setting</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="dashboard.php?c=profile">

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Name <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="nama" name="nama" required="required" class="form-control" value="<?= $r[nama] ?>">
                </div>
              </div>
             
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Phone 
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="hp" name="hp" required="required" class="form-control" value="<?= $r[hp] ?>">
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
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Username <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="username" name="username" class="form-control" value="<?= $r[username] ?>" readonly>
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Password (Kosongkan jika tidak ingin diganti)
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="password" name="password" class="form-control" value="">
                </div>
              </div>
              <!-- <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Foto
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="file" id="file" name="file" class="form-control"">
                </div>
              </div> -->
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