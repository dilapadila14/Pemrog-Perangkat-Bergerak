<?php
$servername = "localhost";
$username = "u103708342_materi";
$password = "123qweASD";
$dbname = "u103708342_materi";

$koneksi = mysqli_connect($servername, $username, $password, $dbname);
if (!$koneksi){
        die("Connection Failed:".mysqli_connect_error());
    }
?>
