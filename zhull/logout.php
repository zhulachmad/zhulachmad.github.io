<?php
 session_start(); //memulai session
 unset ($_SESSION['email']);
 unset ($_SESSION['pass']); 
 session_destroy(); // menghapus session
 header("location:loginn.php"); // mengambalikan ke form_login.php
 ?>