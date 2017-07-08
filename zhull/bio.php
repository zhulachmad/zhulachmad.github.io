 <?php
 include("koneksi.php");
 include("library.php");
$link =koneksi_db();
 $id=$_GET['id'];
 if(isset($_GET['id'])){

         $sql=new mysqli($link,"SELECT * FROM tb_data WHERE id_user='$id'");
         if (mysql_num_rows($sql)==0){

                echo '<script>window.history.back()</script>';
    
        }else{

             $data = mysql_fetch_assoc($show);
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
 <body>
        
<nav class="navbar navbar-dark bg-primary">             
     <div class="container-fluid">
            <div class="navbar-header">
               <a class="navbar-brand" href="http://localhost/zhul/">zhulachmad.net</a>
            <ul class="nav navbar-nav">
              <li><a href="#" class="active">Beranda</a></li>
              <li><a href="#">uu</a></li>
              <li><a href="#">Pengaturan</a></li>
            </ul>
        </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                              
             <ul class="nav navbar-nav navbar-right">
                   <li><a href="http://localhost/zhul/"><span class="glyphicon glyphiconuser">Logout</a></li>
                  
                   </ul>
             </div>
          </div>
       </nav>

 <div class="container">
  <input type="hidden" name="id" value="<?php echo $id; ?>">  
        <section style="padding-bottom: 50px; padding-top: 50px;">
            <div class="row">
                <div class="col-md-4">
                    <img src="img/default.jpg" class="img-rounded img-responsive" style="width: 250px;height: 250px;">
                    <br>
                    <br>
                    <label>Registered Username</label>
                    <input type="text" class="form-control"  value="<?php echo $data['Nama'];?>">
                    <label>Registered Name</label>
                    <input type="text" class="form-control" placeholder="Jhon Deo">
                    <label>Registered Email</label>
                    <input type="text" class="form-control" placeholder="jnondeao@gmail.com">
                    <br>
                    <a href="http://designbootstrap.com/livedemos/2015/01/11/user-profile/index.html#" class="btn btn-success">Update Details</a>
                    <br><br>
                    <?php
                     session_start();
                    echo "Data id".$_SESSION[id_user];
                     echo "Data id".$_SESSION[nama];
                    ?>
                </div>
                <div class="col-md-8">
                    <div class="alert alert-info">
                        <h2>User Bio : </h2>
                        <h4>Bootstrap user profile template </h4>
                        <p>
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                             3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. 
                        </p>
                    </div>
                     <div class="form-group col-md-8">
                        <h3>Change YOur Password</h3>
                        <br>
                        <label>Enter Old Password</label>
                        <input type="password" class="form-control">
                        <label>Enter New Password</label>
                        <input type="password" class="form-control">
                        <label>Confirm New Password</label>
                        <input type="password" class="form-control">
                        <br>
                        <a href="http://designbootstrap.com/livedemos/2015/01/11/user-profile/index.html#" class="btn btn-warning">Change Password</a>
                    </div>
                </div>
            </div>
            <!-- ROW END -->


        </section>
        <!-- SECTION END -->
           
    </div>
    <!-- CONATINER END -->

            <?php
            footer2();
             ?>
    </body>
    </html>
