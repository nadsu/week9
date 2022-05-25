<?php 
 
 $servername = "localhost";//mendefinisikan variable servername
 $username = "root";//mendefinisikan variable username
 $password = "";//mendefinisikan variable password
 $dbname = "database_9";//mendefinisikan variable dbname
 
 //membuat koneksi
 $conn = new mysqli($servername, $username, $password, $dbname) or die(mysqli_connect_error());
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: cetak.php"); //menghubungkan file
}
 
if (isset($_POST['submit'])) {//setelah dilakukan submit
    $email = $_POST['email']; //definisi email
    $pass = md5($_POST['pass']); //definisi pass
 
    $sql = "SELECT * FROM formlogin WHERE email='$email' AND pass='$pass'"; //query mysql
    $result = mysqli_query($conn, $sql); //variabel result
    if ($result->num_rows > 0) {//kalau berhasil
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: cetak.php");//halaman akan dialihkan ke cetak.php 
    } else {//apabila username atau password error
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>"; //keterangan password salah
    }
}
 
?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" type="text/css" href="style.css">
 
    <title>Login</title>
</head>
<body>
    <div class="alert alert-warning" role="alert">
        <?php echo $_SESSION['error']?>
    </div>
 
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="pass" value="<?php echo $_POST['pass']; ?>" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>
        </form>
    </div>
</body>
</html>