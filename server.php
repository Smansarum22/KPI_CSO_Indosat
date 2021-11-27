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

    function add() {

    }
    
    function cari($keyword){
        $query = "SELECT * FROM tabelexcel2
                    WHERE
                
                kolom2 LIKE '%$keyword%'
                    ";
        // return query($query);
        return mysqli_query($this->connect, $query);
    }

}

?>