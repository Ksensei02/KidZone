<?php

$databaseHost = 'localhost';
$databaseName = '4015';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername,$databasePassword, $databaseName );
if(mysqli_connect_error()){
	echo "Gagal sambungkan pangkalan data mysql:".mysqli_connect_error();
}
else{
	echo "database connected";
}
?>
