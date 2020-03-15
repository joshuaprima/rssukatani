<?php include 'Fragment/header.php';?>
<?php include 'Fragment/sidebar.php'; ?>
<?php include 'Functions/sessioneditprofile.php'; ?>
<?php include 'Functions/getEmployeeData.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <section class="content">
     <form action="Functions/profileEditFunc.php?id=<?php echo $empID;?>" method="post"> 

      <div class="row">
        <div class="col-xs-12">
          <div class="box box-default">
          <div class="box-header with-border">
          <h3 class="box-title">Edit Profile</h3>
          <div class="box-tools pull-right">
            <a type="button" class="btn btn-box-tool" href="index.php"><i class="fa fa-remove"></i></a>
          </div>
            <div class="box-body">
            <div class="form-group">
                  <label for="EmpName">Employee Name</label>
                  <input type="text" class="form-control" name="EmpName" placeholder="Enter Full Name" value="<?php echo $data['nama_pegawai'];?>">
                </div>
                <div class="form-group">
                  <label for="EmpName">Current Department</label>
                  <input type="text" class="form-control" placeholder="Enter Full Name" value="<?php echo $data['unit'];?>" disabled>
                </div>
                <div class="form-group">
                  <label for="EmpName">Unit/Department</label>
                  <select class="form-control" name = "DeptUnit">
                    <option value="Gudang Umum">Gudang Umum</option>
                    <option value="Poli Gigi">Poli Gigi</option>
                    <option value="Lab">Lab</option>
                    <option value="Tindakan">Tindakan</option>
                    <option value="Poli Umum">Poli Umum</option>
                    <option value="Pemeriksaan">Pemeriksaan</option>
                    <option value="KIA">KIA (Bidan)</option>
                    <option value="Farmasi">Farmasi</option>
                    <option value="Poli Gizi">Poli Gizi</option>
                    <option value="Promosi Kesehatan">Promosi Kesehatan</option>
                    <option value="Kesehatan Lingkungan">Kesehatan Lingkungan</option>
                    <option value="Tata Usaha">Tata Usaha</option>
                    <option value="Pendaftaran">Pendaftaran</option>
                    <option value="Prakarya">Prakarya</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="UserName">Username</label>
                  <input type="text" class="form-control" name="UserName" placeholder="Enter Username" value="<?php echo $data['username'];?>">
                </div>
                <div class="form-group">
                  <label for="UserPassword">New Password</label>
                  <input type="password" class="form-control" name="UserPassword" placeholder="Password" <?php echo $data['password'];?>>
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
            <small class="pull-left"> <i class="pull-left">Please sign in after editing your profile to see the changes</i></small>
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
                <h4 class="modal-title">Edit Employee Profile</h4>
              </div>
              <div class="modal-body">
              <label for="CurrPass">User Verification</label>
              <input type="password" class="form-control" name="CurrPass" placeholder="Enter Current Password to Confirm Changes" value="">
                <p>The user data will be changed in the database. Please check if all the user's data is correct, and fill the current password</p>
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

  <!--End of Custom Scripts-->
  
  <?php include 'Fragment/footer.php'; ?>
  