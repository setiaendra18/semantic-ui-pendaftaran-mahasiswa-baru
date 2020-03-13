<?php
include "../config/database.php";
$id_fakultas=$_GET['id_fakultas'];
$sql = "DELETE FROM fakultas WHERE id_fakultas='$id_fakultas'";
if ($conn->query($sql) === TRUE)
{
    header("location:data_fakultas.php");
   	
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
?>