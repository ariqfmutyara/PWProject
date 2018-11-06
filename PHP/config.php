<?php

$dbhost = "localhost";
$dbname = "dblogin";
$dbuser = "root";
$dbpassword = "";

$koneksi = mysql_connect ($dbhost,$dbuser,$dbpassword) or die ("koneksi ke server error!");
mysql_select_db($dbname,$koneksi) or die ("koneksi ke database error!");

?>