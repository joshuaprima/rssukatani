<table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Item Name</th>
                  <th>Quantity</th>
                  <th>Satuan</th>
                  <th>Types</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                if ($_SESSION['unit']=='Poli Gigi'|| $_SESSION['unit']=='Lab' || $_SESSION['unit']=='Administrator'){
                          $query = "SELECT * FROM barang" ;
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
                              echo "<td><a class='btn btn-block btn-info' href='request.php?id=".$data['idbarang']."'>Request</a>";
                              echo"</tr>";
                          }
                       }
                else{
                  $query = "SELECT * FROM barang WHERE NOT types='Bahan Gigi' AND NOT types='Reagen Lab';" ;
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
                              echo "<td><a class='btn btn-block btn-info' href='request.php?id=".$data['idbarang']."'>Request</a>";
                              echo"</tr>";
                          }
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
                  <th>Actions</th>
                </tr>
                </tfoot>
              </table>