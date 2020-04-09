<?php include 'Fragment/header.php';?>
<?php include 'Fragment/sidebar.php'; ?>
<?php include 'Functions/sessionGudangUmum.php'; ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Invoice
        <small>#0001</small>
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
    <div class="clearfix"></div>
  </div>
  <!-- /.content-wrapper -->
  <?php include 'Fragment/scripts.php'; ?>
  <!--Custom Scripts below-->
<script>

  <!--End of Custom Scripts-->
  
  <?php include 'Fragment/footer.php'; ?>
  