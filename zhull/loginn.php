
<?php

  include("koneksi.php");
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
      <title>Bootstrap Example</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/custom.css">
      <link rel="stylesheet" href="css/styles.css">
      <script  type="text/javascript" src="js/jquery.min.js"></script>
      <script  type="text/javascript" src="js/bootstrap.js"></script>
</head>
 <body style="background-image: url(img/bg.jpg);">


 <nav class="navbar navbar-dark bg-primary">             
     <div class="container-fluid">
            <div class="navbar-header">
               <a class="navbar-brand" href="http://localhost/zhul/">zhulachmad.net</a>
            <ul class="nav navbar-nav">
              
            </ul>
        </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                              
             <ul class="nav navbar-nav navbar-right">
                   <li><a href="http://localhost/zhul/"><span class="glyphicon glyphiconuser"></a></li>
                  
                   </ul>
             </div>
          </div>
       </nav


<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">

            <div class="account-wall">
                <img class="profile-img" src="img/default.jpg"
                    alt="">
                <form class="form-signin" method="post" action="cek_session.php">
                <input type="text" class="form-control" placeholder="Email" required autofocus name="Email">
                <br>
                <input type="password" class="form-control" placeholder="Password" name="Password" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Sign in</button>
                <label class="checkbox pull-left">
                    <input type="checkbox" value="remember-me">
                    Remember me
                <a href="#" class="new-account"></a><span class="clearfix"></span>
                </form>
            </div>
            <a href="#" class="text-center new-account"></a>
        </div>
    </div>
</div>
<?php
footer2();
?>
</body>
</html>