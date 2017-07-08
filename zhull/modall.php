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
<script  type="text/javascript" src="js/jquery.min.js"></script>
<script  type="text/javascript" src="js/bootstrap.js"></script>

</head>
<body>
	<div class="container">
     <!-- Modal -->
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- konten modal-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Bagian heading modal</h4>
        </div>
        <!-- body modal -->
        <div class="modal-body">
          <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
    <br>
    <br>
           <h3>Edit Biodata</h3>
     <hr>
            </div>
        <div class="col-md-6" style="background-color:transparent;padding-top:15px;padding-bottom:10px">
         <form class="form-horizontal" action="proses_edit.php" enctype="multipart/form-data" method="post" name="postform">
                <div class="form-group">
                    <label for="inputFName" class="control-label col-md-3 ">Email</label>
                        <div class="col-md-8">
                            <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="Email" value="<?php echo $data['Email']; ?>">
                        </div>
                </div>
                <div class="form-group">
                    <label for="inputLName" class="control-label col-md-3">Kata Sandi</label>
                        <div class="col-md-8">
                            <input type="password" class="form-control" id="inputPassword" placeholder="Masukan Kata Sandi" name="Password" value="<?php echo $data['Password']; ?>">
                        </div>
                </div>

                 <div class="form-group">
                    <label for="inputLName" class="control-label col-md-3">Nama</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="inputPassword" placeholder="Masukan Nama" name="Nama" value="<?php echo $data['Nama']; ?>">
                        </div>
                </div>
                <div class="form-group">
                    <label for="inputLName" class="control-label col-md-3">Nomor Telpon</label>
                        <div class="col-md-8">
                            <input type="tel" class="form-control" id="telp" placeholder="Nomor Telepon / Handphone" name="Nomor_Telp" value="<?php echo $data['Nomor_Telp']; ?>">
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
                <textarea rows="3" class="form-control" id="Alamat" placeholder="Masukan Alamat Lengkap" name="Alamat" value="<?php echo $data['Alamat']; ?>"></textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-3" for="KodePos">Kode Pos</label>
            <div class="col-md-8">
                <input type="text" class="form-control" id="KodePos" placeholder="Kode Pos" name="Kode_Pos" value="<?php echo $data['Kode_Pos']; ?>">
            </div>
        </div>

               <div class = "form-group">
                    <label for = "inputGender" class="control-label col-md-3" >Jenis kelamin </label>
                    <div class="col-md-8">
                       <input type="radio" name="Jenis_Kelamin" value="Laki-laki"> Laki-lakii
                        <input type="radio" name="Jenis_Kelamin"" value="Perempuan"> Perempuan
                    </div>
                </div>
                
               <div class="form-group">
            <div class="col-xs-offset-3 col-md-8">
                <input type="submit" class="btn btn-primary" value="Simpan" onclick="return confirm('Apakah yakin Menyimpan Perubahan ?')" name="simpan">
                <input type="reset" class="btn btn-default" value="Reset">
              </div>
            </div>
            </form>
        </div>
    </div>
        </div>
        <!-- footer modal -->
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup Modal</button>
        </div>
      </div>
    </div>
  </div>
  </div> 

</body>
</html>