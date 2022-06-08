<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah GuestBook</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>

  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <div class="container">
      <h2 class="alert alert-danger text-center mt-3">INPUT GUESTBOOK</h2>
      <form action="PP_simpan_tambah.php" method="post">

        <!--membuat inputan posted dengan menggunakn tipe "date"-->
        <div class="form-group row mb-3">
          <label for="posted" class="col-sm-2 col-form-label">Posted</label>
          <div class="col-sm-10">
          <input type="date" name="posted" class="form-control">
        </div>
        </div> 
        <!--membuat inputan Nama-->
        <div class="form-group row mb-3">
          <label for="nama" class="col-sm-2 col-form-label">Nama</label>
          <div class="col-sm-10">
          <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap Anda">
        </div>
        </div>

        <!--membuat inputan email-->
        <div class="form-group row mb-3">
          <label for="email" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
          <input type="text" name="email" class="form-control" placeholder="Email">
        </div>
        </div>

        <!--membuat inputan address-->
        <div class="form-group row mb-3">
          <label for="address" class="col-sm-2 col-form-label">Address</label>
          <div class="col-sm-10">
          <input type="text" name="address" class="form-control" placeholder="Address">
        </div>
        </div>

        <!--membuat inputan city-->
        <div class="form-group row mb-3">
          <label for="city" class="col-sm-2 col-form-label">City</label>
          <div class="col-sm-10">
          <input type="text" name="city" class="form-control" placeholder="City">
        </div>
        </div>

        <!--membuat inputan message-->
        <div class="form-group row mb-3">
          <label for="message" class="col-sm-2 col-form-label">Message</label>
          <div class="col-sm-10">
          <input type="text" name="message" class="form-control" placeholder="Pesan">
        </div>
        </div>

        <!--membuat tombol tambah dan kembali-->
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <!--membuat tombol untuk kembali ke halaman beranda-->
          <a href="beranda.php" class="btn btn-secondary">Kembali</a>
          <!--membuat tombol untuk menambahkan ke databse-->
          <input type="submit" class="btn btn-primary" value="Tambah" name="tambah" />
        </div>
      </form>
    </div>
  </body>
</html>