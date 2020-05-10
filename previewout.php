<?php include 'Fragment/header.php';?>
<?php include 'Fragment/sidebar.php'; ?>
<?php include 'Functions/sessionGudangUmum.php'; ?>
<?php include 'Functions/acceptProcess.php'; ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Kode Permintaan :
        <small><?php echo $data['idpermintaan'];?></small>
      </h1>
    </section>

    <div class="pad margin no-print">
      <div class="callout callout-info" style="margin-bottom: 0!important;">
        <h4><i class="fa fa-info"></i> Note:</h4>
        This page has been enhanced for printing. Click the print button at the bottom of the invoice to print.
      </div>
    </div>

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

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <a href="printout.php?id=<?php echo $data['idpermintaan'];?>&out=<?php echo $reqOut;?>" target="_blank" class="btn btn-primary pull-right"><i class="fa fa-print"></i> Print</a>
        </div>
      </div>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>
  <!-- /.content-wrapper -->
  <?php include 'Fragment/scripts.php'; ?>
  <!--Custom Scripts below-->
<script>

  <!--End of Custom Scripts-->
  
  <?php include 'Fragment/footer.php'; ?>
  