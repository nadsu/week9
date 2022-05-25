<?php
$host="192.168.10.250";
$username="root";
$password="";
mysql_connect($host, $username, $password) or die("Koneksi gagal dibangun"); 
mysql_select_db("database_9") or die("Database tidak dapat dibuka");

?>