 <?php
 
    $servername  = "localhost";
    $username = "root";
    $password = "root123";
    $dbname   = "data";
 
       $koneksi = new mysqli($servername, $username, $password, $dbname);
 
    // melakukan pengecekan koneksi
    if ($koneksi->connect_error) {
        die("Connection failed: " . $koneksi->connect_error);
    } 
 
   if(mysql_num_rows($show) == 0){
         
    
    }else{

        $data = mysql_fetch_assoc($show);
    
    }
            <table class="table">
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><?php echo $data['Nama']; ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><?php echo $data['Alamat']; ?></td>
                </tr>
                <tr>
                    <td>Jenis_Kelamin</td>
                    <td>:</td>
                    <td><?php echo $data['Jenis_Kelamin']; ?></td>
                </tr>
            </table>
        <?php 
 
        }
    }
    $koneksi->close();
?>