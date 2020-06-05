<table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Gudang Umum</th>
                  <th>ID Barang</th>
                  <th>Jumlah</th>
                  <th>deskripsi</th>
                  <th>status</th>
                  <th>Tanggal</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $query = "SELECT IFNULL(nama_pegawai, logbarang.idpegawai) as nama_pegawai, logbarang.idperubahan, logbarang.jumlah, tgl_perubahan, logbarang.deskripsi, logbarang.idbarang, 
                status FROM logbarang left join pegawai on pegawai.idpegawai = logbarang.idpegawai" ;
                $sql   = mysqli_query($con,$query);
                
                while ($data = mysqli_fetch_array($sql)) {
                    
                  echo"<tr>";
                  echo"<td>".$data['idperubahan']."</td>";
                  echo"<td>".$data['nama_pegawai']."</td>";
                  echo"<td>".$data['idbarang']."</td>";
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
                  <th>ID Barang</th>
                  <th>Jumlah</th>
                  <th>deskripsi</th>
                  <th>status</th>
                  <th>Tanggal</th>
                </tr>
                </tfoot>
              </table>