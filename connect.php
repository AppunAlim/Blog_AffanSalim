<?php 

$serverName = 'localhost';
$userName = 'root';
$password = '';
$dbName = 'blog';

//panggil objek connect utk menjalankan integrasi dengan databsae
$connect = new mysqli($serverName,$userName,$password,$dbName);

if ($connect->connect_error) {
    die("Error".$connect->error);
}

?>