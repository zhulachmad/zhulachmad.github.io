<?php

 include('koneksi.php');
 
 if ($_REQUEST['delete']) {
  
  $pid = $_REQUEST['delete'];
  $query = "DELETE FROM tb_data WHERE id_user=:pid";
  $stmt = $DBcon->prepare( $query );
  $stmt->execute(array(':pid'=>$pid));
  
  if ($stmt) {
   echo "Product Deleted Successfully ...";
  }
  
 }
 ?>

 