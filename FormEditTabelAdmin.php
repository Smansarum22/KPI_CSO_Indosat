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
    <link rel="stylesheet" type="text/css"  href="css/FormEditTabelAdmin.css">
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
                        <button type="button" class="btn" onclick="window.location.href='InputDataAdmin.html'">Input Data</button>
                    </div>

                    <div class="kanan">
                        <button type="button" class="btn" onclick="window.location.href='EditTabelAdmin.html'">Edit Tabel</button>
                    </div>


                    </div>
                  
                </div>

            </div>
            



        </div>

    </section>
    
    <section> <!--bagian Tambah-->
        <div>
                       
            <div class="container mt-5 mb-5 p-3 card text-center " style="width: 70%; border-width: 3px; border-radius: 10px; box-shadow: 3px 3px 2px rgba(0, 0, 0, 0.322);">
                <h5>TAMBAH NAMA KOLOM</h5>   
                <form id="myForm">
                    <div class="form-group row">
                        <div class="col-sm-20 mb-3">
                            <input type="text" name="namakolom" placeholder="NAMA KOLOM" class="form-control">
                        </div>
                    </div>

                    <button type="button" class="add" onclick="">
                        Add
                    </button>
                </form> 
            </div>
        </div>
    </section>

</body>


</html>