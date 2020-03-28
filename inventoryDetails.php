<?php include 'Fragment/header.php';?>
<?php include 'Fragment/sidebar.php'; ?>
<?php include 'Functions/sessionGudangUmum.php'; ?>
<?php include 'Functions/getInventoryData.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <section class="content">
     <form action="Functions/EditInventory.php?id=<?php echo $invID;?>" method="post">

      <div class="row">
        <div class="col-xs-12">
          <div class="box box-default">
          <div class="box-header with-border">
          <h3 class="box-title">Inventory Details | </h3>
          <button class="btn btn-warning btn-xs" id="btn_edit">Edit</button>
          <div class="box-tools pull-right">
            <a type="button" class="btn btn-box-tool" href="index.php"><i class="fa fa-remove"></i></a>
          </div>
            <div class="box-body">
            <div class="form-group">
                  <label for="InvName">Item Name</label>
                  <input id="nama" class="form-control" name="InvName" placeholder="Enter Item Name" value="<?php echo $data['nama'];?>" disabled="disabled">
                </div>
                <div class="form-group">
                  <label for="InvDist">Distributor Name</label>
                  <input id="distributor" type="text" class="form-control" name="InvDist" placeholder="Enter Distributor Name" value="<?php echo $data['distributor'];?>" disabled="disabled" >
                </div>
              <div class="col-xs-6">
                <div class="form-group">
                  <label for="InvTypes">Item Types</label>
                  <select id="typemenu" class="form-control" name = "InvTypes" disabled="disabled">
                    <option <?php if($data['types'] =='ATK'){echo "selected"; } ?> value="ATK">ATK</option>
                    <option <?php if($data['types'] =='Kebersihan'){echo "selected"; } ?> value="Kebersihan">Kebersihan</option>
                    <option <?php if($data['types'] =='Cetakan'){echo "selected"; } ?> value="Cetakan">Cetakan</option>
                    <option <?php if($data['types'] =='Obat Gigi'){echo "selected"; } ?> value="Obat Gigi">Obat Gigi</option>
                    <option <?php if($data['types'] =='Reagen Lab'){echo "selected"; } ?> value="Reagen Lab">Reagen Lab</option>
                    <option <?php if($data['types'] =='BMHP'){echo "selected"; } ?> value="BMHP">BMHP</option>
                    <option <?php if($data['types'] =='Makanan Tambahan'){echo "selected"; } ?> value="Makanan Tambahan">Makanan Tambahan</option>
                    <option <?php if($data['types'] =='Formulir'){echo "selected"; } ?> value="Formulir">Formulir</option>
                  </select>
                </div>
              </div>
            </div>
        <div class="row">
            <div class="col-xs-6">
                <div class="form-group">
                <label for="InvQty">Quantity</label>
                  <input id="quantity" type="Number" class="form-control" name="InvQty" placeholder="Enter Quantity" value="<?php echo $data['quantity'];?>" disabled="disabled">
                </div>
            </div>
            <div class="col-xs-3">
                <div class="form-group">
                <label for="Invmeasurement">Measurement / Satuan</label>
                <select id="satuanmenu" class="form-control" name = "InvMeasurement" disabled="disabled">
                    <option <?php if($data['satuan'] =='Pcs'){echo "selected"; } ?> value="Pcs">Pcs</option>
                    <option <?php if($data['satuan'] =='Box'){echo "selected"; } ?> value="Box">Box</option>
                    <option <?php if($data['satuan'] =='Lab'){echo "selected"; } ?> value="Lab">Pack</option>
                    <option <?php if($data['satuan'] =='Set'){echo "selected"; } ?> value="Set">Set</option>
                    <option <?php if($data['satuan'] =='Derigen'){echo "selected"; } ?>value="Derigen">Derigen</option>
                    <option <?php if($data['satuan'] =='Rim'){echo "selected"; } ?> value="Rim">Rim</option>
                    <option <?php if($data['satuan'] =='Roll'){echo "selected"; } ?> value="Roll">Roll</option>
                    <option <?php if($data['satuan'] =='Buku'){echo "selected"; } ?> value="Buku">Buku</option>
                  </select>
                </div>
            </div>
        </div>
                <div class="form-group">
                  <label>Item Description</label>
                  <textarea id="deskripsi" class="form-control" name="InvDesc" id="InvDesc" placeholder="Enter Item Description"
                  maxlength="2000" style="resize: vertical; min-height:75px;" disabled="disabled"> <?php echo $data['deskripsi'];?> </textarea>
                  <label id="lettersCount" class="pull-right" style="color: #d2d6de;"><label>
                </div>
                <div class="form-group">
                  <label>Item Price</label>
                    <div class="input-group">
                        <span class="input-group-addon">IDR</span>
                            <input id="harga" type="Number" name="InvPrice" class="form-control" value="<?php echo $data['harga_satuan'];?>" disabled="disabled">
                        <span class="input-group-addon">,00</span>
                    </div>
                </div> 
                <div class="form-group">
                  <label for="InvBlud">BLUD Allocation</label>
                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input id="blud" type="text" class="form-control pull-right" id="InvBlud" name="InvBlud" data-inputmask="'alias': 'dd-mm-yyyy'" value="<?php echo $data['tanggal_blud'];?>" data-mask disabled="disabled">
                    </div>
                </div>
                <div class="form-group">
                  <label for="InvCustExpire">Custom Expiration Date</label>
                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input id="custom" type="text" class="form-control pull-right" id="InvCustExpire" name="InvCustExpire" data-inputmask="'alias': 'dd-mm-yyyy'" value="<?php echo $data['cust_expired_date'];?>" data-mask disabled="disabled">
                    </div>
                </div>

        </div>
            <div class="box-footer">
                <a class="btn btn-danger pull-right" href="index.php">Cancel</a>
                <button id="save" type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-info" disabled="disabled">
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
                <h4 class="modal-title">Edit Inventory</h4>
              </div>
              <div class="modal-body">
                <p>The Item will be changed in the database. Please check if all the data is correct.</p>
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

<script src="http://code.jquery.com/jquery-1.6.2.min.js"></script>
<script>
    $(document).ready(function() {

        $("#btn_edit").click(function(){
            event.preventDefault();
            $("#nama").removeAttr("disabled");
            $("#distributor").removeAttr("disabled");
            $("#type").removeAttr("disabled");
            $("#typemenu").removeAttr("disabled");
            $("#quantity").removeAttr("disabled");
            $("#satuanmenu").removeAttr("disabled");
            $("#deskripsi").removeAttr("disabled");
            $("#harga").removeAttr("disabled");
            $("#blud").removeAttr("disabled");
            $("#custom").removeAttr("disabled");
            $("#save").removeAttr("disabled");
        });
    });
</script>
  <!--End of Custom Scripts-->
  
  <?php include 'Fragment/footer.php'; ?>
  