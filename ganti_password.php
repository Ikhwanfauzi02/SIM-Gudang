<?php
//panggil koneksi dbase
include "koneksi.db.php";

//enkripsi inputan pass lama
$password_lama = md5($_POST['pass_lama']);
//panggil username
$username = $_POST['username'];

//uji jika password lama sesuai
$tampil = mysqli_query($koneksi, "SELECT * FROM tuser WHERE username = '$username' and password = '$password_lama'");
$data = mysqli_fetch_array($tampil);

//jika data diteemukan, maka passsword sesuai
if ($data) {
	//uji jika password baru dan konnfirmasi sama 
    $password_baru = $_POST['pass_baru'];
    $konfirmasi_password = $_POST['konfirmasi_pass'];

	//buat pengujiannya
    if ($password_baru == $konfirmasi_password) {
		//proses ganti password
		//enkripsi password baru
        // Menggunakan md5 untuk enkripsi password baru
        $pass_ok = md5($konfirmasi_password);
        $ubah = mysqli_query($koneksi, "UPDATE tuser SET password = '$pass_ok' WHERE id = '$data[id]'");
        
        if ($ubah) {
            echo "<script>alert('Password anda berhasil diubah, Silahkan logout untuk menguji password baru!');
                window.location.href='form_password.php'</script>";
        }
    } else {
        echo "<script>alert('Maaf, Password Baru & Konfirmasi Password yang anda inputkan tidak sama!');
            window.location.href='form_password.php'</script>";
    }
} else {
    echo "<script>alert('Maaf, password lama anda tidak sesuai!');
        window.location.href='form_password.php'</script>";
}
?>
