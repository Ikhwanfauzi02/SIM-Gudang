<?php
session_start();
// Hancurkan semua variabel sesi
session_destroy();
// Redirect ke halaman login atau halaman lain yang sesuai
header("Location: index.php");
exit;
?>
