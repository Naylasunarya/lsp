<?php
include 'config.php';

// cek
if(isset($_POST['submit'])){

    // ambil data dari form
    $no=$_POST['no'];
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $kota= $_POST['kota'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    

    // buat query
    mysqli_query($kon,"INSERT INTO regis_user VALUES('$no', '$nip', '$nama', '$kota', '$username', '$password')");

    header('Location: website1.php?status=sukses');

}

?>