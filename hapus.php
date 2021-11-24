<?php 

    $conn=mysqli_connect("localhost", "root", "", "xyz");

    if (!$conn)
    {
        die("Connection Failed".mysqli_connect_errno());
    }
    
    $sql = "DELETE FROM tabel1 WHERE Field='" . $_GET["Field"] . "'";

    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
 
// header("location:EditTabelAdmin.php?pesan=hapus");
?>


