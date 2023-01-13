<?php 

//koneksi database

include 'config.php';

$pass = ($_POST['password']);
$username = mysqli_escape_string($kon, $_POST['username']);
$password = mysqli_escape_string($kon, $pass);
$level = mysqli_escape_string($kon, $_POST['level']);

//cek username terdaftar atau tidak
$cek_user = mysqli_query($kon, "SELECT * FROM login WHERE username = '$username' and password='$password' ");
$user_valid = mysqli_fetch_array($cek_user);

//jika username sesuai dgn database 

if($user_valid) {
	//cek password sesuai dgn database
	if ($password == $user_valid['password']) {

		//jika sudah sesuai, buat session
		session_start();
		$_SESSION['username'] = $user_valid['username'];
		$_SESSION['nama'] = $user_valid['nama'];
		$_SESSION['level'] = $user_valid['level'];

		//cek level
		if($level == "admin"){
			header('location:index.php');
		} elseif($level == "user"){
			header('location:website.php');
		} 
	} else{
	echo "<script>alert('Login Gagal. Password tidak sesuai!');document.location='login.php'</script>";
	}
} else{
	echo "<script>alert('Login Gagal. Username atau Password tidak sesuai!');document.location='login.php'</script>";
}


?>