<?php 

    $conn=mysqli_connect("localhost", "root", "", "kpicso");

    if (!$conn)
    {
        die("Connection Failed".mysqli_connect_errno());
    }
    
    $kolom = $_GET['field'];
    // var_dump($kolom);

    // $sql = "DELETE FROM tabel1 WHERE Field='" . $_GET["Field"] . "'";
    $sql = "ALTER TABLE data_detail DROP ".$kolom;
    
    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
        header("location:EditTabelAdmin.php?pesan=hapus");
        
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
        header("location:EditTabelAdmin.php?pesan=hapus");
    }
    
    mysqli_close($conn);
 
   
?>


