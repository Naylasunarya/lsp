
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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
      <a class="nav-link px-3" href="logout.php"onclick="return confirm('Apakah anda yakin ingin keluar ?')"> <i class="fa fa-sign-out fa-lg box-icon" aris-hidden="true"></i>Logout</a>
  </nav>
  </div>
  </div>

  <!-- dashboard -->
  <div class="main-pages">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="d-block bg-white rounded shadow p-3">
        
            <div class="col-md-10 p-5 pt-4">
                 <h3 class="mb-0 fw-bold text-center"> TAMBAH JADWAL UJIAN</h3><hr>

                <form action="aksiinput.php" method="POST">

                <div class="mb-3 row">
                  <label class="col-sm-2 col-form-label">Jenis Ujian</label>
                  <div class="col-sm-5">
                   <select class="form-select" name="jenis_ujian" id="jenis_ujian">
                        <option selected>Pilih Ujian Lisensi</option>
                        <option value="ACO"  href="data_aco.php">ACO</option>
                        <option value="ATC"  href="data_atc.php">ATC</option>
                        <option value="TEKNIK">TEKNIK</option>
                    </select>
                  </div>
                </div>
                 


                  <div class="mb-3 row">
                  <label class="col-sm-2 col-form-label">Tanggal Ujian</label>
                  <div class="col-sm-5">
                      <input type="date" name="tanggal" class="form-control">
                  </div>
                  </div>

                  <div class="mb-3 row">
                  <label class="col-sm-2 col-form-label">Waktu Ujian</label>
                  <div class="col-sm-5">
                      <input type="text" name="waktu" class="form-control">
                  </div>
                  </div>

                   <div class="mb-3 row">
                  <label class="col-sm-2 col-form-label">Status Ujian</label>
                  <div class="col-sm-5">
                   <select class="form-select" name="status" id="status">
                        <option selected>Status Ujian</option>
                        <option>Belum Terlaksana</option>
                        <option>Selesai</option>
                        
                    </select>
                  </div>
                </div>
                   <div class="text-center">
                      <input type="submit" name="tambah" value="Tambah" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                      <a href="jadwal.php" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">Batal</a>
                    </div>
                </form>
              </div>
          </div>
        </div>
      </div>
</div>
        </div>
      </div>
      
      


  <div class="slider-background" id="sliders-background"></div>
  <script type="./assets/app/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script type="./dist/js/index.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


</body>
</html>