<?php 
//perintah untuk menghubungkan php dengan database
include 'koneksi.inc.php';

error_reporting(0);
 //memulai sesi
session_start();
if (isset($_SESSION['username'])) {
    header("Location: beranda.php");
}
if (isset($_POST['submit'])) {
    //mengambil data dari form
    $nama = $_POST['nama'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $homepage=$_POST['homepage'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    //insert data ke database query
    $mysqli="INSERT INTO user (nama, address, email, homepage, username, password) VALUES ('$nama', '$address', '$email', '$homepage', '$username', '$password' )";
    $result=mysqli_query ($conn, $mysqli);

    //untuk mengecek apakah data yang diinputkan berhasil atau tida
    if($result){
        //apabila berhasil maka akan menampilkan bahwa registrasi berhasil
        echo "<script>alert('Selamat, registrasi berhasil!')</script>";
    }else{
        //jika tidak, maka akan menampilkan bahwa registrasi gagal
        echo "<script>alert('Maaf, registrasi gagal!')</script>".mysqli_error($conn);
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
    <title>Sign Up</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
            <!--membuat kolom inputan nama-->
            <div class="input-group">
                <input type="text" placeholder="Nama Lengkap" name="nama" value="" required>
            </div>
            <!--membuat kolom inputan address-->
            <div class="input-group">
                <input type="text" placeholder="Address" name="address" value="" required>
            </div>
            <!--membuat kolom inputan email-->
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" value="" required>
            </div>
            <!--membuat kolom inputan homepage-->
            <div class="input-group">
                <input type="text" placeholder="Homepage" name="homepage" value="" required>
            </div>
            <!--membuat kolom inputan username-->  
            <div class="input-group">
                <input type="text" placeholder="Username" name="username" value="" required>
            </div>
            <!--membuat kolom inputan password-->
            <div class="input-group">
                <input type="text" placeholder="Password" name="password" value="" required>
            </div>
    
            <div class="input-group">
                <button name="submit" class="btn">Register</button>
            </div>
            <p class="login-register-text">Anda sudah punya akun? <a href="form_login.php">Login </a></p>
        </form>
    </div>
</body>
</html>