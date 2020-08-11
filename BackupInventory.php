<?php include 'Fragment/header.php';?>
<?php include 'Fragment/sidebar.php'; ?>
<?php include 'Functions/sessionGudangUmum.php'; ?>

<body>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">Backup Tables</h3>
                    <div class="box-tools pull-right">
                        <a type="button" class="btn btn-box-tool" href="index.php"><i class="fa fa-remove"></i></a>
                     </div>
                </div>
          <div class="box-body">
          
          <div class="callout callout-warning">
          <h4><i class="icon fa fa-warning"></i> ATK Report</h4>

          <p>Backup content from inventory table, all items will be converted into .csv file 
          in the process of backup data. This data will be automatically downloaded.</p>
          <?php
          echo "<a class='btn btn-block-sm btn-default' style='margin-right: 15px; margin-top: 15px; color: #001F3F;' onClick=\"javascript: return confirm('Please confirm backup');\" href='Functions/Backups/exportAtk.php'>Backup</a>";
          ?>
        </div>

        <div class="callout callout-success">
          <h4><i class="icon fa fa-warning"></i> Kebersihan Report</h4>

          <p>Backup content from inventory table, all items will be converted into .csv file 
          in the process of backup data. This data will be automatically downloaded.</p>
          <?php
          echo "<a class='btn btn-block-sm btn-default' style='margin-right: 15px; margin-top: 15px; color: #001F3F;' onClick=\"javascript: return confirm('Please confirm backup');\" href='Functions/Backups/exportKebersihan.php'>Backup</a>";
          ?>
        </div>
        
        <div class="callout callout-danger">
          <h4><i class="icon fa fa-warning"></i> Cetakan Report</h4>

          <p>Backup content from inventory table, all items will be converted into .csv file 
          in the process of backup data. This data will be automatically downloaded.</p>
          <?php
                    echo "<a class='btn btn-block-sm btn-default' style='margin-right: 15px; margin-top: 15px; color: #001F3F;' onClick=\"javascript: return confirm('Please confirm backup');\" href='Functions/Backups/exportCetakan.php'>Backup</a>";
          ?>
        </div>
        
        <div class="callout callout-info">
          <h4><i class="icon fa fa-warning"></i> Bahan Gigi Report</h4>

          <p>Backup content from inventory table, all items will be converted into .csv file 
          in the process of backup data. This data will be automatically downloaded.</p>
          <?php
                    echo "<a class='btn btn-block-sm btn-default' style='margin-right: 15px; margin-top: 15px; color: #001F3F;' onClick=\"javascript: return confirm('Please confirm backup');\" href='Functions/Backups/exportBahanGigi.php'>Backup</a>";
          ?>
        </div>
        
        <div class="callout callout-warning">
          <h4><i class="icon fa fa-warning"></i> Reagen Lab Report</h4>

          <p>Backup content from inventory table, all items will be converted into .csv file 
          in the process of backup data. This data will be automatically downloaded.</p>
          <?php
                    echo "<a class='btn btn-block-sm btn-default' style='margin-right: 15px; margin-top: 15px; color: #001F3F;' onClick=\"javascript: return confirm('Please confirm backup');\" href='Functions/Backups/exportReagenLab.php'>Backup</a>";
          ?>
        </div>

        <div class="callout callout-success">
          <h4><i class="icon fa fa-warning"></i> BMHP Report</h4>

          <p>Backup content from inventory table, all items will be converted into .csv file 
          in the process of backup data. This data will be automatically downloaded.</p>
          <?php
          echo "<a class='btn btn-block-sm btn-default' style='margin-right: 15px; margin-top: 15px; color: #001F3F;' onClick=\"javascript: return confirm('Please confirm backup');\" href='Functions/Backups/exportBMHP.php'>Backup</a>";
          ?>
        </div>
        
        <div class="callout callout-danger">
          <h4><i class="icon fa fa-warning"></i> Makanan Tambahan Report</h4>

          <p>Backup content from inventory table, all items will be converted into .csv file 
          in the process of backup data. This data will be automatically downloaded.</p>
          <?php
                    echo "<a class='btn btn-block-sm btn-default' style='margin-right: 15px; margin-top: 15px; color: #001F3F;' onClick=\"javascript: return confirm('Please confirm backup');\" href='Functions/Backups/exportMakanan.php'>Backup</a>";
          ?>
        </div>
        
        <div class="callout callout-info">
          <h4><i class="icon fa fa-warning"></i> Formulir Report</h4>

          <p>Backup content from inventory table, all items will be converted into .csv file 
          in the process of backup data. This data will be automatically downloaded.</p>
          <?php
                    echo "<a class='btn btn-block-sm btn-default' style='margin-right: 15px; margin-top: 15px; color: #001F3F;' onClick=\"javascript: return confirm('Please confirm backup');\" href='Functions/Backups/exportFormulir.php'>Backup</a>";
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
  