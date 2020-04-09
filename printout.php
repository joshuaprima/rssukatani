<!DOCTYPE html>
<html>
<head>
<?php include 'Functions/sessions.php';?>
<?php include 'Functions/sessionGudangUmum.php'; ?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Print Transaction</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="Component/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="Component/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="Component/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="Component/dist/css/AdminLTE.min.css">
  

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body onload="window.print();">
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> Rs. Sukatani
            <small class="pull-right">Date: 2/10/2019</small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          Receiver
          <address>
            <strong>Agus Rembo</strong><br>
            Poli Gigi<br>
          </address>
        </div>
        <div class="col-sm-4 invoice-col">
          Warehouse Administrator
          <address>
            <strong>Anandya Marishka</strong><br>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <b>Invoice #0001</b><br>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>Qty</th>
              <th>Inventory</th>
              <th>Serial #</th>
              <th>Description</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>1</td>
              <td>Syringe</td>
              <td>Ef01275-917fgd...</td>
              <td>Syringe set</td>
            </tr>
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-12">
          <p class="well well-sm no-shadow" style="margin-top: 10px;">
          <b>Deskripsi Peminjaman: </b><br>
            Lorem ipsum
          </p>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <a href="printout.php" target="_blank" class="btn btn-primary pull-right"><i class="fa fa-print"></i> Print</a>
        </div>
      </div>
    </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>
</html>
