<?php 
//perintah untuk menghubungkan php dengan database
include 'koneksi.inc.php';
 
error_reporting(0);
 //memulai sesi
session_start();
 //jika sesi yang dimulai adalah username maka akan menampilkan halaman beranda.php
if (isset($_SESSION['username'])) {
    header("Location: beranda.php");
}
 //untuk mengecek tombol submit
if (isset($_POST['submit'])) {
    //mengambil data dan dicocokkan dengan database
    $username =$_POST['username'];
    $password = $_POST['password'];
    
    $mysqli = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $mysqli);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: beranda.php");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Log in</title>
</head>
<body>
    <div class="alert alert-warning" role="alert">
        <!--<?php echo $_SESSION['error']?>-->
    </div>

    <input name="tujuan" type="hidden" value="LOGIN" >
 
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
            <!--membuat kolom inputan username-->
            <div class="input-group">
                <input type="text" placeholder="Username" name="username" required>
            </div>
            <!--membuat kolom inputan password-->
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>
            <p class="login-register-text">Anda belum daftar? <a href="form_signup.php">Register</a></p>
        </form>
    </div>
</body>
</html>
