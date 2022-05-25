<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database_9";

//membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);
//periksa koneksi
if (!$conn) {
    die("Connection failed: ".mysqli_connection_error());
}
$sql = "CREATE TABLE formlogin (
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
        username VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        pass VARCHAR(255) NOT NULL
        )";
if (mysqli_query($conn, $sql)) {
    echo "Tabel created successfully";
}else {
    echo "Error creating database: ".mysqli_error($conn);
}
mysqli_close($conn);
?>