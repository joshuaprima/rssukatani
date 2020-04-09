<?php include 'Fragment/header.php';?>
<?php include 'Fragment/sidebar.php'; ?>

<body>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">User Requests Data</h3>
                    <div class="box-tools pull-right">
                        <a type="button" class="btn btn-box-tool" href="index.php"><i class="fa fa-remove"></i></a>
                     </div>
                </div>
          <div class="box-body">
          <div style="overflow-x:auto;">
            <?php include 'Functions/Tables/ReqTableList.php'?>
			  </div>
        <div class="box-footer">
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include 'Fragment/scripts.php'; ?>
  <!--Custom Scripts below-->
  <!--Datatable Scripts-->
  <script>
  $(function () {
    $('#example1').DataTable({
	order: [[0,'asc']],
	   "columns": [
    { "orderable": true},
    { "orderable": true, "searchable": true },
	{ "orderable": true, "searchable": true },
    { "orderable": true, "searchable": true },
    { "orderable": true, "searchable": true },
    { "orderable": false, "searchable": false, "defaultContent": ""}
  ]
	  })
  })
</script>
<!--end of Datatable Scripts-->
<!--End of Custom Scripts-->
<?php include 'Fragment/footer.php'; ?>
  