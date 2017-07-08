<?php
include("library.php");
include("koneksi.php"); 

// memanggil fungsi library
if(isset($_POST['kirim'])) {
    
//menampung variabel yg di POST dari form registrasi
    $email     =$_POST['Email'];
    $password  =$_POST['Password'];
    $nama      =$_POST['Nama'];
    $notelp    =$_POST['Nomor_Telp'];
    $ttl       =$_POST['TTL'];
    $alamat    =$_POST['Alamat'];
    $kode      =$_POST['Kode_Pos'];
    $kelamin   =$_POST['Jenis_Kelamin'];
    $id        =$_POST['id'];
   
       // Validasi jika isi registrasi kosong

    if (empty($_POST['Email'])) die ("<script>alert('Anda Belum Mengisi Email');window.location='jaavascript:history.go(-1)';</script>");
    if (empty($_POST['Password'])) die ("<script>alert('Anda Belum Mengisi Password');window.location='jaavascript:history.go(-1)';</script>");
    if (empty($_POST['Nama'])) die ("<script>alert('Anda Belum Mengisi Nama');window.location='jaavascript:history.go(-1)';</script>");
    if (empty($_POST['Nomor_Telp'])) die ("<script>alert('Anda Belum Mengisi Nomor Telpon');window.location='jaavascript:history.go(-1)';</script>");
    if (empty($_POST['TTL'])) die ("<script>alert('Anda Belum Mengisi Tangal Lahir');window.location='jaavascript:history.go(-1)';</script>");
    if (empty($_POST['Alamat'])) die ("<script>alert('Anda Belum Mengisi Alamat');window.location='jaavascript:history.go(-1)';</script>");
    if (empty($_POST['Kode_Pos'])) die("script>alert('Anda Belum Mengisi
        Kode Pos');window.location='jaavascript:history.go(-1)';</script>");
     if (empty($_POST['Jenis_Kelamin'])) die("script>alert('Anda Belum Mengisi
        Jenis Kelamin');window.location='jaavascript:history.go(-1)';</script>");

 //insert data form ke database

 $simpan="INSERT INTO tb_data(Email,Password,Nama,Nomor_Telp,TTL,Alamat,Kode_Pos,Jenis_Kelamin)values('$email','$password','$nama','$notelp','$ttl','$alamat','$kode','$kelamin')";
 $exe=mysqli_query($db_link, $simpan); //eksekusi query insert ke database
 
//proses setelah eksekusi
if ($exe){
    echo "<script>location.replace('bio.php')</script>";
}else{
    echo "<script>alert('daftar Gagal')
    location.replace('index.php')</script>";
}
 
}
else// else isset
{
unset($_POST['kirim']);
}
?>
