<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title><link rel="stylesheet" type="text/css" href="./assets/app/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./assets/icons/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="./dist/css/index.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<script src="./dist/js/jquery.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500&display=swap" rel="stylesheet">

	<table style="width: 100%">
	<tr>
		<th><img src="img/logo1.png" style="width: 80px"></th>
		<td style="width: 75%; text-align: center; padding-top: -70px">
			<b style="font-size: 17.5px">KEMENTERIAN PERHUBUNGAN</b><br>
			<b style="font-size: 18.5px">DIREKTORAT JENDERAL PERHUBUNGAN UDARA</b>
		</td>
	</tr>
    </table>

    <table style="width: 100%; margin-top: -8px">
	<tr>
		<td style="padding: 5px; width: 26%"></td>
		<td style="font-size:15px; padding: 5px; border-right: 1px solid #000; width: 28%">
			Jalan Merdeka Barat No.8<br>Jakarta<br>Kotak Pos No. 1389<br>Jakarta 10013
		</td>
		<td style="font-size:12px; padding: 5px; padding-top: -15px; border-right: 1px solid #000; width: 28%">
			Telpon : (021) 3505006 - 3505550 <br> (021) 3506451 - 3506554
		</td>
		<td style="font-size:12px; padding: 2px; padding-top: -15px; width: 20%">
			Fax : (021) 3507569
		</td>
	</tr>
    </table>

    <div class="d-block bg-white rounded shadow p-3">
      <div class="container col-md-10">
        <center>
          <table border="1" class="table table-bordered">
            <thead>
              <div class="card-header py-4 px-5 bg-light border-0">
            <h4 class="mb-0 fw-bold text-center">JADWAL JADWAL UJIAN LISENSI ACO</h4>
          </div>
            <tr align="center">
              <th scope="col">NO</th>
              <th scope="col">Nama Lembaga</th>
              <th scope="col">Kota</th>
              <th scope="col">Penanggung Jawab</th>
              <th scope="col">File</th>
              <th scope="col">Jenis Ujian</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Waktu</th>
             </tr> 
            </thead>
            <tbody>

            <?php
      $sql = "SELECT * FROM jadwal WHERE jenis_ujian='ATC'";

      $query = mysqli_query($kon, $sql);
      while($jadwal = mysqli_fetch_array($query)){
        echo "<tr>";
        echo "<td>".$jadwal['no']."</td>";
        echo "<td>".$jadwal['nama_lembaga']."</td>";
        echo "<td>".$jadwal['kota']."</td>";
        echo "<td>".$jadwal['pj']."</td>";
        echo "<td>".$jadwal['file']."</td>";
        echo "<td>".$jadwal['jenis_ujian']."</td>";
        echo "<td>".$jadwal['tanggal']."</td>";
        echo "<td>".$jadwal['waktu']."</td>";
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
    <script type="text/javascript">window.print();</script>
    </html>
