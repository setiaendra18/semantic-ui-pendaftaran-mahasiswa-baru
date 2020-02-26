<?php
include '../config/database.php';

echo $username = $_POST['username'];
echo $password = $_POST['password'];
 


$user = mysqli_query($conn,"select * from admin where username='$username' and password='$password'");
$chek = mysqli_num_rows($user);
if($chek>0)
{
    session_start();
    $row = mysqli_fetch_array($user);
    $_SESSION['nama'] = $row['nama'];
    header("location:dashboard.php");
}else
{
    header("location:index.php");
    
}

?>