<?php 



class server {

    function __construct()
    {
        //koneksi menghubungkan ke database
        $server = "localhost";
        $username = "root";
        $password = "";
        $database = "xyz";
        $this->connect = new mysqli($server,$username,$password,$database);
    }

    //fungsi ini digunakan kalau hanya login sebagai admin
    function signin($username, $password) {

        $passMd5 = md5($password);

        //admin
        $query = "SELECT * FROM admin WHERE username = '$username' AND pass = '$passMd5'";
        $admin = mysqli_query($this->connect,$query) or die(mysqli_error($this->connect));
        $count_user = mysqli_num_rows($admin);
        
        if($count_user > 0){

            while($row = $admin->fetch_assoc()) {
              
                $_SESSION["username"] =  $row["username"];
            }
            return true;
        }
        else{
            return false;
        }
    }

    //fungsi masuk melalui tombol admin
    function admin($username,$password) {
        $passMd5 = md5($password);

        //admin
        $query = "SELECT * FROM admin WHERE username = '$username' AND pass = '$passMd5'";
        $admin = mysqli_query($this->connect,$query) or die(mysqli_error($this->connect));
        $count_user = mysqli_num_rows($admin);
        
        if($count_user > 0){

            while($row = $admin->fetch_assoc()) {
              
                $_SESSION["username"] =  $row["username"];
            }
            return true;
        }
        else{
            return false;
        }
    }

    //fungsi masuk melalui tombol mc
    function mc($username,$password) {
        $passMd5 = md5($password);

        //admin
        $query = "SELECT * FROM mc WHERE username = '$username' AND pass = '$passMd5'";
        $mc = mysqli_query($this->connect,$query) or die(mysqli_error($this->connect));
        $count_user = mysqli_num_rows($mc);
        
        if($count_user > 0){

            while($row = $mc->fetch_assoc()) {
              
                $_SESSION["username"] =  $row["username"];
            }
            return true;
        }
        else{
            return false;
        }
    }

    //fungsi masuk melalui tombol cso
    function cso($username,$password) {
        $passMd5 = md5($password);

        //admin
        $query = "SELECT * FROM cso WHERE username = '$username' AND pass = '$passMd5'";
        $cso = mysqli_query($this->connect,$query) or die(mysqli_error($this->connect));
        $count_user = mysqli_num_rows($cso);
        
        if($count_user > 0){

            while($row = $cso->fetch_assoc()) {
              
                $_SESSION["username"] =  $row["username"];
            }
            return true;
        }
        else{
            return false;
        }
    }

    //fungsi mencari keyword pada kolom kedua
    function cari($keyword){
        $query = "SELECT * FROM tabelexcel2
                    WHERE
                
                kolom2 LIKE '%$keyword%'
                    ";
        // return query($query);
        return mysqli_query($this->connect, $query);
    }

    //fungsi login yang arum buat tapi tidak berhasil
    function coba_login($username,$password) {
        // mengaktifkan session pada php
        session_start();

        // menghubungkan php dengan koneksi database
        require 'server.php';

        //jika klik tombol admin
        if(isset($_POST['admin'])) {
            // menangkap data yang dikirim dari form login
            $username = $_POST['username'];
            $password = $_POST['password'];

            // menyeleksi data admin dengan username dan password yang sesuai
            $query = "SELECT * FROM admin WHERE username = '$username' AND pass = '$password'";
            $admin = mysqli_query($this->connect,$query) or die(mysqli_error($this->connect));

            // menghitung jumlah data yang ditemukan
            $cek = mysqli_num_rows($admin);

            // cek apakah username dan password di temukan pada database
            if($cek > 0) {
                $data = mysqli_fetch_assoc($admin);
                
                // cek jika user login sebagai admin
                $_SESSION['username'] = $username;

                // alihkan ke halaman dashboard admin
                header("location:halaman_admin.php");
            }
            
        }
    }

    //fungsi menampilkan alert jika login gagal
    function tampilAlert($text, $tipe) {
        echo "<div class=\"alert alert-".$tipe."\" role=\"alert\">
                <p>".$text."</p>
              </div>";
    }
}
?>