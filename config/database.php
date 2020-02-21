<?php
$servername = "mysql.hostinger.com";
$database = "root";
$username = "";
$password = "pmb_db";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_close($conn);
