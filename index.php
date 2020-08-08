<?php include 'Fragment/header.php';?>
<?php include 'Fragment/sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> Home</li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php 
              $query = "SELECT * FROM barang" ;
              $sql   = mysqli_query($con,$query);
              $num_rows = mysqli_num_rows($sql);
              echo $num_rows;
              ?></h3>

              <p>Items</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag" style="margin:10px;"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php 
              $query = "SELECT * FROM permintaan where status='Waiting'" ;
              $sql   = mysqli_query($con,$query);
              $num_rows = mysqli_num_rows($sql);
              echo $num_rows;
              ?></sup></h3>

              <p>Requests</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars" style="margin:10px;"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php 
              $query = "SELECT * FROM pegawai" ;
              $sql   = mysqli_query($con,$query);
              $num_rows = mysqli_num_rows($sql);
              echo $num_rows;
              ?></h3>

              <p>Users</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add" style="margin:10px;"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php 
              $query = "SELECT * FROM transaksi" ;
              $sql   = mysqli_query($con,$query);
              $num_rows = mysqli_num_rows($sql);
              echo $num_rows;
              ?></h3>

              <p>Transactions</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph" style="margin:10px;"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
      </div>
	  <div class="row">
		<!-- ./col -->
		<div class="col-md-5">
          <!-- DONUT CHART -->
          <div class="box box-success" style="height: 361.71px;">
            <div class="box-header with-border">
              <h3 class="box-title">Stored Items</h3>
              
            </div>
            <div class="box-body">
              <canvas id="pieChart" style="height: 273px; width: 517px; margin-top: 20px;" width="730" height="364"></canvas>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
      </div>
      <div class="col-md-7">
          <!-- BAR CHART -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Request and Transaction Trends</h3>

            </div>
            <div class="box-body chart-responsive">
              <div class="chart" id="bar-chart" style="height: 300px;"></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
	  </div>
    <?php
            if ($_SESSION['unit'] == "Administrator") {
              include 'Functions/Tables/AlertTable.php';
             }
            if ($_SESSION['unit'] == "Gudang Umum") {
              include 'Functions/Tables/AlertTable.php';
             }
            else {
            }
        ?>
    
      <!-- /.row -->
      <!-- Main row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include 'Fragment/scripts.php'; ?>
  <!--Custom Scripts below-->
  <script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

   
    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieChart       = new Chart(pieChartCanvas)
    var PieData        = [
      {
        value    : <?php 
              $query = "SELECT * FROM barang where types='ATK'" ;
              $sql   = mysqli_query($con,$query);
              $num_rows = mysqli_num_rows($sql);
              echo $num_rows;
              ?>,
        color    : '#f56954',
        highlight: '#f56954',
        label    : 'ATK'
      },
      {
        value    : <?php 
              $query = "SELECT * FROM barang where types='Kebersihan'" ;
              $sql   = mysqli_query($con,$query);
              $num_rows = mysqli_num_rows($sql);
              echo $num_rows;
              ?>,
        color    : '#f67124',
        highlight: '#f67124',
        label    : 'Kebersihan'
      },
      {
        value    : <?php 
              $query = "SELECT * FROM barang where types='BMHP'" ;
              $sql   = mysqli_query($con,$query);
              $num_rows = mysqli_num_rows($sql);
              echo $num_rows;
              ?>,
        color    : '#00a65a',
        highlight: '#00a65a',
        label    : 'BMHP'
      },
      {
        value    : <?php 
              $query = "SELECT * FROM barang where types='Cetakan'" ;
              $sql   = mysqli_query($con,$query);
              $num_rows = mysqli_num_rows($sql);
              echo $num_rows;
              ?>,
        color    : '#f39c12',
        highlight: '#f39c12',
        label    : 'Cetakan'
      },
      {
        value    : <?php 
              $query = "SELECT * FROM barang where types='Bahan Gigi'" ;
              $sql   = mysqli_query($con,$query);
              $num_rows = mysqli_num_rows($sql);
              echo $num_rows;
              ?>,
        color    : '#00c0ef',
        highlight: '#00c0ef',
        label    : 'Bahan Gigi'
      },
      {
        value    : <?php 
              $query = "SELECT * FROM barang where types='Reagen Lab'" ;
              $sql   = mysqli_query($con,$query);
              $num_rows = mysqli_num_rows($sql);
              echo $num_rows;
              ?>,
        color    : '#3c8dbc',
        highlight: '#3c8dbc',
        label    : 'Reagen Lab'
      },
      {
        value    : <?php 
              $query = "SELECT * FROM barang where types='Makanan Tambahan'" ;
              $sql   = mysqli_query($con,$query);
              $num_rows = mysqli_num_rows($sql);
              echo $num_rows;
              ?>,
        color    : '#d2d6de',
        highlight: '#d2d6de',
        label    : 'Makanan Tambahan'
      },
      {
        value    : <?php 
              $query = "SELECT * FROM barang where types='Formulir'" ;
              $sql   = mysqli_query($con,$query);
              $num_rows = mysqli_num_rows($sql);
              echo $num_rows;
              ?>,
        color    : '#f56954',
        highlight: '#f56954',
        label    : 'Formulir'
      }
    ]
    var pieOptions     = {
      //Boolean - Whether we should show a stroke on each segment
      segmentShowStroke    : true,
      //String - The colour of each segment stroke
      segmentStrokeColor   : '#fff',
      //Number - The width of each segment stroke
      segmentStrokeWidth   : 2,
      //Number - The percentage of the chart that we cut out of the middle
      percentageInnerCutout: 50, // This is 0 for Pie charts
      //Number - Amount of animation steps
      animationSteps       : 100,
      //String - Animation easing effect
      animationEasing      : 'easeOutBounce',
      //Boolean - Whether we animate the rotation of the Doughnut
      animateRotate        : true,
      //Boolean - Whether we animate scaling the Doughnut from the centre
      animateScale         : false,
      //Boolean - whether to make the chart responsive to window resizing
      responsive           : true,
      // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio  : true,
      //String - A legend template
      legendTemplate       : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>'
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    pieChart.Doughnut(PieData, pieOptions)
  })
</script>
<script>
  $(function () {
    "use strict";
    //BAR CHART
    var bar = new Morris.Bar({
      element: 'bar-chart',
      resize: true,
      data: [
        {y: '<?php $query = "SELECT DATE_FORMAT(SUBDATE(LAST_DAY(NOW()), INTERVAL 5 MONTH),'%M') AS showdate" ;
              $sql   = mysqli_query($con,$query);
              $data = mysqli_fetch_array($sql);
              echo $data['showdate']; ?>', 
              a: <?php $query = "SELECT *, DATE_FORMAT(`tgl_permintaan`,'%M') AS showdate FROM `permintaan` WHERE status = 'Waiting' AND tgl_permintaan BETWEEN SUBDATE(LAST_DAY(NOW()), INTERVAL 6 MONTH) AND LAST_DAY(SUBDATE(CURDATE(), INTERVAL 5 MONTH))" ;
              $sql   = mysqli_query($con,$query);
              $data = mysqli_num_rows($sql);
              echo $data; ?>, 
              b: <?php $query = "SELECT *, DATE_FORMAT(`tgl_transaksi`,'%M') AS showdate FROM `transaksi` WHERE tgl_transaksi BETWEEN SUBDATE(LAST_DAY(NOW()), INTERVAL 6 MONTH) AND LAST_DAY(SUBDATE(CURDATE(), INTERVAL 5 MONTH))" ;
              $sql   = mysqli_query($con,$query);
              $data = mysqli_num_rows($sql);
              echo $data; ?>},
        {y: '<?php $query = "SELECT DATE_FORMAT(SUBDATE(LAST_DAY(NOW()), INTERVAL 4 MONTH),'%M') AS showdate" ;
              $sql   = mysqli_query($con,$query);
              $data = mysqli_fetch_array($sql);
              echo $data['showdate']; ?>', 
              a: <?php $query = "SELECT *, DATE_FORMAT(`tgl_permintaan`,'%M') AS showdate FROM `permintaan` WHERE status = 'Waiting' AND tgl_permintaan BETWEEN SUBDATE(LAST_DAY(NOW()), INTERVAL 5 MONTH) AND LAST_DAY(SUBDATE(CURDATE(), INTERVAL 4 MONTH))" ;
              $sql   = mysqli_query($con,$query);
              $data = mysqli_num_rows($sql);
              echo $data; ?>, 
              b: <?php $query = "SELECT *, DATE_FORMAT(`tgl_transaksi`,'%M') AS showdate FROM `transaksi` WHERE tgl_transaksi BETWEEN SUBDATE(LAST_DAY(NOW()), INTERVAL 5 MONTH) AND LAST_DAY(SUBDATE(CURDATE(), INTERVAL 4 MONTH))" ;
              $sql   = mysqli_query($con,$query);
              $data = mysqli_num_rows($sql);
              echo $data; ?>},
        {y: '<?php $query = "SELECT DATE_FORMAT(SUBDATE(LAST_DAY(NOW()), INTERVAL 3 MONTH),'%M') AS showdate" ;
              $sql   = mysqli_query($con,$query);
              $data = mysqli_fetch_array($sql);
              echo $data['showdate']; ?>', 
              a: <?php $query = "SELECT *, DATE_FORMAT(`tgl_permintaan`,'%M') AS showdate FROM `permintaan` WHERE status = 'Waiting' AND tgl_permintaan BETWEEN SUBDATE(LAST_DAY(NOW()), INTERVAL 4 MONTH) AND LAST_DAY(SUBDATE(CURDATE(), INTERVAL 3 MONTH))" ;
              $sql   = mysqli_query($con,$query);
              $data = mysqli_num_rows($sql);
              echo $data; ?>, 
              b: <?php $query = "SELECT *, DATE_FORMAT(`tgl_transaksi`,'%M') AS showdate FROM `transaksi` WHERE tgl_transaksi BETWEEN SUBDATE(LAST_DAY(NOW()), INTERVAL 4 MONTH) AND LAST_DAY(SUBDATE(CURDATE(), INTERVAL 3 MONTH))" ;
              $sql   = mysqli_query($con,$query);
              $data = mysqli_num_rows($sql);
              echo $data; ?>},
        {y: '<?php $query = "SELECT DATE_FORMAT(SUBDATE(LAST_DAY(NOW()), INTERVAL 2 MONTH),'%M') AS showdate" ;
              $sql   = mysqli_query($con,$query);
              $data = mysqli_fetch_array($sql);
              echo $data['showdate']; ?>', 
              a: <?php $query = "SELECT *, DATE_FORMAT(`tgl_permintaan`,'%M') AS showdate FROM `permintaan` WHERE status = 'Waiting' AND tgl_permintaan BETWEEN SUBDATE(LAST_DAY(NOW()), INTERVAL 3 MONTH) AND LAST_DAY(SUBDATE(CURDATE(), INTERVAL 2 MONTH))" ;
              $sql   = mysqli_query($con,$query);
              $data = mysqli_num_rows($sql);
              echo $data; ?>, 
              b: <?php $query = "SELECT *, DATE_FORMAT(`tgl_transaksi`,'%M') AS showdate FROM `transaksi` WHERE tgl_transaksi BETWEEN SUBDATE(LAST_DAY(NOW()), INTERVAL 3 MONTH) AND LAST_DAY(SUBDATE(CURDATE(), INTERVAL 2 MONTH))" ;
              $sql   = mysqli_query($con,$query);
              $data = mysqli_num_rows($sql);
              echo $data; ?>},
        {y: '<?php $query = "SELECT DATE_FORMAT(SUBDATE(LAST_DAY(NOW()), INTERVAL 1 MONTH),'%M') AS showdate" ;
              $sql   = mysqli_query($con,$query);
              $data = mysqli_fetch_array($sql);
              echo $data['showdate']; ?>', 
              a: <?php $query = "SELECT *, DATE_FORMAT(`tgl_permintaan`,'%M') AS showdate FROM `permintaan` WHERE status = 'Waiting' AND tgl_permintaan BETWEEN SUBDATE(LAST_DAY(NOW()), INTERVAL 2 MONTH) AND LAST_DAY(SUBDATE(CURDATE(), INTERVAL 1 MONTH))" ;
              $sql   = mysqli_query($con,$query);
              $data = mysqli_num_rows($sql);
              echo $data; ?>, 
              b: <?php $query = "SELECT *, DATE_FORMAT(`tgl_transaksi`,'%M') AS showdate FROM `transaksi` WHERE tgl_transaksi BETWEEN SUBDATE(LAST_DAY(NOW()), INTERVAL 2 MONTH) AND LAST_DAY(SUBDATE(CURDATE(), INTERVAL 1 MONTH))" ;
              $sql   = mysqli_query($con,$query);
              $data = mysqli_num_rows($sql);
              echo $data; ?>}
      ],
      barColors: ['#3b8bba', '#00a65a'],
      xkey: 'y',
      ykeys: ['a', 'b'],
      labels: ['Permintaan', 'Transaksi'],
      hideHover: 'auto'
    });
  });
</script>
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
    { "orderable": false, "searchable": false, "defaultContent": ""},
    { "orderable": false, "searchable": false, "defaultContent": ""}
  ]
	  })
  })
</script>
  <!--End of Custom Scripts-->
  <?php include 'Fragment/footer.php'; ?>
  