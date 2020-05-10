<!DOCTYPE html>
<html>
<head>
<?php include 'Functions/sessions.php';?>
<?php include 'Functions/sessionGudangUmum.php'; ?>
<?php include 'Functions/getPrintOutData.php'; ?>
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
            <small class="pull-right"><?php echo $dateNow;?></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          Receiver
          <address>
            <strong><?php echo $data['nama_pegawai'];?></strong><br>
              <?php echo $data['unit'];?><br>
          </address>
        </div>
        <div class="col-sm-4 invoice-col">
          Admin Gudang
          <address>
            <strong><?php echo $data2['nama_pegawai'];?></strong><br>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <b>Kode Permintaan : <?php echo $data['idpermintaan'];?></b><br>
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
              <th>Jumlah Permintaan</th>
              <th>Jumlah Keluar</th>
              <th>Nama Barang</th>
              <th>Tipe Barang</th>
              <th>Deskripsi Barang</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td><?php echo $data['jumlah'];?></td>
              <td><?php echo $reqOut;?></td>
              <td><?php echo $data['nama'];?></td>
              <td><?php echo $data['types'];?></td>
              <td><?php echo $data['deskripsi_barang'];?></td>
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
          <?php echo $data['deskripsi_permintaan'];?>
          </p>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>
</html>
