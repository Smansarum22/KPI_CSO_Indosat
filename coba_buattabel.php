<?php

  session_start();
  require 'server.php';
  $db = new server;

?>

<?php
//Gagal keknya ini sih
    // if (isset($_POST["button"])) 
    // {
    //     $conn=mysqli_connect("localhost", "root", "", "xyz");

    //     if (!$conn)
    //     {
    //         die("Connection Failed".mysqli_connect_errno());
    //     }

    //     $sqlquery="ALTER TABLE tabel1 DROP ".$_GET['Field']." varchar (255)";
    //     if (mysqli_query($conn, $sqlquery))
    //     {
    //         echo "column deleted Succesfully..!";
    //     } 
    //     else
    //     {
    //         echo "column can not be deleted".mysqli_error($conn);
    //     }

    //     mysqli_close($conn);

    // }
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
    <link rel="stylesheet" type="text/css"  href="css/coba_buattabel.css">
    <script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>

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

<body>
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
                <a href="hapus.php?Field=<?php echo $data["Field"]; ?>" type="button" class="btn btn-info btn-xs btn-danger" data-toggle="modal">Hapus</a>
                <!-- <input type="button" class="btn btn-info btn-xs btn-danger" value="button" name="button">Hapus</a>  -->
                
                </td>
            </tr>
            
            <?php
                }
            ?>
        </tbody>

    </table>
    </div>
    

    <?php mysqli_close($conn); // Close connection ?>

</body>

</html>

<!-- belum berhasil fungsi hapus-->