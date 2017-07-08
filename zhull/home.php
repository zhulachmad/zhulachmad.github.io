<?php
include("library.php");
//include("m_edit.php");
$link =koneksi_db();
 ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <title>Bootstrap Example</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="css/bootstrap.css">
            <link rel="stylesheet" href="css/custom.css">
            <!-- <script type="text/javascript" src="js/jquery.min.js"></script>
            <script type="text/javascript" src="js/bootstrap.js"></script> -->
          <!--   //<script type="text/javascript" src="js/bootbox.min.js"></script> -->
          </head>

        <body style="background-image: url(img/bg.jpg);">

        
<nav class="navbar navbar-dark bg-primary">             
     <div class="container-fluid">
            <div class="navbar-header">
               <a class="navbar-brand" href="http://localhost/zhul/">zhulachmad.net</a>
            <ul class="nav navbar-nav">
              <li><a href="#" class="active">Beranda</a></li>
                <li><a href="http://localhost/zhul/home.php" class="active">Master Data</a></li>
                <li><a href="http://localhost/zhul/bio.php">Home</a></li>
                <li><a href="#">Pengaturan</a></li>
            </ul>
        </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                              
             <ul class="nav navbar-nav navbar-right">
                   <li><a href="http://localhost/zhul/Logout.php"><span class="glyphicon glyphiconuser">Logout</a></li>
                  
                   </ul>
             </div>
          </div>
       </nav>
              <br>  
              <br>   
             
           <br>
         <br>
         <div class="container">
            <center><h2>Informasi Pengguna</h2></center

               <div class="table-responsive">
              <table class="table table-bordered table-striped table-hover table-info">
            <tr class="table-info">
                <th> No</th>
                <th> Nama </th>
                <th> Alamat</th>
                <th> Jenis Kelamin</th>   
                <th> Pilihan</th>  

                 <?php                 
                       sukses();
                     
                  ?>
          </tr>

      <?php  
      $query = "SELECT * FROM tb_data";
      $stmt = $DBcon->prepare( $query );
      $stmt->execute();
      $no=1;
      while ($row=$stmt->fetch(PDO::FETCH_ASSOC) ) {
      extract($row);
        ?>          
        <tr>
        <td><?php echo $no++ ;?></td>
        <td><?php echo $Nama ;?></td>
        <td><?php echo $Alamat;?></td>
        <td><?php echo $Jenis_Kelamin ;?></td>
        <td>    
           <button type="button" class="delete_product" data-id="<?php echo $row['id_user']; ?>" href="javascript:void(0)">
           <span  class="glyphicon glyphicon-trash"></span>
           </button>    
                         
             &nbsp;&nbsp;&nbsp;

           <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">
           <span ".$data['id_user']." class="glyphicon glyphicon-pencil" aria-hidden="true" ></span>
           </button>        
                
        </td>
        </tr> 
        <?php
        }
      ?>
           </table>
          </div>  
        </div> 
        
       <?php
       footer2();
       ?>
          
<script>
      $(document).ready(function(){
        
        $('.delete_product').click(function(e){
          
          e.preventDefault();
          
          var pid = $(this).attr('data-id');
          var parent = $(this).parent("td").parent("tr");
          
          bootbox.dialog({
            message: "Yakin ingin menghapus diah ?",
            title: "<i class='glyphicon glyphicon-trash'></i> Hapus ?",
            buttons: {
            success: {
              label: "Batal",
              className: "btn-success",
              callback: function() {
               $('.bootbox').modal('hide');
              }
        },
        danger: {
          label: "Hapus",
          className: "btn-danger",
          callback: function() {           
                
            
            $.post('delete.php', { 'delete':pid })
            .done(function(response){
              bootbox.alert('Berhasil menghapus record..');
              parent.fadeOut('slow');
            })
            .fail(function(){
              bootbox.alert('Gagal menghapus record...');
            })
                        
          }
        }
        }
      });
      
      
    });
    
  });


      
</script>       
  </body>
</html>  