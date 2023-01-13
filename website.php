<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website Public</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   
  </head>
  <body>

    <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#"><img class="logo" src="./img/logo1.png"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#jadwal">Registrasi User</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#contact">Kontak dan Informasi</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>


    <!--  Slide Gambar -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/pesawat1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption">
          <h5>PERSYARATAN PENERBITAN LISENSI <br> PERSONEL NAVIGASI <br> PENERBANGAN </h5><p><a href="persyaratan.php" class="btn btn-warning mt-3">More</a></p>
        </div>
      </div>
      <div class="carousel-item">
        <<img src="img/pesawat.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption">
          <h5>AIR TRAFFIC CONTROL</h5>
          <p><a href="atc.php" class="btn btn-warning mt-3">More</a></p>
        </div>
      </div>
      <div class="carousel-item">
        <<img src="img/pesawat2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption">
          <h5>TEKNIK</h5>
          <p><a href="#" class="btn btn-warning mt-3">More</a></p>
        </div>
      </div>
      <div class="carousel-item">
      <img src="img/pesawat.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption">
          <h5>ACO</h5>
          <p><a href="aco.php" class="btn btn-warning mt-3">More</a></p>
        </div>
      </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
</div>

  <!-- section -->
  <section id="jadwal" class="about-section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-12 col-12">
          <div class="about-img">
            <img src="./img/registrastion.jpg" alt="" class="img-fluid" width="70%">
          </div>
        </div>
        <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
          <div class="about-text">
            <h2>Registrasi User</h2>
            <p>Calon pendaftar diharuskan untuk melakukan registrasi terlebih dahulu sebelum mendapat jadwal ujian yang telah ditentukan. <br> Klik tombol Registrasi di bawah ini.</p>
            <a href="regis_user.php" class="btn btn-warning">Registrasi</a>
          </div>
        </div>
        <hr class="mt-5">

        <div class="col-lg-4 col-md-12 col-12">
            <div class="about-img">
                <img src="./img/login.jpg">
            </div>
        </div>
        <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
            <h2>LOGIN</h2>
            <p>Silahkan Login setelah melakukan Registrasi Akun.</p>
            <a href="login.php" class="btn btn-warning">Login</a>
        </div>

      </div>
    </div>
  </section>
  <br> <br> <br>



  <!-- contact -->
  <div class="row">
    <div class="col-md-4">
      <div id="contact">
         <h3 class="information">KONTAK KAMI</h3>
         <ul>
           <li>(+62) 882 - 128 - 991</li>
           <li>(+62) 836 - 002 - 761</li>
         </ul>
      </div>
    </div>
    <div class="col-md-4">
       <h3 class="footer__title">ALAMAT</h3>
               <ul>
                    <li>Jakarta - Indonesia</li>
                    <li>Jl. Kencana #9999</li>
                    <li>999 - 888 - 777</li>
                    <li>@gmail.com</li>
                </ul>
    </div>
    <div class="col-md-4">
       <h3 class="footer__title">JAM KERJA</h3>
                <ul>
                    <li>Senin - Jum'at</li>
                    <li>08:00 - 22:00</li>
                    <li>Sabtu & Minggu (Libur)</li>
                </ul>
    </div>
  </div>


    


  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


    <!-- CSS -->
    <style type="text/css">
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap");

    body{
        background: #f1fbff;
        font-family: 'Poppins', sans-serif;
    }
    .section-padding{
        padding: 100px 0;
    }
    .carousel-item{
        height: 100vh;
        min-height: 300px;
    }
    .carousel-caption{
        bottom: 220px;
        z-index: 2;
    }
    .carousel-caption h5{
        font-size: 45px;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-top: 25px;
    }
    .carousel-caption p{
        width: 60%;
        margin: auto;
        font-size: 18px;
        line-height: 1.9;
    }
    .carousel-inner::before{
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background: rgba(0,0,0,0.7);
        z-index: 1;
    }
    .navbar-nav a{
        font-size: 15px;
        text-transform: uppercase;
        font-weight: 500;
    }
    .navbar-light .navbar-brand{
        color: #000;
        font-size: 25px;
        text-transform: uppercase;
        font-weight: 700;
        letter-spacing: 2;
    }
    .navbar-light .navbar-brand:focus,
    .navbar-light .navbar-brand:hover{
        color: #000;
    }
    .navbar-light .navbar-nav .navbar-link{
        color: #000;
    }
    .w-100{
        height: 100vh;
    }

    .logo {
        width: 50px;
        height: 50px;
        border-radius: 50%;
    }

    /*Responsive css*/

    @media only screen and (min-width: 768px) and (max-width: 991px){
        .carousel-caption{
            bottom: 370px;
        }
        .carousel-caption p{
            width: 100%;
        }
    }

    @media only screen and (max-width: 767px){
        .navbar-nav{
            text-align: center;
        }
        .carousel-caption{
            bottom: 125px;
        }
        .carousel-caption h5{
            font-size: 17px;
        }
        .carousel-caption a{
            padding: 10px 15px;
        }
        .carousel-caption p{
            width: 100%;
            line-height: 1.6;
            font-size: 17px;
        }
    }

    section {
        padding: 4rem 0 2rem;
    }

    ul {
        padding: 0;
        margin: 0;
        list-style: none;

    }
    </style>

  </body>
</html>