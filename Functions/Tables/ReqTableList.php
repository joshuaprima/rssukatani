<table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Pegawai</th>
                  <th>Nama Barang</th>
                  <th>Jumlah</th>
                  <th>Tanggal</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $id = $_SESSION['empID'];
                $query = "SELECT * FROM permintaan inner join barang on permintaan.idbarang = barang.idbarang where idpegawai='$id'" ;
                $sql   = mysqli_query($con,$query);
                
                while ($data = mysqli_fetch_array($sql)) {
                    
                  echo"<tr>";
                  echo"<td>".$data['idpermintaan']."</td>";
                  echo"<td>".$data['idpegawai']."</td>";
                  echo"<td>".$data['nama']."</td>";
                  echo"<td>".$data['jumlah']."</td>";
                  echo"<td>".$data['tgl_permintaan']."</td>";
                  echo "<td><a class='btn btn-block btn-warning' href='previewbukti.php?id=".$data['idpermintaan']."'>Print</a>
                  <a class='btn btn-block btn-danger' onClick=\"javascript: return confirm('Please confirm deletion');\" href='Functions/DeleteRequest.php?id=".$data['idpermintaan']."'>Delete</a></td>";
                  echo"</tr>";
            }
            ?> 
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Pegawai</th>
                  <th>Nama Barang</th>
                  <th>Jumlah</th>
                  <th>Tanggal</th>
                  <th>Actions</th>
                </tr>
                </tfoot>
              </table>