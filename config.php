<?php
$host="localhost";
$user="root";
$password="";
$db="web";

$kon = mysqli_connect($host, $user, $password, $db);
if (!$kon){
	die("Koneksi gagal:".msyqli_connect_error());
}

?>