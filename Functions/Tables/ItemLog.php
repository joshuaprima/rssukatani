<table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Gudang Umum</th>
                  <th>Item Type</th>
                  <th>Nama Barang</th>
                  <th>Jumlah</th>
                  <th>deskripsi</th>
                  <th>status</th>
                  <th>Tanggal</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $query = "SELECT itemlog.idperubahan, nama_pegawai, itemlog.jumlah, nama, types, tgl_perubahan, itemlog.deskripsi, status 
                FROM itemlog INNER JOIN barang on itemlog.idbarang = barang.idbarang inner join pegawai on pegawai.idpegawai = itemlog.idpegawai" ;
                $sql   = mysqli_query($con,$query);
                
                while ($data = mysqli_fetch_array($sql)) {
                    
                  echo"<tr>";
                  echo"<td>".$data['idperubahan']."</td>";
                  echo"<td>".$data['nama_pegawai']."</td>";
                  echo"<td>".$data['types']."</td>";
                  echo"<td>".$data['nama']."</td>";
                  echo"<td>".$data['jumlah']."</td>";
                  echo"<td>".$data['deskripsi']."</td>";
                  echo"<td>".$data['status']."</td>";
                  echo"<td>".$data['tgl_perubahan']."</td>";
                  echo"</tr>";
            }
            ?> 
                </tbody>
                <tfoot>
                <tr>
                <th>ID</th>
                  <th>Gudang Umum</th>
                  <th>Item Type</th>
                  <th>Nama Barang</th>
                  <th>Jumlah</th>
                  <th>deskripsi</th>
                  <th>status</th>
                  <th>Tanggal</th>
                </tr>
                </tfoot>
              </table>