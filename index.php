<?php

  session_start();
  require 'server.php';
  $db = new server;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    
    <title>CSO PERFORMANCE MONITORING</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="favicon.ico" type="image/icon type">
    <link rel="stylesheet" type="text/css"  href="css/Login.css">
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

<body style="background-image: url('img/Latar.svg'); font-family: 'indosat';">
    <!-- coba-coba -->
    <section>
        
        <nav class="kolom">
          <div class="row">
            <div class="col-md">
                
                <h3>CSO PERFORMANCE MONITORING</h3>
                <img src="img/Logo.svg" class="img-logo" alt="">
              
            </div>
            
          <div class="col-md">
            <br><br><br>        
            <form class="myForm" method="post">
                        <input type="text" name="username" placeholder="USERNAME" class="input">
                        <br>
                        <input type="password" name="password" id="password" placeholder="PASSWORD" class="input">
                        <input type="submit" name="admin" value="admin" class="btn-admin">
                        <input type="submit" name="mc" value="mc" class="btn-cso">
                        <input type="submit" name="cso" value="cso" class="btn-cso">
                        
            </form>
          </div>
  
          </div>
  
        </nav>
    
      </section>
</body>

<script src="javascriptnya.js"></script>

<?php
    //Login sebagai admin
    if(isset($_POST['admin'])){

        $username = $_POST['username'];
        $password = $_POST['password'];

        $hasil = $db->admin($username,$password);

        echo $hasil;

        if($hasil != false){
        header("Location: InputDataAdmin.php");
        }else{
        ?>
        // echo 'Username dan password tidak terdaftar';
        <div class="alert alert-danger" role="alert">
            This is a danger alert—check it out!
        </div>
        <?php
        }

    //Login sebagai mc
    } else if (isset($_POST['mc'])) {
        
        $username = $_POST['username'];
        $password = $_POST['password'];

        $hasil = $db->mc($username,$password);

        echo $hasil;

        if($hasil != false){
        header("Location: homescreenMC.php");
        }else{
        echo 'Username dan password tidak terdaftar';
        }

    //Login sebagai cso
    } else if (isset($_POST['cso'])) {
        
        $username = $_POST['username'];
        $password = $_POST['password'];

        $hasil = $db->cso($username,$password);

        echo $hasil;

        if($hasil != false){
        header("Location: homescreenCSO.php");
        }else{
        echo 'Username dan password tidak terdaftar';
        }
    }

?>

</html>