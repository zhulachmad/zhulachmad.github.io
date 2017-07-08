<?php
include("koneksi.php"); 
  ?>


<?php

function sukses(){

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
        <script type="text/javascript" src="js/bootbox.min.js"></script>
        <script type="text/javascript">

        
                    

        </script>
         </head>
        <body>
       <input type="hidden" name="id" value="<?php echo $id; ?>">  
         <!-- Button trigger modal -->
        <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                       Konfirmasi 
                    </div>
                    <div class="modal-body">
                      Yakin ingin menghapus diaa?
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>   
                    <button onclick="btnYesDel('<?php echo $data['id_user']; ?>'')" id="#btn_YesDel" type="button" class="btn btn-default">Hapus</button>                     
                        <a data-href="hapus.php?id=".$data['id_user']" id="btn-ok" class="btn  btn-default" >Delete</a>
                    </div>
                </div>
            </div>
        </div>
            </body>
           </html>
<?php
 }           

function navbar(){
    ?>
     <nav class="navbar navbar-dark bg-inverse">            
     <div class="container-fluid">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toogle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toogle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>

            
            <a class="navbar-brand" href="http://localhost/zhul/">zhulachmad.net</a>
            <ul class="nav navbar-nav">
              <li><a href="#" class="active">Beranda</a></li>
              <li><a href="#">Pesan</a></li>
              <li><a href="#">Pengaturan</a></li>
            </ul>
        </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                              
             <ul class="nav navbar-nav navbar-right">
                   <li><a href="http://localhost/zhul/"><span class="glyphicon glyphiconuser">Logout</a></li>
                  
                   </ul>
             </div>
          </div>
 </nav



    <?php
}
function login(){
    ?>
          <div class="col-md-4"></div>
              <div class="col-md-4">
               <center><h4>Masukkan Username & Password Anda</h4></center

            <div class="table-responsive">
            <table class="table table-bordered table-stripped table-hover">
            <tbody>
            <tr>
               <td>
               <form action="http://localhost/akademik/auth/login" method="post" accept-charset="utf-8">                     
                 <p style="padding-top: 7px;padding-left: 4px">Username</p>
              </td>
           
               <div class="input-group">
                <td>
            <input type="text" name="username" required="" placeholder="Username ..." autofocus="" class="form-control">            
               </td>
            </tr>                    
                  </div>
                  <tr>
               <td> 
                 <p style="padding-top: 7px;padding-left: 4px">Password</p>         
              </td>

            <div class="input-group">
               <td>
               <input type="password" name="password" placeholder="Password" required="" class="form-control">
              </td>                     
                     </tr>                   
                   </div>

                   <tr>
                   <td></td>
                                 
                   <td colspan="2">     
                   <div class="col-md-3">                
                           <a class="hvr-outline-out" href="#" style="text-decoration: none">Login</a>
                           </div>
                     </td>
                   </tr>
                  </div>        
               </form>
          </div>  
             
        </table>   !-->   
      

    <?php
}
function login2(){
 ?>
     <div class="container">
           <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
        <br>
        <br>
        <br>
        <br>
             <form class="form-signin">

                <input type="text" class="form-control" placeholder="Email" required autofocus><br>      
                <input type="password" class="form-control" placeholder="Password" required>
                <br>
               <button type="button" class="btn btn-info btn-lg">Login</button>
                </label>
               </div>
    </div>
</div>
       
<?php
}
  function  footer2(){
     ?>
     <div id="wrap">
         </div>
      <footer class="footer">
     <center><p style="padding-top: 27px">www.zhulachmad.net</p></center>
</footer>
<?php
  }
    
    function koneksi_db(){
  $host     = "localhost";
    $user     = "root";
    $password = "root123";
    $database = "data";
    
    $db_link = new mysqli($host,$user,$password,$database);
    
    if($db_link->connect_errno > 0){
        die ('Koneksi ke database gagal[' .$db_link->connect_error.']');
    }
     }

?>
 