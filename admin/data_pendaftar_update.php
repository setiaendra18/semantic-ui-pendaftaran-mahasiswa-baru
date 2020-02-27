<?php
include "../config/database.php";
echo $id_pendaftar=$_GET['id_pendaftar'];
echo $status_pendaftaran=$_GET['status_pendaftaran'];
    
    $query = "UPDATE pendaftar SET status_pendaftaran='$status_pendaftaran' WHERE id_pendaftar='$id_pendaftar' " ;
    if (!$result = mysqli_query($conn, $query))
    {
        exit(mysqli_error($conn));
    }
    else
    {
        header("location:data_pendaftar.php");
    }

?>