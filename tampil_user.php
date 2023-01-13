<?php 
include("config.php");
?>

 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tampil user</title>
	<link rel="stylesheet" type="text/css" href="./assets/app/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./assets/icons/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="./dist/css/index.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<script src="./dist/js/jquery.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500&display=swap" rel="stylesheet">
</head>
<body>


<!-- sidebar -->
	<div class="slider" id="sliders">
		<div class="slider-head">
			<div class="d-block pt-4 pb-3 px-3">
			<img src="./img/logo1.png" alt="user" class="slider-img-user mb-2">
			<p class="fw-bold mb-0 1h-1 text-white">PT Karya Ceria</p>
			</div>
		</div>
	
	<div class="slider-body px-1">
		<nav class="nav flex-column">
		  <a class="nav-link px-3 active" href="index.php">
		 	 <i class="fa fa-home fa-lg box-icon" aria-hidden="true"></i>Home</a>
		 	 <a class="nav-link px-3 active" href="jadwal.php">
		  	 <i class="fa fa-calendar-o fa-lg box-icon" aria-hidden="true"></i>Data Jadwal Ujian</a>
		 	 <a class="nav-link px-3 active" href="tampil_user.php">
		  	 <i class="fa fa-users fa-lg box-icon" aria-hidden="true"></i>Data Penanggung Jawab</a>
		  <a class="nav-link px-3 active" href="data_tanggal.php">
		  	 <i class="fa fa-user fa-lg box-icon" aria-hidden="true"></i>Data Registrasi Ujian</a>
		  	 <hr class="soft my-1 bg-white">

		  	 <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" 
          aria-expanded="false"><i class="fa fa-address-book fa-lg box-icon" aria-hidden="true"></i>Data Lisensi</a> 
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="data_aco.php"> LISENSI ACO</a></li>
              <hr class="soft my-1 bg-white">
            <li><a class="dropdown-item" href="data_atc.php">LISENSI ATC</a></li>
              <hr class="soft my-1 bg-white">
             <li><a class="dropdown-item" href="data_teknik.php">LISENSI TEKNIK</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>

		  	   <li class="nav-item dropdown">
		  <hr class="soft my-1 bg-white">
		  <a class="nav-link px-3" href="logout.php"onclick="return confirm('Apakah anda yakin ingin keluar ?')">	<i class="fa fa-sign-out fa-lg box-icon" aris-hidden="true"></i>Logout</a>
	</nav>
	</div>
	</div>
	</div>

	<!-- dashboard -->
	<div class="main-pages">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
			<div class="d-block bg-white rounded shadow p-2">
      <div class="container col-md-13">
      	<nav class="nav flex-column">
		  <a class="nav-link px-3 active" href="index.php">
		 	 <i class="fa fa-home fa-lg box-icon" aria-hidden="true"></i></a>
        <center>

          <table border="1" class="table table-bordered">
            <thead>
            <div class="card-header py-4 px-5 bg-light border-0">
            <h4 class="mb-0 fw-bold text-center">DAFTAR DATA PENANGGUNG JAWAB</h4>
          </div>
    
    <div class="container">
    	<table border="1" class="table table-bordered text-center">
    		<thead>
    			<tr>
    				<th>NO</th>
    				<th>NIP</th>
    				<th>NAMA</th>
    				<th>KOTA</th>
    				<th>USERNAME</th>
    				<th>PASSWORD</th>
    			</tr>
    		</thead>
    		<tbody>
    			<?php
    			$sql = "SELECT * FROM regis_user";         
		        $query = mysqli_query($kon, $sql); 
		        while($user = mysqli_fetch_array($query)){             
		            echo "<tr>"; 
		            echo "<td>".$user['no']."</td>"; 
		            echo "<td>".$user['nip']."</td>";
		            echo "<td>".$user['nama']."</td>";
		            echo "<td>".$user['kota']."</td>";
		            echo "<td>".$user['username']."</td>";
		            echo "<td>".$user['password']."</td>";                     
		 
		            echo "</tr>";         
    			?>
    			<?php 
  				}
  				?>
    		</tbody>
    		 

    	</table>
    	 <p>Total: <?php echo mysqli_num_rows($query) ?></p> 
                	<a href="print_user.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Print</a>
    </div>

	<div class="slider-background" id="sliders-background"></div>
	<script type="./assets/app/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<script type="./dist/js/index.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


</body>
</html>

	<div class="slider-background" id="sliders-background"></div>
	<script type="./assets/app/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<script type="./dist/js/index.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


</body>
</html>