<?php
include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
   
  </head>
<body>

   <nav class="navbar navbar-expand-lg bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#"><img class="logo" src="./img/logo1.png" style="width: 50px; height: 50px; border-radius: 50%;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link" href="website.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Jadwal Ujian</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>


    <div class="container">
    <div class="jumbotron">
      <div class="card">
      <div class="d-block bg-white rounded shadow p-3">
      <div class="container col-md-10">
        <center>
          <table border="1" class="table table-striped table-bordered">
            <div class="card-header py-4 px-5 bg-light border-0">
            <h4 class="mb-0 fw-bold text-center">JADWAL UJIAN LISENSI</h4><br>
          </div>

            
            <tr align="center">
              <th scope="col">Jenis Ujian</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Waktu</th>
              <th scope="col">Opsi</th>
             </tr> 
            </thead>
            <tbody>

            <?php
      $sql = "SELECT * FROM regis_jadwal";

      $query = mysqli_query($kon, $sql);
      while($jadwal = mysqli_fetch_array($query)){
        echo "<tr align='center'>";
        echo "<td>".$jadwal['jenis_ujian']."</td>";
        echo "<td>".$jadwal['tanggal']."</td>";
        echo "<td>".$jadwal['waktu']."</td>";
        
        echo "<td>";
         echo "<a 
                href='registrasi.php?no=".$jadwal['no']."' class='btn btn-success'>Daftar Ujian
              </a>";                      
      echo "</td>";
      echo "</tr>";

      }

      ?>
          </tbody>
          </table>
        </center>
                
      </div>
    </div>
  </div>
</div>
</div>
        </div>
      </div>

    </div>


  <div class="slider-background" id="sliderbackground"></div>
<!--  <script type="./assets/app/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="./dist/js/index.js"></script> -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<style type="text/css">
  body{
    margin: 150px;
    background: url(./img/sky.jpg);
    background-size: cover;

  }
</style>


</body>
</html>