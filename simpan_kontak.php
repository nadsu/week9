<?php
include "admin/koneksi.php";
$vnama=$_POST['nama'];
$vjkel=$_POST['jkel'];
$vemail=$_POST['email'];
$valamat=$_POST['alamat'];
$vkota=$_POST['kota'];
$vpesan=$_POST['pesan'];

$sql="insert kontak set 
        nama='$vnama',
        jkel='$vjkel',
        email='$vemail',
        alamat='$valamat',
        kota='$vkota',
        pesan='$vpesan'";

mysqli_query($conn, $sql) or die("Proses simpan ke database gagal");
mysqli_close($conn);
header("location:kontak.html");

?>

