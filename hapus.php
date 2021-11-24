<?php 

    $conn=mysqli_connect("localhost", "root", "", "xyz");

    if (!$conn)
    {
        die("Connection Failed".mysqli_connect_errno());
    }
    
    $kolom = $_GET['field'];
    // var_dump($kolom);

    // $sql = "DELETE FROM tabel1 WHERE Field='" . $_GET["Field"] . "'";
    $sql = "ALTER TABLE tabel1 DROP ".$kolom;
    
    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
 
// header("location:EditTabelAdmin.php?pesan=hapus");
?>


