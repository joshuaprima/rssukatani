<table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>EmpID</th>
                  <th>Employee Name</th>
                  <th>Username</th>
                  <th>Department</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $query = "SELECT * FROM pegawai where unit !='Administrator'" ;
                $sql   = mysqli_query($con,$query);
                
                while ($data = mysqli_fetch_array($sql)) {
                    
                  echo"<tr>";
                  echo"<td align='Center'>".substr($data['idpegawai'], 0, 16)."...</td>";
                  echo"<td>".$data['nama_pegawai']."</td>";
                  echo"<td>".$data['username']."</td>";
                  echo"<td>".$data['unit']."</td>";
                  echo "<td><a class='btn btn-block btn-warning' href= 'employeeEdit.php?id=".$data['idpegawai']."'>Edit</a>
                  <a class='btn btn-block btn-danger' onClick=\"javascript: return confirm('Please confirm deletion. Deleting employee data might affect the Log, make sure backup all data before deleting');\" href='Functions/DeleteEmployee.php?id=".$data['idpegawai']."'>Delete</a></td>";
                  echo"</tr>";
            }
            ?> 
                </tbody>
                <tfoot>
                <tr>
                  <th>EmpID</th>
                  <th>Employee Name</th>
					<th>Username</th>
					<th>Department</th>
                  <th>Actions</th>
                </tr>
                </tfoot>
              </table>