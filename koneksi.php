<?php
$host_name 	= "localhost"; 
$user_name 	= "root";
$password 	= "";
$database 	= "mahasiswa";
 
$koneksi= mysqli_connect($host_name, $user_name) or die (mysqli_error());
if($koneksi){
	mysqli_select_db($koneksi,$database);
} else{
	echo mysqli_error();
	mysqli_close();
}
?>