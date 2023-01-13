<?php 
 
include("config.php");  
 
    $no = $_GET ['no']; 
    $sql = "DELETE FROM regis_jadwal WHERE no=$no";     
    $query = mysqli_query($kon,$sql);

 
    if($query){       
      
    	header('Location: jadwal.php');     
    } else {         
    	die("gagal menghapus...");     
    } 
 
 
?> 