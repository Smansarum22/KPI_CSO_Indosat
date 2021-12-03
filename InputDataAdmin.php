<?php
  session_start();
  require 'server.php';
  $db = new server;
  $conn=mysqli_connect("localhost", "root", "", "xyz");
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Input Data Admin</title>
    
    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" href="favicon.ico" type="image/icon type">
    <link rel="stylesheet" type="text/css"  href="css/InputDataAdmin2.css">
    <link rel="stylesheet" type="text/css"  href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css"  href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css"  href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css"  href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.colVis.min.js"></script>

</head>
<body style="background-image: url('img/Group\ 154\ \(1\).svg');">

  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid fixed-top">
      <a class="navbar-brand" href="#">
        <img src="img/Group 106 (1).svg" class="logo">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Input Data
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="InputDataAdmin.php">Summary</a></li>
              <li><a class="dropdown-item" href="detail.html">Detail</a></li>
            </ul>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Input Data</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href='EditTabelAdmin.php'>Edit Data</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Logout</a>
          </li>
        </ul>
        <!-- <form method="post" class="search">
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">Search</button>
          </form>
        </form> -->
        <!-- <form  class="search" action="InputDataAdmin.php" method="post">
          <input class="search-1" type="text" name="keyword" autofocus placeholder="Search Side Name.." autocomplete="off">
          <input type="submit" name="cari"  value= "search" class="btn btn-outline-success my-2 my-sm-0"></input>
        </form> -->
      </div>
    </div>
  </nav>
  <div class="jumbotron-fluid"> <br><br>
    <img src="img/Group_people_001A 3.svg" class="gambar-jumbotron"> 
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-2">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown" style="margin-top: 20px;">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Sell in SP
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">SP Kosong (SP Zero)</a></li>
              <li><a class="dropdown-item" href="#">SP Ori 2GB</a></li>
              <li><a class="dropdown-item" href="#">SP Ori 8GB</a></li>
              <li><a class="dropdown-item" href="#">SP Ori 16GB</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sell in Salmo</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Effective Call
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">SP</a></li>
              <li><a class="dropdown-item" href="#">Saldo Mobo</a></li>
              <!-- <li><a class="dropdown-item" href="#">Gowa</a></li>
              <li><a class="dropdown-item" href="#">Maros</a></li>
              <li><a class="dropdown-item" href="#">Bulukumba</a></li> -->
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Injection
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Voucer</a></li>
              <li><a class="dropdown-item" href="#">SP old</a></li>
              <li><a class="dropdown-item" href="#">New SP</a></li>
              <li><a class="dropdown-item" href="#">Pulsa</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              OPA
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">SULTAN</a></li>
              <li><a class="dropdown-item" href="#">JAWARA</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">RGUGA Inject</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">QURO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">QSSO</a>
          </li>
         
        </ul>
      </div>
      <div class="col-md-10"> <br><br>
       <h3>From BI with Filter Retail Fisik</h3> 
        <!-- <a href=""><img src="img/upload.png" class="download"></a> -->
        <a href=""><img src="img/downloading-file.png" class="download"> </a>
        <br><br>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
                            <?php 
                            $sql_kolom = mysqli_query($conn, "SHOW COLUMNS FROM tabelexcel2");
                            while($data = mysqli_fetch_array($sql_kolom)){
                              echo '<th scope="col" >'.ucwords(str_replace('_','', $data['Field'])).'</th>';;
                            }
                            // $sql_kolom = mysqli_query($conn, "SHOW COLUMNS FROM tabelexcel2");
                            // while($data = $sql_kolom-> fetch_assoc()){
                            //   echo $culumns[] = $data['Field'];
                            // } 
                              // foreach($data as $key => $value){
                                // echo "$key=$value"; 
                            ?> 
            </tr>
          </thead>
         
          <tbody>
                        <?php
                            $conn=mysqli_connect("localhost", "root", "", "xyz");

                            if (!$conn)
                            {
                                die("Connection Failed".mysqli_connect_errno());
                            }

                            if( isset($_POST["cari"]) ){
                              $records = $db->cari($_POST["keyword"]);
                             
                            } else {
                              $records = mysqli_query($conn,"SELECT * FROM tabelexcel2"); // fetch data from database
                            }

                            
                            $tabelnya = mysqli_query($conn,"SHOW COLUMNS FROM tabelexcel2");
                            $jumlah_kolom = mysqli_num_rows($tabelnya);
                            while($data = mysqli_fetch_array($records))
                            {

                        ?>

                        <tr>
                            <?php
                            for ($x = 0; $x <= $jumlah_kolom - 1; $x++) 
                            { 
                            ?>
                                <td><?php echo $data[$x]; ?></td>
                            <?php   
                            } 
                            ?>
                        </tr>
            
                        <?php
                            }
                        ?>
                      </tbody>
        </table>
        </div>
          <!-- <img src="img/table1.svg" class="table"> -->
          <section> <!--tampilkan tabel-->
          <div class="container">
              <div class="table">
                  <!-- <table class= "table">
                      <thead class="table">
                          <tr>
                            <?php 
                            // $sql_kolom = mysqli_query($conn, "SHOW COLUMNS FROM tabelexcel2");
                            // while($data = mysqli_fetch_array($sql_kolom)){
                            //   echo '<th scope="col">'.ucwords(str_replace('_','', $data['Field'])).'</th>';;
                            // }
                            $sql_kolom = mysqli_query($conn, "SHOW COLUMNS FROM tabelexcel2");
                            while($data = $sql_kolom-> fetch_assoc()){
                              echo $culumns[] = $data['Field'];
                            } 
                            
                            ?>  
                          </tr>
                      </thead>
                      <tbody>
                        <?php
                            $conn=mysqli_connect("localhost", "root", "", "xyz");

                            if (!$conn)
                            {
                                die("Connection Failed".mysqli_connect_errno());
                            }

                            if( isset($_POST["cari"]) ){
                              $records = $db->cari($_POST["keyword"]);
                             
                            } else {
                              $records = mysqli_query($conn,"SELECT * FROM tabelexcel2"); // fetch data from database
                            }

                            
                            $tabelnya = mysqli_query($conn,"SHOW COLUMNS FROM tabelexcel2");
                            $jumlah_kolom = mysqli_num_rows($tabelnya);
                            while($data = mysqli_fetch_array($records))
                            {

                        ?>

                        <tr>
                            <?php
                            for ($x = 0; $x <= $jumlah_kolom - 1; $x++) 
                            { 
                            ?>
                                <td><?php echo $data[$x]; ?></td>
                            <?php   
                            } 
                            ?>
                        </tr>
            
                        <?php
                            }
                        ?>
                      </tbody>

                  </table> -->

              </div> 
              <?php mysqli_close($conn); // Close connection ?>
          </div>

          </section>
        
      </div>
    </div>
  </div>
  <div class="footer">
    Copyright &#169; <br> Channel
  </div>

<script>
  $(document).ready(function() {
    $('#example').DataTable({
      "scrollX": true
    });
} );

    // $(document).ready(function() {
    //     var table = $('#example').DataTable( {
    //         "scrollX": true,
    //         lengthChange: false,
    //         buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
    //     } );
    
    //     table.buttons().container()
    //         .appendTo( '#example_wrapper .col-md-6:eq(0)' );
    // } );
</script>
</body>
</html>