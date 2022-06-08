<?php
//perintah untuk menghubungkan php dengan database
include 'koneksi.inc.php';
// mengecek apakah ada id di query
if( isset($_GET['id']) ){
    //jika ada id, maka ambil id dari query 
    $id = $_GET['id'];

    // buat query hapus
    $mysqli = "DELETE FROM guestbook WHERE id=$id";
    $query = mysqli_query($conn, $mysqli);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: lihat_guestbook.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}
?>