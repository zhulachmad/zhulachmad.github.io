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
        <script type="text/javascript" src="js/bootbox.min.js"></script>
       
        </head> 
        <body>
            <div class="container">
            <center><h2>Informasi Penggunaa</h2></center

               <div class="table-responsive">
              <table class="table table-bordered table-striped table-hover table-info">
            <tr class="table-info">
                <th> No</th>
                <th> Nama </th>
                <th> Alamat</th>
                <th> Jenis Kelamin</th>   
                <th> Pilihan</th>  
              
          </tr>

        <?php
            include("koneksi.php");
         $queri="Select * From tb_data" ;  

          $hasil=MySQL_query ($queri);              
          $no=1;
          while ($data = mysql_fetch_array($hasil)){

          $id = $data['id_user'];
           echo "   
        <tr>
        <td>".$no++."</td>
        <td>".$data['Nama']."</td>
        <td>".$data['Alamat']."</td>
        <td>".$data['Jenis_Kelamin']."</td>
        <td>
           <a href='hapus.php?id=".$data['id_user']."' onclick='return confirm(\"Yakin ingin menghapus data?\")'><span class='glyphicon glyphicon-remove' aria-hidden='true' ></span></a>  

           <a href='editt.php?id=".$data['id_user']."' title='Edit ' class='btn btn-primary btn-sm'><span class='glyphicon glyphicon-pencil' aria-hidden='true' data-toogle='modal' data-target='#myModal'></span></a> 

 <a href='#myModal' class='btn btn-default btn-small' id='custId' data-toggle='modal' data-id=".$data['id'].">Detail</a>
           <button type='button' class='btn btn-info btn-sm'data-toggle='modal' data-target='#myModal'>
           <span ".$data['id_user']." class='glyphicon glyphicon-pencil' aria-hidden='true' data-toogle='modal' data-target='#myModal'></span>
           </button>

          <button type='button' class='btn btn-default' data-href='hapus.php?id=".$data['id_user']."' data-toggle='modal' data-target='#confirm-delete'>
          <a href='hapus.php?id=".$data['id_user']."' data-toggle='modal' data-target='#confirm-delete'></a>Hapus</button>
          
        </td>
           
        </tr> 
           " ;}
         ?>
         </table>
         </div>
         </div>

 <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Data User</h4>
                </div>
                <div class="modal-body">
                    <div class="fetched-data"></div>
                    <h3>Data user</h3>
                    <?php echo $baris['Nama']; ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                </div>
            </div>
        </div>
    </div>
    
     <script type="text/javascript">
           $(document).ready(function(){
        $('#myModal').on('show.bs.modal', function (e) {
            var rowid = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'post',
                url : 'detail.php',
                data :  'rowid='+ rowid,
                success : function(data){
                $('.fetched-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });
    });  
        
        </script>         
 </body>
 </html> 
