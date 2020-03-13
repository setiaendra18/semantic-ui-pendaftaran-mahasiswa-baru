<?php
include "../config/database.php";



//TERIMA VARIABEL DARI FORM
$nama_fakultas=$_POST['nama_fakultas'];


$sql="INSERT INTO fakultas (nama_fakultas) values ('$nama_fakultas')";
 
if ($conn->query($sql) === TRUE)
{
    header("location:data_fakultas.php");
    
} 
else
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>