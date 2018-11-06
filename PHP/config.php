<?php

$dbhost = "localhost";
$dbname = "dblogin";
$dbuser = "root";
$dbpassword = "";

$koneksi = mysqli_connect ($dbhost,$dbuser,$dbpassword) or die ("koneksi ke server error!");
mysqli_select_db($dbname,$koneksi) or die ("koneksi ke database error!");

?>