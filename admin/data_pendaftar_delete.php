<?php
include "../config/database.php";
$id_pendaftar=$_GET['id_pendaftar'];
$sql = "DELETE FROM pendaftar WHERE id_pendaftar='$id_pendaftar'";
if ($conn->query($sql) === TRUE)
{
    header("location:data_pendaftar.php");
   	
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
?>