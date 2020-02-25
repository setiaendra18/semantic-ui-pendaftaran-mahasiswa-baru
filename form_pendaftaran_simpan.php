<?php
include "config/database.php";
include "include/kode_pendaftaran.php";


//TERIMA VARIABEL DARI FORM
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$agama=$_POST['agama'];
$email=$_POST['email'];
$nama=$_POST['nama'];
$no_tlpn=$_POST['no_tlpn'];
$provinsi=$_POST['provinsi'];
$kota_asal=$_POST['kota_asal'];
$sekolah_asal=$_POST['sekolah_asal'];
$jurusan_pilih=$_POST['jurusan_pilih'];

$status_pendaftaran=1;
$id_pendaftar=kode_pendaftaran($conn);

$sql="INSERT INTO pendaftar (id_pendaftar,nama, jenis_kelamin, agama,email,no_tlpn,provinsi,kota,sekolah_asal,jurusan_pilihan,status_pendaftaran)
 values ('$id_pendaftar','$nama',$jenis_kelamin,$agama,'$email','$no_tlpn','$provinsi','$kota_asal','$sekolah_asal',$jurusan_pilih,$status_pendaftaran)";
 
if ($conn->query($sql) === TRUE)
{
    echo "New record created successfully";
    
} 
else
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
