<?php
   
    function koneksi_db(){
      
            $host ="localhost";
            $database ="zhul"
            $user     ="root";
            $password="root123";

       $link =mysql_connect($host,$user,$password);
       mysql_select_db($database,$link);

           if(!$link)
           	   echo "Koneksi Ke Database Error".mysql_error();
           	return $link;
    }

 ?>