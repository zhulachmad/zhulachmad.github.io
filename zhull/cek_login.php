<?php
include "koneksi.php";
include "library.php";
koneksi_db();

if (isset($_POST['submit'])) {
  $email=$_POST['Email'];
  $password=$_POST['Password'];

 if (!empty($email) && !empty($password)) { //perintah untuk check apakah input user dan password sudah terisi atau belum
 $login = mysqli_query($db_link, "SELECT * FROM tb_user WHERE Email = '$email' AND Password= '$password'");
 $checklogin = mysqli_num_rows($login);
 if ($checklogin != 0) { // check apabila ditemukan SSuser dan password yang sesuai dengan inputan yang dikirim maka akan mengeksekuis code berikutnya
 echo "Silakan isi username dan password";
 }else {
  echo "Silakan isi username dan password";
 }
}
}
?>