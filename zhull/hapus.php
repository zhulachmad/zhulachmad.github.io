<?php
include('library.php');

if(isset($_GET['id'])) {
	
	include('koneksi.php');	
    koneksi_db();
	$id = $_GET['id'];	
    $sql="SELECT id_user FROM tb_data WHERE id_user='$id'";
	$cek = mysqli_query($db_link,$sql);
	
	if(mysqli_num_rows($cek) == 0){

		echo '<script>window.history.back()</script>';
		}else{
		$hapus="DELETE FROM tb_data WHERE id_user='$id'";
		$del = mysqli_query($db_link,$hapus);		
	
		if($del){
			
		  echo 'Sukses menghapus data! ';
		  echo '<a href="home.php">Kembali</a>';				
		}else{
			
			echo 'Gagal menghapus data! ';		
			echo '<a href="home.php">Kembali</a>';		
		}		
	}
	
}else{	
	echo '<script>window.history.back()</script>';
	}
?>