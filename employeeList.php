<?php include 'Fragment/header.php';?>
<?php include 'Fragment/sidebar.php'; ?>
<?php include 'Functions/sessionadmin.php'; ?>

<body>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">Employee Registration</h3>
                    <div class="box-tools pull-right">
                        <a type="button" class="btn btn-box-tool" href="index.php"><i class="fa fa-remove"></i></a>
                     </div>
                </div>
          <div class="box-body">
          <div style="overflow-x:auto;">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>EmpID</th>
                  <th>Employee Name</th>
                  <th>Username</th>
                  <th>Department</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                <td>99</td>
                <td>Joko</td>
                <td>Joko21</td>
                <td>Farmasi</td>
                <td><a class='btn btn-block btn-warning' href=''>Edit</a>
                  <a class='btn btn-block btn-danger' href=''>Delete</a></td>
                </tr>
                <tr>
                <td>182</td>
                <td>Andi</td>
                <td>Andimama</td>
                <td>KIA</td>
                <td><a class='btn btn-block btn-warning' href=''>Edit</a>
                  <a class='btn btn-block btn-danger' href=''>Delete</a></td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                  <th>EmpID</th>
                  <th>Employee Name</th>
					<th>Username</th>
					<th>Department</th>
                  <th>Actions</th>
                </tr>
                </tfoot>
              </table>
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
    { "orderable": false, "searchable": false, "defaultContent": ""}
  ]
	  })
  })
</script>
<!--end of Datatable Scripts-->
<!--End of Custom Scripts-->
<?php include 'Fragment/footer.php'; ?>
  