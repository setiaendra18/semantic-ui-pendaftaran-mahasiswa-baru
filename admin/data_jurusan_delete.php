<?php
include "../config/database.php";
$id_jurusan=$_GET['id_jurusan'];
$sql = "DELETE FROM jurusan WHERE id_jurusan='$id_jurusan'";
if ($conn->query($sql) === TRUE)
{
    header("location:data_jurusan.php");
   	
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
?>