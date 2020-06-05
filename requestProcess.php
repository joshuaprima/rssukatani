<?php include 'Fragment/header.php';?>
<?php include 'Fragment/sidebar.php'; ?>
<?php include 'Functions/sessionGudangUmum.php'; ?>
<?php include 'Functions/getRequestData.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <section class="content">
     <form action="previewout.php?id=<?php echo $ID_permintaan;?>" method="post">

      <div class="row">
        <div class="col-xs-12">
          <div class="box box-default">
          <div class="box-header with-border">
          <h3 class="box-title">Request Process</h3>
          <div class="box-tools pull-right">
            <a type="button" class="btn btn-box-tool" href="index.php"><i class="fa fa-remove"></i></a>
          </div>
            <div class="box-body">
            <div class="form-group">
                  <label for="InvName">Nama Barang</label>
                  <input type="text" disabled class="form-control" name="InvName" placeholder="Inventory Name"value="<?php echo $data['nama'];?>">
                </div>
                <div class="form-group">
                  <label for="Stock">Stok</label>
                  <input type="text" disabled class="form-control" name="Stock" placeholder="Stock" value="<?php echo $data['quantity'];?>">
                </div>
                <div class="form-group">
                  <label for="Quantity">Jumlah Permintaan</label>
                  <input type="Number" class="form-control" name="UserName" placeholder="Enter Amount" disabled value="<?php echo $data['jumlah'];?>">
                </div>
                <div class="form-group">
                    <label for="Quantity">Jumlah Barang Keluar</label>
                    <input type="Number" class="form-control" name="reqOut" id="reqOut" placeholder="Enter Amount" min="1" max="<?php echo $data['quantity'];?>" required>
                </div>
                <div class="form-group">
                  <label>Description</label>
                  <textarea class="form-control" name="ReqDesc" id="InvDesc" placeholder="Enter Item Description"
                  maxlength="255" style="resize: vertical; min-height:75px;" disabled><?php echo $data['deskripsi'];?></textarea>
                  <label id="lettersCount" class="pull-right" style="color: #d2d6de;"><label>
                </div>      
            </div>
            <div class="box-footer">
                <a class="btn btn-danger pull-right" href="index.php">Cancel</a>
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-info">
                Accept Request
              </button>
            </div>
        <div class="box-footer">
            <i class="fa fa-commenting pull-left"></i>
            <small class="pull-left"> <i class="pull-left">The item quantity will be taken upon accepting the request. If the quantity is exceeded by the stock then it will be rolledback. </i></small>
          <br>
        </div>
        </div>
      </div>

      <!-- Modals -->
        <div class="modal modal-info fade" id="modal-info" style="display: none;">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Create New User</h4>
              </div>
              <div class="modal-body">
                <p>The user data will be created in the database. Please check if all the user's data is correct.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <input type="submit" name="submit" class="btn btn-success pull-left"></input>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
  </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include 'Fragment/scripts.php'; ?>
  <!--Custom Scripts below-->
<script>
var letterLimit = 255; 
var textarea = document.getElementById("InvDesc");

document.getElementById("lettersCount").innerHTML  = letterLimit;

textarea.addEventListener('input', function() {
  document.getElementById("lettersCount").innerHTML = letterLimit - textarea.value.length;
}, false);
</script>

  <!--End of Custom Scripts-->
  
  <?php include 'Fragment/footer.php'; ?>
  