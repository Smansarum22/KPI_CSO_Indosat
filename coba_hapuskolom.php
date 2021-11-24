<?php

  session_start();
  require 'server.php';
  $db = new server;

?>

<h1>Coba Buat Tabel</h1>
    
    <div class="table-responsive">
    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th>Field</td>
                <th>Action</th>
            </tr>
        </thead>
        
        <tbody>

            <?php
                $conn=mysqli_connect("localhost", "root", "", "xyz");

                if (!$conn)
                {
                    die("Connection Failed".mysqli_connect_errno());
                }

                $records = mysqli_query($conn,"SHOW COLUMNS FROM tabel1"); // fetch data from database

                while($data = mysqli_fetch_array($records))
                {

            ?>

            <tr>
                <td><?php echo $data['Field']; ?></td>
                <td>
                <!-- Button untuk modal -->
                <a href="hapus.php?field=<?php echo $data["Field"]; ?>" type="button" class="btn btn-info btn-xs btn-danger" data-toggle="modal">Hapus</a>
                
                
                </td>
            </tr>
            
            <?php
                }
            ?>
        </tbody>