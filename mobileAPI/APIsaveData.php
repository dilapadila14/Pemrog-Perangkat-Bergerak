<?php
include 'koneksi.php';

    $nim = $_POST['nim'];
    $nama= $_POST['nama'];
    $progdi= $_POST['progdi'];
    $kelas= $_POST['kelas'];
    $email= $_POST['email'];


$query = mysqli_query($koneksi, "INSERT INTO materi (NIM,Nama,progdi,kelas,email) VALUES ('$nim', '$nama', '$progdi','$kelas', '$email')") or die(mysqli_error($koneksi));

if($query) {
    echo "<script>alert('Data berhasil ditambahkan!');window.location='index.php';</script>";
} else {
    echo "<script>alert('Data gagal ditambahkan');</script>";
}

mysqli_close($koneksi);
	
?>