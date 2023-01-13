<?php 
include 'config.php';

// cek
if(isset($_POST['tambah'])){

    // ambil data dari form
    $no=$_POST['no'];
    $jenis_ujian = $_POST['jenis_ujian'];
    $tanggal=$_POST['tanggal'];
    $waktu=$_POST['waktu'];
    $status=$_POST['status'];

    // buat query
    mysqli_query($kon,"INSERT INTO regis_jadwal VALUES('$no','$jenis_ujian','$tanggal','$waktu','$status')");

    header('Location: jadwal.php?status=sukses');

}

?>