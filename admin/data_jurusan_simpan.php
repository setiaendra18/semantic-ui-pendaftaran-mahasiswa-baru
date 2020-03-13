<?php
include "../config/database.php";



//TERIMA VARIABEL DARI FORM
$nama_jurusan=$_POST['nama_jurusan'];
$fakultas_pilih=$_POST['fakultas_pilih'];

$sql="INSERT INTO jurusan (nama_jurusan,id_fakultas) values ('$nama_jurusan',$fakultas_pilih)";
 
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