<?php
//perintah untuk menghubungkan php dengan database
include 'koneksi.inc.php';

// mengecek apakah ada id di query
if( !isset($_GET['id']) ){
    header('Location: lihat_guestbook.php');
}

//jika ada id, maka ambil id dari query 
$id = $_GET['id'];

//ambil data dari database berdasarkan id
$mysqli = "SELECT * FROM guestbook WHERE id=$id";
$query = mysqli_query($conn, $mysqli);
$row = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GuestBook</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>

  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
     <div class="container">
     <h2 class="alert alert-danger text-center mt-3">EDIT GUESTBOOK</h2>
     <form action="edit_proses.php" method="POST">

        <!--membuat inputan Nama-->
        <div class="form-group row mb-3">
          <label for="nama" class="col-sm-2 col-form-label">ID</label>
          <div class="col-sm-10">
          <input type="text" name="id" class="form-control" placeholder="ID" value="<?php echo $row['id']?>">
        </div>
        </div>

        <!--membuat kolom inputan tanggal dengan menggunakn tipe "date"-->
        <div class="form-group row mb-3">
          <label for="tanggal" class="col-sm-2 col-form-label">Posted</label>
          <div class="col-sm-10">
          <input type="date" name="posted" class="form-control" value="<?php echo $row['posted'] ?>">
        </div>
        </div> 

        <!--membuat kolom inputan Nama-->
        <div class="form-group row mb-3">
          <label for="nama" class="col-sm-2 col-form-label">Nama</label>
          <div class="col-sm-10">
          <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap Anda" value="<?php echo $row['nama']?>">
        </div>
        </div>

        <!--membuat kolom inputan email-->
        <div class="form-group row mb-3">
          <label for="email" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
          <input type="text" name="email" class="form-control" placeholder="Email)" value="<?php echo $row['email'] ?>">
        </div>
        </div>

        <!--membuat kolom inputan address-->
        <div class="form-group row mb-3">
          <label for="address" class="col-sm-2 col-form-label">Address</label>
          <div class="col-sm-10">
          <input type="text" name="address" class="form-control" placeholder="Address" value="<?php echo $row['address'] ?>">
        </div>
        </div>

        <!--membuat kolom inputan city-->
        <div class="form-group row mb-3">
          <label for="city" class="col-sm-2 col-form-label">City</label>
          <div class="col-sm-10">
          <input type="text" name="city" class="form-control" placeholder="City" value="<?php echo $row['city'] ?>">
        </div>
        </div>

        <!--membuat kolom inputan message-->
        <div class="form-group row mb-3">
          <label for="message" class="col-sm-2 col-form-label">Message</label>
          <div class="col-sm-10">
          <input type="text" name="message" class="form-control" placeholder="Pesan" value="<?php echo $row['message'] ?>">
        </div>
        </div>

        <!--membuat tombol kembali dan menyimpan edit data-->
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <!--membuat tombol untuk kembali ke halaman beranda-->
            <a href="lihat_guestbook.php" class="btn btn-secondary">Kembali</a>
            <!--membuat tombol untuk menyimpan edit-->
            <input type="submit" class="btn btn-primary" value="Simpan" name="simpan" />
        </div>
    </div>
</form>
</body>
</html>
