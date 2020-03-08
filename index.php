<?php include 'Fragment/header.php';?>
<?php include 'Fragment/sidebar.php'; ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-4 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>Siswa</h3>
			  
			  <p> List dan Input Siswa </p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-paw"></i>
            </div>
            <a  href="Diklat/Siswa.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
              <h3>Nilai</h3>

              <p>List Nilai</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-nutrition"></i>
            </div>
            <a href="Diklat/ListNilai.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
		<div class="col-lg-4 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>Nilai Konversi</h3>

              <p>List Konversi Nilai</p>
            </div>
            <div class="icon">
              <i class="ion ion-earth"></i>
            </div>
            <a href="Diklat/ListConvert.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		<!-- ./col -->
      </div>
	  <div class="row">
		<!-- ./col -->
		<div class="col-lg-4 col-xs-12"></div>
		<div class="col-lg-4 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>Hasil</h3>

              <p>List Hasil</p>
            </div>
            <div class="icon">
              <i class="ion ion-bug"></i>
            </div>
            <a href="Diklat/Ranking.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		<div class="col-lg-4 col-xs-12"></div>
	  </div>
      <!-- /.row -->
      <!-- Main row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include 'Fragment/scripts.php'; ?>
  <!--Custom Scripts below-->

  <!--End of Custom Scripts-->
  <?php include 'Fragment/footer.php'; ?>
  