<?php
//perintah untuk menghubungkan php dengan database
include("koneksi.inc.php");

// mengecek apakah tombol simpan sudah diklik atau belum, kalau sudah diklik maka akan menjalankan perintah selanjutnya
if(isset($_POST['simpan'])){

    //ambil data dari form
    $id=$_REQUEST['id'];
    $posted=$_REQUEST['posted'];
    $nama=$_REQUEST['nama'];
    $email=$_REQUEST['email'];
    $address=$_REQUEST['address'];
    $city=$_REQUEST['city'];
    $message=$_REQUEST['message'];

    // buat query update
    $mysqli= "UPDATE guestbook SET posted='$posted', nama='$nama', email='$email', address='$address', city='$city', message='$message' WHERE id=$id";
    $query = mysqli_query($conn, $mysqli);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman lihat guestbook.php
        header('Location: lihat_guestbook.php');
    } else {
        // kalau gagal akan menampilkan pesan sebagai berikut
        die("Gagal menyimpan perubahan...".mysqli_error($conn));
    }
} else {
    die("Akses dilarang...");
}
?>