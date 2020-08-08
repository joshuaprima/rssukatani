<div class="row">
      <div class="col-md-12">
      <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Depleted Item Quantity</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Item Name</th>
                  <th>Quantity</th>
                  <th>Satuan</th>
                  <th>Types</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $query = "SELECT * FROM barang where quantity < 15" ;
                $sql   = mysqli_query($con,$query);
                $datenow = date("Y-m-d");
                           
                while ($data = mysqli_fetch_array($sql)) {
                  if ($data['cust_expired_date'] < $datenow){
                    echo"<tr class='bg-yellow-active' style='color:white;'>";
                  }elseif ($data['expired_date'] < $datenow){
                    echo"<tr class='bg-yellow-active' style='color:white;'>";
                  }
                  else {
                    echo"<tr>";
                  }
                    echo"<td align='Center'>".substr($data['idbarang'], 0, 16)."...</td>";
                    echo"<td>".$data['nama']."</td>";
                    echo"<td>".$data['quantity']."</td>";
                    echo"<td>".$data['satuan']."</td>";
                    echo"<td>".$data['types']."</td>";
                    echo"<td><span class='label label-danger' style='display: inline-block; margin-top: 5px;  vertical-align: top;'> Out of Stock </span></td>";
                    echo "<td><a class='btn btn-block btn-info' href= 'inventoryDetails.php?id=".$data['idbarang']."'>Details</a>";
                    echo"</tr>";
                  
            }
            ?> 
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Item Name</th>
				  <th>Quantity</th>
          <th>Satuan</th>
          <th>Types</th>
				  <th>Status</th>
                  <th>Actions</th>
                </tr>
                </tfoot>
              </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <!-- /.box-footer -->
          </div>
      </div>
    </div>