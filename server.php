<?php

class server {

    function __construct()
    {
        //koneksi menghubungkan ke database
        $server = "localhost";
        $username = "root";
        $password = "";
        $database = "kpicso";
        $this->connect = new mysqli($server,$username,$password,$database);
    }

    function signin($username, $password) {

        $passMd5 = md5($password);

        //admin
        $query = "SELECT * FROM admin WHERE username = '$username' AND pass = '$passMd5'";
        $admin = mysqli_query($this->connect,$query) or die(mysqli_error($this->connect));
        
        if($admin == true){

            while($row = $admin->fetch_assoc()) {
              
                $_SESSION["username"] =  $row["username"];
                $_SESSION["nama"] =  $row["nama"];
            }

            return "admin";

        }
    }

    function tambah() {

    }

}

?>