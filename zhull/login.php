<?php
session_start();
include("library.php");

$link =koneksi_db();
?>
<?php

      if (isset($_GET['aksi'])=='delete' ){
        $id=$_GET['id_user'];
        $cek= MySQL_query($koneksi_db, "SELECT * FROM tb_data WHERE id_user='$id'");
        if(mysql_num_rows($cek)==0){
          echo '<div class="alert alert-info alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data tidak ditemukan.</div>';
        }else{
           $delete =MySQL_query($koneksi_db, "DELETE FROM tb_data WHERE id_user='$id'");
               if($delete){
                   echo '<div class="alert alert-info alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data Berhasil Dihapus.</div>';
        }else{
             echo '<div class="alert alert-info alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data Gagal Dihapus.</div>';
        }
      }
   }
               ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet"href="css/bootstrap.css">
        <link rel="stylesheet" href="css/custom.css">
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>

        </head>
<body style="background-image: url(img/bg.jpg);">        
    <nav class="navbar navbar-default navbar-static-top">             
         <div class="container-fluid">
              <div class="navbar-header">
                 <a class="navbar-brand" href="http://localhost/zhul/">zhulachmad.net</a>
              <ul class="nav navbar-nav">
                <li><a href="#" class="active"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
              </ul>
          </div>

              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                
               <ul class="nav navbar-nav navbar-right">
                     <li><a href="http://localhost/zhul/login.php"><span class="glyphicon glyphiconuser"></a></li>
                    
                     </ul>
               </div>
          </div>
       </nav

<div class="container">
  <?php
  login2();
  footer2();
 ?>          
</div> 

 </body>
 </html>  