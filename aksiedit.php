<?php 
 
include('config.php'); 
 
	$no = $_POST['no'];
    $jenis_ujian = $_POST['jenis_ujian'];
    $tanggal = $_POST['tanggal'];
    $waktu = $_POST['waktu'];
    $status = $_POST['status'];

 
    $sql = "UPDATE `regis_jadwal` SET no='$no', jenis_ujian='$jenis_ujian', tanggal='$tanggal', waktu='$waktu', status='$status' WHERE no='$no'";     
    $query = mysqli_query($kon, $sql); 
 
    if($query) {         
    header('Location: jadwal.php');     
    } else {         
    die("Gagal menyimpan perubahan...");     
    } 

?> 