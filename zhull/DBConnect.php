<?php
public class DBConnect
  {
  public  function connect(){
    $host     = "localhost";
    $database = "data1";
    $user     = "root";
    $password = "root123";
    
    $db_link = new mysqli($host,$user,$password,$database);
    
    if($db_link->connect_errno > 0){
        die ('Koneksi ke database gagal[' .$db_link->connect_error.']');

}
   public  function viewData()
        {
      $query = "SELECT * FROM user";
      $resultset = mysql_query($query);
      return $resultset;
    }

   public  function DeleteData($id)
    {
      $query = "DELETE FROM user WHERE id_user=".$id;
      $resultset=mysql_query($query) ;
    }
  }
?>