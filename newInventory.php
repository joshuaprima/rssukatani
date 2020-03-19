<?php include 'Fragment/header.php';?>
<?php include 'Fragment/sidebar.php'; ?>
<?php include 'Functions/sessionGudangUmum.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <section class="content">
     <form action="" method="post"> 

      <div class="row">
        <div class="col-xs-12">
          <div class="box box-default">
          <div class="box-header with-border">
          <h3 class="box-title">Create New Inventory</h3>
          <div class="box-tools pull-right">
            <a type="button" class="btn btn-box-tool" href="index.php"><i class="fa fa-remove"></i></a>
          </div>
            <div class="box-body">
            <div class="form-group">
                  <label for="InvName">Item Name</label>
                  <input type="text" class="form-control" name="InvName" placeholder="Enter Item Name">
                </div>
                <div class="form-group">
                  <label for="InvDist">Distributor Name</label>
                  <input type="text" class="form-control" name="InvDist" placeholder="Enter Distributor Name">
                </div>
                <div class="form-group">
                  <label for="InvTypes">Item Types</label>
                  <select class="form-control" name = "InvTypes">
                    <option value="ATK">ATK</option>
                    <option value="Kebersihan">Kebersihan</option>
                    <option value="Cetakan">Cetakan</option>
                    <option value="Obat Gigi">Obat Gigi</option>
                    <option value="Reagen Lab">Reagen Lab</option>
                    <option value="BMHP">BMHP</option>
                    <option value="Makanan Tambahan">Makanan Tambahan</option>
                    <option value="Formulir">Formulir</option>
                  </select>
                </div>
        <div class="row">
            <div class="col-xs-9">
                <div class="form-group">
                <label for="InvQty">Quantity</label>
                  <input type="Number" class="form-control" name="InvQty" placeholder="Enter Quantity">
                </div>
            </div>
            <div class="col-xs-3">
                <div class="form-group">
                <label for="Invmeasurement">Measurement / Satuan</label>
                <select class="form-control" name = "InvMeasurement">
                    <option value="Pcs">Pcs</option>
                    <option value="Box">Box</option>
                    <option value="Lab">Pack</option>
                    <option value="Set">Set</option>
                    <option value="Derigen">Derigen</option>
                    <option value="Rim">Rim</option>
                    <option value="Roll">Roll</option>
                    <option value="Buku">Buku</option>
                  </select>
                </div>
            </div>
        </div>
                <div class="form-group">
                  <label>Item Description</label>
                  <textarea class="form-control" name="InvDesc" id="InvDesc" placeholder="Enter Item Description"
                  maxlength="2000" style="resize: vertical; min-height:75px;"></textarea>
                  <label id="lettersCount" class="pull-right" style="color: #d2d6de;"><label>
                </div>
                <div class="form-group">
                  <label>Item Price</label>
                    <div class="input-group">
                        <span class="input-group-addon">IDR</span>
                            <input type="Number" name="InvPrice" class="form-control">
                        <span class="input-group-addon">,00</span>
                    </div>
                </div> 
                <div class="form-group">
                  <label for="InvBlud">BLUD Allocation</label>
                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right" id="InvBlud" name="InvBlud" data-inputmask="'alias': 'dd-mm-yyyy'" data-mask>
                    </div>
                </div>
                <div class="form-group">
                  <label for="InvCustExpire">Custom Expiration Date</label>
                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right" id="InvCustExpire" name="InvBlud" data-inputmask="'alias': 'dd-mm-yyyy'" data-mask>
                    </div>
                </div>

        </div>
            <div class="box-footer">
                <a class="btn btn-danger pull-right" href="index.php">Cancel</a>
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-info">
                Save Changes
              </button>
            </div>
        <div class="box-footer">
            <i class="fa fa-commenting pull-left"></i>
            <small class="pull-left"> <i class="pull-left">Empty the custom expiration box if you want to set it to default. (The default expiration will be 5 years from the date created)</i></small>
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
                <h4 class="modal-title">Create New Inventory</h4>
              </div>
              <div class="modal-body">
                <p>The Item will be created in the database. Please check if all the data is correct.</p>
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
<!-- bootstrap datepicker -->
<script src="Component/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- InputMask -->
<script src="Component/plugins/input-mask/jquery.inputmask.js"></script>
<script src="Component/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="Component/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- This is function for label text count -->
<script>
var letterLimit = 2000; 
var textarea = document.getElementById("InvDesc");

document.getElementById("lettersCount").innerHTML  = letterLimit;

textarea.addEventListener('input', function() {
  document.getElementById("lettersCount").innerHTML = letterLimit - textarea.value.length;
}, false);
</script>
<script>
$(function () {
    //Date for InvBlud
    $('#InvBlud').inputmask('dd-mm-yyyy', { 'placeholder': 'dd-mm-yyyy' })
    
    $('#InvBlud').datepicker({
      autoclose: true,
      format: 'dd-mm-yyyy'
    })
    //Date for InvCustExpire
    $('#InvCustExpire').inputmask('dd-mm-yyyy', { 'placeholder': 'dd-mm-yyyy' })
    
    $('#InvCustExpire').datepicker({
      autoclose: true,
      format: 'dd-mm-yyyy'
    })
})
</script>
  <!--End of Custom Scripts-->
  
  <?php include 'Fragment/footer.php'; ?>
  