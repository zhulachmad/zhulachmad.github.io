<?php
include("library.php");
$link =koneksi_db();
$delete =MySQL_query($koneksi_db, "DELETE FROM tb_data WHERE id_user='$id'");
?>