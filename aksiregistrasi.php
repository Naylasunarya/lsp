<?php 
include 'config.php';

// cek
if(isset($_POST['registrasi'])){
    $direktori = "berkas/";
    // ambil data dari form
    $no=$_POST['no'];
    $nama_lembaga = $_POST['nama_lembaga'];
    $kota = $_POST['kota'];
    $pj = $_POST['pj'];
    $file = $_FILES['file']['name'];
    $jenis_ujian = $_POST['jenis_ujian'];
    $tanggal = $_POST['tanggal'];
    $waktu = $_POST['waktu'];
    move_uploaded_file ($_FILES['file']['tmp_name'],$direktori.$file_name);

    // buat query
    mysqli_query($kon,"INSERT INTO jadwal VALUES('$no','$nama_lembaga','$kota','$pj','$file','$jenis_ujian','$tanggal','$waktu')");

    header('Location: tampil_registrasi.php?status=sukses');

}

?>