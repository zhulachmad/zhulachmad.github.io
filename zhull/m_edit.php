       
  <?php 
      $query = "SELECT * FROM tb_data";
      $stmt = $DBcon->prepare( $query );
      $stmt->execute();
      while ($row=$stmt->fetch(PDO::FETCH_ASSOC) ) {
      extract($row);
       
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
        <title>Bootstrap Example</title>
      
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet "href="css/bootstrap.css">
        <link rel="stylesheet" href="css/custom.css">
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <!-- <script type="text/javascript" src="js/bootbox.min.js"></script> -->
        <script type="text/javascript">               
                  $(document).ready(function() {
                  // Support for AJAX loaded modal window.
                  // Focuses on first input textbox after it loads the window.
                  $('[data-toggle="modal"]').click(function(e) {
                  e.preventDefault();
                  var url = $(this).attr('href');
                  if (url.indexOf('#') == 0) {
                  $(url).modal('open');
                  } else {
                  $.get(url, function(data) {
                  $('<div class="modal hide fade">' + data + '</div>').modal();
                  }).success(function() { $('input:text:visible:first').focus(); });
                  }
                  });
                  });
        </script>
        </head>
        <body>
         <!-- Modal -->
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- konten modal-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Data</h4>
        </div>
        <!-- body modal -->
           
       <div class="modal-body">
        <div class="container">
          <div class="row centered-form">
             <div class="col-md-6" style="background-color:transparent;padding-top:15px;padding-bottom:10px">
         <form class="form-horizontal" action="proses_edit.php" enctype="multipart/form-data" method="post" name="postform">
                 <input type="hidden" name="id" value="<?php echo $id; ?>">  
               <div class="form-group">
                    <label for="inputFName" class="control-label col-md-3 ">Email</label>
                        <div class="col-md-8">
                            <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="Email" value="<?php echo $row['Email'] ; ?>">
                        </div>
                </div>
                <div class="form-group">
                    <label for="inputLName" class="control-label col-md-3">Kata Sandi</label>
                        <div class="col-md-8">
                            <input type="password" class="form-control" id="inputPassword" placeholder="Masukan Kata Sandi" name="Password" value="<?php echo  $row['Password']; ?>">
                        </div>
                </div>

                 <div class="form-group">
                    <label for="inputLName" class="control-label col-md-3">Nama</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="inputPassword" placeholder="Masukan Nama" name="Nama" value="<?php echo $row['Nama']; ?>">
                        </div>
                </div>
                <div class="form-group">
                    <label for="inputLName" class="control-label col-md-3">Nomor Telpon</label>
                        <div class="col-md-8">
                            <input type="tel" class="form-control" id="telp" placeholder="Nomor Telepon / Handphone" name="Nomor_Telp" value="<?php echo $row['Nomor_Telp']; ?>">
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
                <textarea rows="3" class="form-control" id="Alamat" placeholder="Masukan Alamat Lengkap" name="Alamat" value="<?php echo $row['Alamat']; ?>"></textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-3" for="KodePos">Kode Pos</label>
            <div class="col-md-8">
                <input type="text" class="form-control" id="KodePos" placeholder="Kode Pos" name="Kode_Pos" value="<?php echo $row['Kode_Pos']; ?>">
            </div>
        </div>

               <div class = "form-group">
                    <label for = "inputGender" class="control-label col-md-3" >Jenis kelamin </label>
                    <div class="col-md-8">
                       <input type="radio" name="Jenis_Kelamin" value="Laki-laki"> Laki-laki
                        <input type="radio" name="Jenis_Kelamin"" value="Perempuan"> Perempuan
                    </div>
                </div>
                
               <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="simpan" onclick="return confirm('Apakah yakin Menyimpan Perubahan ?')" name="simpan">
                <input type="reset" class="btn btn-default" value="Reset">
                </div>
            </form>
        </div>
        </div>
    </div>

        </div>
        </div>
        <!-- footer modal -->
      
         </div>
    </div>
  </div>

  </body>
  </html>
<?php
}
?>