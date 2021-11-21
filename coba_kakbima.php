<!DOCTYPE html>
<html>
<head>
  <title>Display all records from Database</title>
</head>
<body>

<h2>Detail Tabel</h2>

<table border="2">
  <tr>
    <td>Field</td>
    
  </tr>

<?php

$conn=mysqli_connect("localhost", "root", "", "kpicso");

        if (!$conn)
        {
            die("Connection Failed".mysqli_connect_errno());
        }

$records = mysqli_query($conn,"SHOW COLUMNS FROM data_detail"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['Field']; ?></td>
    
  </tr>	
<?php
}
?>
</table>

<?php mysqli_close($conn); // Close connection ?>

</body>
</html>