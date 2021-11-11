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

    



}

?>