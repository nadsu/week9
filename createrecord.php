<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database_9";

//membuat koneksi
$conn = mysqli_connect ($servername, $username, $password, $dbname);
//periksa koneksi
if (!$conn) {
    die("Connection failed: ".mysqli_connection_error());
}
$sql = "INSERT INTO formlogin (username, email, pass)
VALUES ('nadsu', 'nadillaanidew@gmail.com', 'aku12345')"; 

if (mysqli_query($conn, $sql)) {
    echo "Record created successfully";
}else {
    echo "Error creating database: ".$sql. "<br>". mysqli_error($conn);
}
mysqli_close($conn);
?>