<?php
  include "../global.php";
  global $con;
?>
<link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

<link href="vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
<link href="vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
<link href="vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
<link href="vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
<div class="right_col" role="main">
  <div class="">
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
          <div class="x_title">
            <h2>Inbox</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
           <table id="datatable" class="table table-striped table-bordered" style="width:100%">
            <thead>
              <tr>
                <th width="50">No</th>
                <th width="100">Date</th>
                <th width="100">Type</th>
                <th width="100">Name</th>
                <th width="150">Email</th>
                <th width="100">Hp</th>
                <th width="*">Subject - Message</th>
              </tr>
            </thead>
            <tbody>
            <?php
            $sql = mysqli_query($con,"SELECT * from tr_inbox order by id_inbox desc");
            while ($r = mysqli_fetch_assoc($sql)) {
              $no++;
              $pesan = "<b>$r[subjek]</b><br>$r[pesan]";
            ?>
              <tr>
                <td align="center"><?= $no ?></td>
                <td align="center"><?= getTanggal2($r[created_date],"d/m/Y") ?></td>
                <td><?= $r[tipe] ?></td>
                <td><?= $r[nama] ?></td>
                <td><?= $r[email] ?></td>
                <td><?= $r[hp] ?></td>
                <td><?= $pesan ?></td>
              </tr>
            <?php
            }
            ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>