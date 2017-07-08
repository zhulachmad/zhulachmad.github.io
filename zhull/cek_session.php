<?php
include ("koneksi.php");
include ("library.php");

  $email=$_POST['Email'];
  $password=$_POST['Password'];

  $cek= new mysqli($DBcon,"SELECT * FROM tb_data WHERE Email ='$email' AND Password='$password' ");
  $numrows = mysqli_num_rows($cek);
     if ($numrows ==1){
			  session_start();
			    $_SESSION['email']=$email;
			    $_SESSION['pass'] =$password;
			    header("location:home.php");
}else{
		 echo "<script>alert('Akun tidak ditemukan')location.replace('loginn.php')</script>";

     }

  ?>
