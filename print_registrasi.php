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

    <div class="container">
  		<center>
  			<table border="1" class="table table-striped table-bordered">
  				<thead>
  					<button onClick="window.print()" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"></button><br>
  					<tr>
  						<th>NO</th>
  						<th>NAMA LEMBAGA</th>
  						<th>KOTA ASAL</th>
  						<th>PENANGGUNG JAWAB</th>
  						<th>FILE</th>
  						<th>JENIS UJIAN</th>
  						<th>TANGGAL</th>
  						<th>WAKTU</th>	
  					</tr>
  				</thead>
  				<tbody>
  					<?php 
  					$sql = "SELECT * FROM jadwal";         
			        $query = mysqli_query($kon, $sql); 
			        while($regis = mysqli_fetch_array($query)){             
			            echo "<tr>"; 
			            echo "<td>".$regis['no']."</td>"; 
			            echo "<td>".$regis['nama_lembaga']."</td>";
			            echo "<td>".$regis['kota']."</td>"; 
			             echo "<td>".$regis['pj']."</td>"; 
			            echo "<td>".$regis['file']."</td>"; 
			            echo "<td>".$regis['jenis_ujian']."</td>"; 
			            echo "<td>".$regis['tanggal']."</td>"; 
			            echo "<td>".$regis['waktu']."</td>"; 
			          
			            // echo "<td>";
			            //  echo "<a href='inputjadwal.php?no=".$regis['no']."'>Input Jadwal</a>";                         
			                                 
			            // echo "</td>"; 
			 
			            echo "</tr>"; 
  					?>

  					<?php 
  				}
  				?>

  				</tbody>

  			</table>
  			<script type="text/javascript">window.print();</script>
  		</center>
  	</div>