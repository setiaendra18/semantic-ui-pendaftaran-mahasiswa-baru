<?php
include "../config/database.php";



//TERIMA VARIABEL DARI FORM
$nama_jurusan=$_POST['nama_jurusan'];


$sql="INSERT INTO jurusan (nama_jurusan) values ('$nama_jurusan')";
 
if ($conn->query($sql) === TRUE)
{
    header("location:data_jurusan.php");
    
} 
else
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>