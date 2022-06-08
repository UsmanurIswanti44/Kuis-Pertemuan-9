<?php 
//mulai sesi
session_start();
session_destroy();
//apabila memilih logout maka akan dialihkan ke halaman awal yaitu form login
header("Location: form_login.php");
 
?>