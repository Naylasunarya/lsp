<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard Admin</title>
	<link rel="stylesheet" type="text/css" href="./assets/app/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./assets/icons/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="./dist/css/index.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<script src="./dist/js/jquery.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500&display=swap" rel="stylesheet">
</head>
<body>

<!-- navbar -->
	<div class="wrapper">
		<nav class="navbar navbar-expand-md navbar-light bg-light py-1">
		    <div class="collapse navbar-collapse" id="navbarSupportedContent">
		      	<ul class="navbar-nav ms-auto">
		        <li class="nav-item dropstart">
        <a class="nav-link" href="#" id="navbarDropdown"role="button" data-bs-toggle="dropdown">
          <img src="./img/logo2.jpg" alt="user" class="img-user">
        </a>

        <div class="dropdown-menu mt-2 pt-0" aria-labelledby="navbarDropdown">
        	<div class="d-flex p-3 border-bottom mb-2">
        		<img src="./img/user1.jpg" alt="user" class="img-user me-2">
        		<div class="d-block">
        			<p class="fw-bold mb-0 1h-1">Admin</p>
        			<small>admin@gmail.com</small>
        		</div>
        	</div>
        </div>
      </li>
				</ul>
   			 </div>
	</nav>

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

	<!-- dashboard -->
	<div class="main-pages">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="d-block bg-white rounded shadow p-3">
					<h2>Halo admin</h2>

					<!-- jam -->
					<?php
					date_default_timezone_set("Asia/Bangkok");
					?>

					<script type="text/javascript">
						function date_time(id)
					{
						date = new Date;
						year = date.getFullYear();
						month = date.getMonth();
						months = new Array('January', 'February', 'March', 'April', 'May', 'June', 'Jully', 'August', 'September', 'October', 'November', 'December');
						d = date.getDate();
						day = date.getDay();
						days = new Array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
						h = date.getHours();
						if(h<10)
							{
								h = "0"+h;
							}
								m = date.getMinutes();
								if(m<10)
							{
								m = "0"+m;
							}
								s = date.getSeconds();
								if(s<10)
							{
								s = "0"+s;
							}

							result = ''+days[day]+' '+d+' '+months[month]+' '+year+' '+h+':'+m+':'+s;
							document.getElementById(id).innerHTML = result;
							setTimeout('date_time("'+id+'");','1000');
							return true;
							}
						</script>

			 				<span id="date_time"></span>
						<script type="text/javascript">window.onload = date_time('date_time');</script>
					</div>
				</div>
			</div>

			<!-- <div class=" card-group">
				<div class="col-12 col-md-6 col-lg-3">
					<div class="card text-end p-2"> 
						<div class="d-flex align-items-center">
						<i class="fa fa-plane fload-start fa-2x py-auto"></i>
						<div class="card-body">	
						<h5 class="card-title">Data Registrasi Ujian</h5>			
							<a href="data_tanggal.php" class="btn btn-primary">Lihat</a>
				  </div>
				</div>
			</div>
		</div>
		 -->
	


	<div class="slider-background" id="sliders-background"></div>
	<script type="./assets/app/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<script type="./dist/js/index.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


</body>
</html>