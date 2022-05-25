<?php
$servername = "localhost";//mendefinisikan variable servername
$username = "root";//mendefinisikan variable username
$password = "";//mendefinisikan variable password
$dbname = "database_9";//mendefinisikan variable dbname

//membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname) or die(mysqli_connect_error());

//menghubungkan file
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

//query mysql
$sql = "Select * from kontak order by nama;";

//kondisi koneksi dan query
$qry = mysqli_query($conn, $sql) or die ("proses cetak gagal");

//pembuatan tabel untuk menampilkan data
echo "<table width='75%' cellpadding='2' cellspacing='0' border='1'>
    <tr>
    <th>No</th>
    <th>Nama</th>
    <th>Jenis Kelamin</th>
    <th>Email</th>
    <th>Alamat</th>
    <th>Kota</th>
    <th>Pesan</th>
    ";
$no=1;//nomor dimulai dari satu
foreach ($qry as $hasil) { //menampilkan data
    echo "<tr>
        <td>$no</td> 
        <td>".$hasil['nama']."</td>
        <td>".$hasil['jkel']."</td>
        <td>".$hasil['email']."</td>
        <td>".$hasil['alamat']."</td>
        <td>".$hasil['kota']."</td>
        <td>".$hasil['pesan']."</td>
            </tr>";
    $no++; //nomor akan terus bertambah seiring perulangan
}
echo "</table>";

?>
<a href="index.php">Kembali</a>