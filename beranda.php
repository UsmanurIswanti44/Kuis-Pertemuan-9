<?php 
//memulai sesi
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: form_login.php");
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Beranda</title>
</head>
<body>
    <div class="container-logout">
        <form action="" method="POST" class="login-email">
            <!--menampilkan tulisan seperti pada gambar-->
            <?php echo "<h1>Selamat Datang User " . $_SESSION['username'] ."!". "</h1>"; ?>
            <!--menampilkan hari, bulan, tahun, dan jam-->
            <?php echo date('D M y, H:i') . '<br>';?>
            
            <!--membuat menu input guestbook-->
            <div class="input-group">
            <a href="tambah_guestbook.php" class="btn">Input GuestBook</a>
            </div>
            
            <!--membuat menu lhat guestbook-->
            <div class="input-group">
            <a href="lihat_guestbook.php" class="btn">Lihat GuestBook</a>
            </div>
            
            <!--membuat menu logout-->
            <div class="input-group">
            <a href="logout.php" class="btn">Logout</a>
            </div>
        </form>
    </div>
</body>
</html>

