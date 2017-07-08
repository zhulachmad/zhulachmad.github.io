
<?php
	  $query = "SELECT * FROM tb_data WHERE id_user=$id";
      $stmt = $DBcon->prepare( $query );
      $stmt->execute();
      $no=1;
      while ($row=$stmt->fetch(PDO::FETCH_ASSOC) ) {
      extract($row);
										             
  }
  ?>                    
}