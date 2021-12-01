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
    <title>Edit</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="favicon.ico" type="image/icon type">
    <link rel="stylesheet" type="text/css"  href="css/FormEditTabelAdmin.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" href="favicon.ico" type="image/icon type">
    <link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/icon type">
    <link rel="stylesheet" type="text/css"  href="css/FormEditTabelAdmin.css">
</head>
<body style="background-image: url('img/Group\ 154\ \(1\).svg');">    
<nav class="navbar navbar-expand-lg fixed-top">
     <div class="container-fluid">
            <a class="navbar-brand" href="#">
              <img src="img/Group 106 (1).svg" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Input Data
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href='InputDataAdmin.php'>Summary</a></li>
                    <li><a class="dropdown-item" href="detail.php">Detail</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href='EditTabelAdmin.php'>Edit Tabel</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="logout.php">Logout</a>
                </li>
              </ul>
              <!-- <form  class="search" action="InputDataAdmin.php" method="post">
                  <input class="search-1" type="text" name="keyword" autofocus placeholder="Search Side Name.." autocomplete="off">
                  <input type="submit" name="cari"  value= "search" class="btn btn-outline-success my-2 my-sm-0"></input>
              </form> -->
            </div>
          </div>
</nav>
<div class="jumbotron jumbotron-fluid">
    <img src="img/Group_people_001A 3.svg" class="gambar-jumbotron">
  </div>
<nav>
    <div class="container">
        <div class="container mt-5 mb-5 p-3 card text-center ">
                <h5>Tambah Kolom</h5>   
                <form class="myForm" method="post">
                    <center>
                    <div class="form-group row">
                        <div class="col-sm-20 mb-3">
                            <input type="text" name="clname" placeholder="Nama Kolom" class="form-control" autocomplete="off">
                        </div>
                    </div>
                    <input type="submit" name="add" value="Tambah" class="btn-1">
                    </center>    
                </form> 
        </div>
    </div>
</nav>

   
<?php
    if (isset($_POST["add"])) 
    {
        $conn=mysqli_connect("localhost", "root", "", "kpicso");
        if (!$conn)
        {
            die("Connection Failed".mysqli_connect_errno());
        }
        $sqlquery="ALTER TABLE data_detail ADD ".$_POST["clname"]." varchar (255)";
        if (mysqli_query($conn, $sqlquery))
        {
            echo "column Created Succesfully..!";
            // header("Location: EditTabelAdmin.php");
        } 
        else
        {
            echo "already column is exists".mysqli_error($conn); 
        }
        mysqli_close($conn);
    }
?>
 <div class="footer">
        Copyright &#169; <br> Channel
  </div>

  </body>
</html>