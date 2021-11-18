<?php

    if (isset($_POST["submit"])) 
    {
        $conn=mysqli_connect("localhost", "root", "");

        if (!$conn)
        {
            die("Connection Failed".mysqli_connect_errno());
        }

        $sqlquery="create database ".$_POST["dbname"];
        if (mysqli_query($conn, $sqlquery))
        {
            echo "database Created Succesfully..!";
        } 
        else
        {
            echo "already database is exists".mysqli_error($conn);
        }

        mysqli_close($conn);

    }
?>


<html>
    <head>
    </head>
    <body>
       <form action="" method="post">
           <center>
               <h1>Cara Membuat Database Dinamik ke MySQL (phpMyAdmin)</h1>
               <h2>Memakai Kode PHP</h2>
               <hr>
               Masukkan nama database : <input type="text" name="dbname">
                                        <input type="submit" value="submit" name="submit">
           </center>
       </form> 

    </body>
</html>