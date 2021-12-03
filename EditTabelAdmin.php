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
    <title>Edit Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="favicon.ico" type="image/icon type">
    <link rel="stylesheet" type="text/css"  href="css/FormEditTabelAdmin.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" href="favicon.ico" type="image/icon type">
    <link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body style="background-image: url('img/Group\ 154\ \(1\).svg');">
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid fixed-top">
            <a class="navbar-brand" href="#">
              <img src="img/Group 106 (1).svg" class="logo">
            </a>
            <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button> -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Input Data
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href='InputDataAdmin.php'>Summary</a></li>
                    <li><a class="dropdown-item" href="summary.html">Detail</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href='EditTabelAdmin.php'>Edit Data</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Logout</a>
                </li>
              </ul>
              <!-- <div class="search">
                <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
              </div> -->
              <form  class="search" action="InputDataAdmin.php" method="post">
                <input class="search-1" type="text" name="keyword" autofocus placeholder="Search Name Here.." autocomplete="off"></input>
                <input type="submit" name="cari" value= "search" class="btn btn-outline-success my-2 my-sm-0"></input>
              </form> 
            </div>
        </div> 
    </nav>
    <div class="jumbotron jumbotron-fluid"> <br><br>
      <img src="img/Group_people_001A 3.svg" class="gambar-jumbotron">
    </div>
    </div> <br><br>
    <nav class="container">
            <!-- <button type="button" class="btn" onclick="window.location.href='EditTabelAdmin.php'">EDITT</button> -->
            <button type="button" class="btn-1" onclick="window.location.href='FormEditTabelAdmin.php'">
                Add Column
            </button>
    </nav>
    <nav class="container">
        <h3>Column List</h3>
        <div class="alert alert-success" role="alert">
            Data Berhasil Ditambahkan
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
              <thead>
                  <tr>
                      <th scope="col">Nama Kolom</td>
                      <th scope="col">Action</th>
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
    </nav>
    <div class="footer">
        Copyright &#169; <br> Channel
    </div>
</body>
</html>