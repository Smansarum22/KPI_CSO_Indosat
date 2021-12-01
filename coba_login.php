<center>
<form method="post">
    <input type="text" name="username" placeholder="USERNAME" class="input">
    <br>
    <input type="password" name="password" id="password" placeholder="PASSWORD" class="input">
    <br>

    <input type="submit" name="admin" value="admin" class="btn-admin">
    <input type="submit" name="mc" value="mc" class="btn-admin">
    <input type="submit" name="cso" value="cso" class="btn-admin">
    
</form>
</center>


<?php
session_start();
require 'server.php';
$db = new server;

if(isset($_POST['admin'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $hasil = $db->admin($username,$password);

    echo $hasil;

    if($hasil != false){
      header("Location: InputDataAdmin.php");
    }else{
      echo 'Username dan password tidak terdaftar';
    }
}
else if (isset($_POST['mc'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $hasil = $db->mc($username,$password);

    echo $hasil;

    if($hasil != false){
      header("Location: InputDataAdmin.php");
    }else{
      echo 'Username dan password tidak terdaftar';
    }
} else if (isset($_POST['cso'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $hasil = $db->cso($username,$password);

    echo $hasil;

    if($hasil != false){
      header("Location: InputDataAdmin.php");
    }else{
      echo 'Username dan password tidak terdaftar';
    }
}
?>

