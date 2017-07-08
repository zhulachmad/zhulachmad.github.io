<?php
session_start();
session_destroy();
include("library.php");
$link =koneksi_db();
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

<body style="background-image: url(img/bg.jphg);">  
   
    <nav class="navbar navbar-dark bg-primary">             
         <div class="container-fluid">
              <div class="navbar-header">
                 <a class="navbar-brand" href="http://localhost/zhul/">zhulachmad.net</a>
              <ul class="nav navbar-nav">
              </ul>
          </div>

              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                
               <ul class="nav navbar-nav navbar-right">
                     <li><a href="http://localhost/zhul/loginn.php"><span class="glyphicon glyphiconuser">Login</a></li>
                    
                     </ul>
               </div>
          </div>
       </nav

<div class ="container" style="background-image:url(img/bg.jpg)">
     <div class="row centered-form">
              <div class="col-md-6" style="background-color:transparent;padding-top:15px;padding-bottom:10px">
         <form class="form-horizontal" action="simpan_akun.php" enctype="multipart/form-data" method="post" name="postform">
          <input type="text" class="hide"  name="id">
                <div class="form-group">
                    <label for="inputFName" class="control-label col-md-3 ">Email</label>
                        <div class="col-md-8">
                            <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="Email">
                        </div>
                </div>
                <div class="form-group">
                    <label for="inputLName" class="control-label col-md-3">Kata Sandi</label>
                        <div class="col-md-8">
                            <input type="password" class="form-control" id="inputPassword" placeholder="Masukan Kata Sandi" name="Password">
                        </div>
                </div>

                 <div class="form-group">
                    <label for="inputLName" class="control-label col-md-3">Nama</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="inputPassword" placeholder="Masukan Nama" name="Nama">
                        </div>
                </div>
                <div class="form-group">
                    <label for="inputLName" class="control-label col-md-3">Nomor Telpon</label>
                        <div class="col-md-8">
                            <input type="tel" class="form-control" id="telp" placeholder="Nomor Telepon / Handphone" name="Nomor_Telp">
                        </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3">Tanggal Lahir</label>
                       <div class="col-md-8">
                          <input type="date" class="form-control"name="TTL">
                      </div>
                </div>

                  <div class="form-group">
            <label class="control-label col-md-3" for="Alamat">Alamat</label>
            <div class="col-md-8">
                <textarea rows="3" class="form-control" id="Alamat" placeholder="Masukan Alamat Lengkap" name="Alamat"></textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-3" for="KodePos">Kode Pos</label>
            <div class="col-md-8">
                <input type="text" class="form-control" id="KodePos" placeholder="Kode Pos" name="Kode_Pos">
            </div>
        </div>

               <div class = "form-group">
                    <label for = "inputGender" class="control-label col-md-3" >Jenis kelamin </label>
                    <div class="col-md-8">
                       <input type="radio" name="Jenis_Kelamin" value="Laki-laki"> Laki-laki
                        <input type="radio" name="Jenis_Kelamin"" value="Perempuan"> Perempuan
                    </div>
                </div>
                
               <div class="form-group">
            <div class="col-xs-offset-3 col-md-8">
                <input type="submit" class="btn btn-primary" value="Kirim" onclick="return confirm('Apakah yakin untuk mendaftar ?')" name="kirim">
                <input type="reset" class="btn btn-default" value="Reset">
              </div>
            </div>
            </form>
        </div>
    </div>
     
</div><!-- Akhir dari FORM 1-->  
</div>

    <?php
 footer2();
 ?>

 </body>
 </html>  