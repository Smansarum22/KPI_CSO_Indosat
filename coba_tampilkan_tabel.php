<section> <!--tampilkan tabel-->
          <div class="container">
              <div class="table-responsive">
                  <table class="table table-bordered table-striped table-hover">
                      <thead>
                      <?php
                          $conn=mysqli_connect("localhost", "root", "", "xyz");

                          if (!$conn)
                          {
                              die("Connection Failed".mysqli_connect_errno());
                          }

                          $nama_kolom = mysqli_query($conn,"SHOW COLUMNS FROM tabelexcel2"); // fetch data from database
                          while($data = mysqli_fetch_array($nama_kolom))
                            {
                        ?>
                        
                        <th><?php echo $data['Field']; ?></td>

                        <?php
                            }
                        ?>

                      </thead>

                      <tbody>
                        <?php
                            
                            $records = mysqli_query($conn,"SELECT * FROM tabelexcel2"); // fetch data from database
                            $tabelnya = mysqli_query($conn,"SHOW COLUMNS FROM tabelexcel2");
                            $jumlah_kolom = mysqli_num_rows($tabelnya);
                            while($data = mysqli_fetch_array($records))
                            {

                        ?>

                        <tr>
                            <?php
                            for ($x = 0; $x <= $jumlah_kolom - 1; $x++) { ?>
                                <td><?php echo $data[$x]; ?></td>
                            <?php   
                            } ?>
                        </tr>
            
                        <?php
                            }
                        ?>
                      </tbody>

                  </table>

              </div> 
              <?php mysqli_close($conn); // Close connection ?>
          </div>

          </section>