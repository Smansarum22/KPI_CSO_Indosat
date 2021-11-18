<?php

    if (isset($_POST["submit"])) 
    {
        $conn=mysqli_connect("localhost", "root", "", "xyz");

        if (!$conn)
        {
            die("Connection Failed".mysqli_connect_errno());
        }

        $sqlquery="ALTER TABLE tabel1 ADD ".$_POST["dbname"]." varchar (255)";
        if (mysqli_query($conn, $sqlquery))
        {
            echo "column Modify Succesfully..!";
        } 
        else
        {
            echo "column tidak berhasil di modify".mysqli_error($conn);
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
               <h1>Cara Membuat Kolom Dinamik ke MySQL (phpMyAdmin)</h1>
               <h2>Memakai Kode PHP</h2>
               <hr>
               Masukkan nama kolom : <input type="text" name="dbname">
                                        <input type="submit" value="submit" name="submit">
           </center>
       </form> 

    </body>
</html>