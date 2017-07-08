<?php
include("koneksi.php");
if(isset($_POST['simpan'])) 
{
	
		 $sql = "UPDATE tb_data SET Email = '" . $_POST["Email"] . "', Password = '" . $_POST["Password"] . "', Nama = '" .$_POST["Nama"]. "',  Nomor_Telp = '" . $_POST["Nomor_Telp"] . "' tgl_lahir = '" . $_POST["ttl"] . "',Alamat= '" . $_POST["alamat"] . "',Kode_Pos = '" . $_POST["kode"] . "',kelamin = '" . $_POST["kelamin"] . "' WHERE id_user='".$_SESSION["id_user"]."' ";		

         $DBcon->query($sql);
}