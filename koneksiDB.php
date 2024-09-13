<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "warumu";

$conn = mysqli_connect($server,$user,$password,$database);

if (!$conn){
    die("<script>alert('Database gagal terhubung')</script>". mysqli_connect_error());
}

?>