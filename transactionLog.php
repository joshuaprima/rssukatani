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
                    <h3 class="box-title">Transaction History Data</h3>
                    <div class="box-tools pull-right">
                        <a type="button" class="btn btn-box-tool" href="index.php"><i class="fa fa-remove"></i></a>
                     </div>
                </div>
          <div class="box-body">
          <div style="overflow-x:auto;">
            <?php include 'Functions/Tables/TransactionLog.php'?>
			  </div>
        <div class="box-footer">
        <div class="callout callout-info">
          <h4>Reporting Data</h4>

          <p>You can backup the data into .csv format, all the transaction data in the database will be imported. 
          If you want to reset all the data, we recommend to backup before doing any reset. 
          Backup and Reset the data periodically to avoid insufficient memory.</p>

          <?php
          echo "<a class='btn btn-block-sm btn-success' style='margin-right: 15px; margin-top: 15px;' href='BackupList.php'>Backup</a>";
          echo "<a class='btn btn-block-sm btn-danger' style='margin-top: 15px;'onClick=\"javascript: return confirm ('Please backup before reset the data. Click OK to confirm reset');\" href='Functions/resetTransactionLog.php'>Reset</a>";
          ?>
        </div>
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
    { "orderable": true, "searchable": true },
    { "orderable": true, "searchable": true }
  ]
	  })
  })
</script>
<!--end of Datatable Scripts-->
<!--End of Custom Scripts-->
<?php include 'Fragment/footer.php'; ?>
  