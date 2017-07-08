<?php
include("library.php"); 
include('koneksi.php');

   if(isset($_GET['id'])){		

            	$id = $_GET['id'];
            	$edit="SELECT * FROM tb_data WHERE id_user='$id'";
            	$show = mysqli_query($db_link,$edit);	
            	      if(mysqli_num_rows($show) == 0){
            		
            		echo '<script>window.history.back()</script>';
            	
            	}else{

            		$data = mysqli_fetch_assoc($show);
            	
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
      <script  type="text/javascript" src="js/jquery.min.js"></script>
      <script  type="text/javascript" src="js/bootstrap.js"></script>
</head>
 <body style="background-image: url(img/bg.jpg);">

<?php
navbar();
?>

<div class ="container">
     <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
    <br>
    <br>
           <h3>Edit Biodata</h3>
     <hr>
            </div>
        <div class="col-md-6" style="background-color:transparent;padding-top:15px;padding-bottom:10px">
         <form class="form-horizontal" action="proses_edit.php" enctype="multipart/form-data" method="post" name="postform">
         <input type="hidden" name="id" value="<?php echo $id; ?>">  
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
                       <input type="radio" name="Jenis_Kelamin" value="Laki-laki"> Laki-laki
                        <input type="radio" name="Jenis_Kelamin"" value="Perempuan"> Perempuan
                    </div>
                </div>
                
               <div class="form-group">
            <div class="col-xs-offset-3 col-md-8">
                <input type="submit" class="btn btn-primary" value="simpan" onclick="return confirm('Apakah yakin Menyimpan Perubahan ?')" name="simpan">
                <input type="reset" class="btn btn-default" value="Reset">
              </div>
            </div>
            </form>
        </div>
    </div>
</div><!-- Akhir dari FORM 1-->
<?php
footer2();
?>
</body>
</html>