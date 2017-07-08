<?php
include("koneksi_db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Bootstrap Example</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"href="css/bootstrap.css">
<link rel="stylesheet" href="css/custom.css">
<link rel="stylesheet" href="css/hover.css">
<link rel="stylesheet" href="css/hover-min.css">
<link rel="stylesheet" href="css/demo-page.css">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>

</head>

<body style="background-image:url(img/cme.jpg);background-position:right; background-repeat:no-repeat;">
<nav class="navbar navbar-default navbar-fixed-top">              
     <div class="container-fluid">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toogle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toogle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://localhost/zhul/">zhulachmad.net</a>
        </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                              
             <ul class="nav navbar-nav navbar-right">
                   <li><a href="http://localhost/zhul/login.php"><span class="glyphicon glyphiconuser">Sign In</a></li>
             
                   </ul>
             </div>
          </div>
 </nav


   <br>  
<div class="container"> 
    <div class="bs-example">
    <center><h2>EDit Data</h2></center>

<?php 
    $id =$_GET['id_user'];
    $sql = mysql_query($koneksi_db, "SELECT * FROM tb_data WHERE id_user='$id'");
if (mysql_num_rows($sql) == 0){
    header("location:index.php");
}else{
    $row =mysql_fetch_assoc($sql);
}
if (isset($_POST['kirim'])){

    $email    =$_POST['Email'];
    $password =$_POST['Password'];
    $nama     =$_POST['Nama'];
    $notelp   =$_POST['Nomor_Telp'];
    $ttl      =$_POST['TTL'];
    $alamat   =$_POST['Alamat'];
    $kode     =$_POST['Kode_Pos'];
    $kelamin  =$_POST['Jenis_Kelamin'];

    $update =mysql_query($koneksi_db,"UPDATE tb_data SET Email='$email',Password='$password',Nama='$nama',Nomor_Telp='$notelp',TTL='$ttl',Alamat='$alamat',Kode_Pos='$kode',Jenis_Kelamin='$kelamin' WHERE id_user='$id'") or die (mysql_error());
    if($update){
        header("Location :edit.php?id_user=".$id."pesan=sukses");
    }else {
        echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data gagal disimpan, silahkan coba lagi.</div>';
    }
}
 if(isset($_GET['pesan']) == 'sukses'){
                echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data berhasil disimpan.</div>';
            }
          ?>


    <form class="form-horizontal" action="" enctype="multipart/form-data" method="post" name="postform">
        <div class="form-group">
            <label class="control-label col-xs-3" for="inputEmail">Email:</label>
            <div class="col-xs-9">
                <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="Email" value="<?php $data['Email']?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="inputPassword">Kata Sandi:</label>
            <div class="col-xs-9">
                <input type="password" class="form-control" id="inputPassword" placeholder="Masukan Kata Sandi" name="Password" value="<?php $data['Password']?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="Nama">Nama:</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="Nama" placeholder="Nama Anda" name="Nama" value="<?php echo $data ['Nama']?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="telp">No. Telp:</label>
            <div class="col-xs-9">
                <input type="tel" class="form-control" id="telp" placeholder="Nomor Telepon / Handphone" name="Nomor_Telp" value="<?php $data['Nomor_Telp']?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3">Tanggal Lahir</label>
            <div class="col-xs-3">
                <input type="date" class="form-control"name="TTL" value="<?php $data['TTL']?>">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-xs-3" for="Alamat">Alamat:</label>
            <div class="col-xs-9">
                <textarea rows="3" class="form-control" id="Alamat" placeholder="Masukan Alamat Lengkap" name="Alamat" value="<?php $data['Alamat']?>"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="KodePos">Kode Pos:</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="KodePos" placeholder="Kode Pos" name="Kode_Pos" value="<?php $data['Kode_Pos']?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3">Jenis Kelamin:</label>
            <div class="col-xs-2">
                <label class="radio-inline">
                    <input type="radio" name="Jenis_Kelamin" value="Laki-laki"> Laki-laki
                </label>
            </div>
            <div class="col-xs-2">
                <label class="radio-inline">
                    <input type="radio" name="Jenis_Kelamin"" value="Perempuan"> Perempuan
                </label>
            </div>
        </div>
               <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
                <input type="submit" class="btn btn-primary" value="Kirim" onclick="return confirm('Apakah yakin untuk mendaftar ?')" name="kirim">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
        </div>
    </form>

    </div>
   </div>

 <?php
}
 footer();
 ?>   
              
 </body>
 </html>  