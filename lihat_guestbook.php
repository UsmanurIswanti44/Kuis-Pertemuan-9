<?php 
 //perintah untuk menghubungkan php dengan database
include("koneksi.inc.php"); ?>

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
      <h2 class="alert alert-danger text-center mt-3">DAFTAR GUESTBOOK</h2>

        <table class="table">
          <thead>
            <tr>
              <th scope="col">Tanggal</th>
              <th scope="col">Nama</th>
              <th scope="col">Email</th>
              <th scope="col">Address</th>
              <th scope="col">City</th>
              <th scope="col">Message</th>
              <th scope="col">Action</th>
            </tr>
          </thead>

          <tbody>
            <?php
            //memanggil data yang telah dimasukkan pada database
            $mysqli = "SELECT * FROM guestbook";
            $query = mysqli_query($conn, $mysqli);

            while($row = mysqli_fetch_array($query)){
                echo "<tr>";
                echo "<td>".$row["posted"]."</td>";
                echo "<td>".$row["nama"]."</td>";
                echo "<td>".$row["email"]."</td>";
                echo "<td>".$row["address"]."</td>";
                echo "<td>".$row["city"]."</td>";
                echo "<td>".$row["message"]."</td>";
                echo "<td>";
                echo "<a href='edit.php?id=".$row['id']."' class= 'btn btn-success'>Edit</a>&ensp;";
                echo "<a href='hapus.php?id=".$row['id']."' class= 'btn btn-danger'>Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>

        <!--membuat tombol untuk kembali ke halaman beranda-->
        <a href="beranda.php" class="btn btn-primary">Kembali</a>
          
    </div>
</body>
</html>