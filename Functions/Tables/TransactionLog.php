<table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Gudang Umum</th>
                  <th>Peminta</th>
                  <th>Nama Barang</th>
                  <th>Permintaan</th>
                  <th>Jumlah Keluar</th>
                  <th>Tanggal</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $query = "SELECT transaksi.idtransaksi, tgl_transaksi, a.nama_pegawai, b.nama_pegawai as peminta, a.unit, b.unit, transaksi.idpermintaan, permintaan.idpermintaan, jumlah, jumlah_out, nama, types, barang.deskripsi as deskripsi_barang, permintaan.deskripsi as deskripsi_permintaan 
                FROM transaksi INNER JOIN permintaan on transaksi.idpermintaan = permintaan.idpermintaan inner join barang on permintaan.idbarang = barang.idbarang inner join pegawai a on transaksi.idpegawai = a.idpegawai left join pegawai b on permintaan.idpegawai = b.idpegawai" ;
                $sql   = mysqli_query($con,$query);
                
                while ($data = mysqli_fetch_array($sql)) {
                    
                  echo"<tr>";
                  echo"<td>".$data['idtransaksi']."</td>";
                  echo"<td>".$data['nama_pegawai']."</td>";
                  echo"<td>".$data['peminta']."</td>";
                  echo"<td>".$data['nama']."</td>";
                  echo"<td>".$data['jumlah']."</td>";
                  echo"<td>".$data['jumlah_out']."</td>";
                  echo"<td>".$data['tgl_transaksi']."</td>";
                  echo"</tr>";
            }
            ?> 
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Gudang Umum</th>
                  <th>Nama Barang</th>
                  <th>Peminta</th>
                  <th>Permintaan</th>
                  <th>Jumlah Keluar</th>
                  <th>Tanggal</th>
                </tr>
                </tfoot>
              </table>