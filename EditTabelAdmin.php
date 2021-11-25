<?php

  session_start();
  require 'server.php';
  $db = new server;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Monitoring KPI CSO</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="favicon.ico" type="image/icon type">
    <link rel="stylesheet" type="text/css"  href="css/EditTabelAdmin.css">
</head>

<style>
    @font-face {
           font-family: indosat;
           src: url(Ooredoo-Heavy.otf);     
   }
   
   @font-face {
           font-family: noto;
           src: url(NotoSans-Regular.ttf);       
   }
   
   @font-face {
           font-family: noto-bold-italic;
           src: url(NotoSans-BoldItalic.ttf);       
   }
</style>


<body style="background-color: #FDD202; background-size: cover; font-family: 'indosat';">
    <section> <!--bagian header-->
        <div class="header">
            <div class="row">
                <div class="col-md"> <!--kolom kiri -->
                    <div class="kiri"> <!--sebelah kiri kolom kiri -->
                    <img src="img/Admin.jpg" class="img-logo" alt="">
                    </div>

                    <div class="kiri"> <!--sebelah kanan kolom kiri -->
                        <h3>Halo Admin!</h3>
                    </div>
                </div>

                <div class="col-md">
                    <div class="kanan">
                        <button type="button" class="btn" onclick="window.location.href='InputDataAdmin.php'">Input Data</button>
                    </div>

                    <div class="kanan">
                        <button type="button" class="btn" onclick="window.location.href='EditTabelAdmin.php'">Edit Tabel</button>
                    </div>


                    </div>
                  
                </div>

            </div>
            



        </div>

    </section>
    
    <section> <!--bagian Add-->
        <div>
            <button type="button" class="add" onclick="window.location.href='FormEditTabelAdmin.php'">
                Add
            </button>
            <p class="daftar_kolom">
                Daftar Kolom :
            </p>
        </div>
    </section>

    <section> <!--tabel list nama kolom-->
    <div class="container"> 
    <div class="alert alert-success" role="alert">
    Data Berhasil Ditambahkan
    </div>
    <div class="table-responsive">
    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th>Nama Kolom</td>
                <th>Action</th>
            </tr>
        </thead>
        
        <tbody>

            <?php
                $conn=mysqli_connect("localhost", "root", "", "kpicso");

                if (!$conn)
                {
                    die("Connection Failed".mysqli_connect_errno());
                }

                $records = mysqli_query($conn,"SHOW COLUMNS FROM data_detail"); // fetch data from database

                while($data = mysqli_fetch_array($records))
                {

            ?>

            <tr>
                <td><?php echo $data['Field']; ?></td>
                <td>
                <!-- Button untuk modal -->
                <a href="hapus.php?field=<?php echo $data["Field"]; ?>" type="button" class="" data-toggle="modal">Hapus</a>
                </td>
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
</body>


</html>