<?php 
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('conn.php'); 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/grid/960_16_col.css">
    <link rel="stylesheet" href="assets/css/grid/text.css" />
    <link rel="stylesheet" href="assets/css/grid/reset.css" />
    <title>Personal Website</title>
    <style>     
  button[href] {
    width: 100%;
    background-color: #d6d5c9;
    color: black;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-family: 'Century Gothic',sans-serif;
  }
  </style>
</head>
<body style="background-image: url(assets/img/bg2.jpg);">

    <div class="container_16">
    
    <div class="grid_2">   
    <form action="index.php" method="post">
    <button href="index.php">KEMBALI</button>
    </form>
    </div>
                  
        <div class="grid_15"> 
        </div>

        <div class="grid_7">
                  <?php 
                  //proses menampilkan data dari database:
                  //siapkan query SQL
                  $query = "SELECT * FROM identitas";
                  $result = mysqli_query(connection(),$query);
                 ?>
                 <?php while($data = mysqli_fetch_array($result)): ?>
                <img src="assets/img/anone.jpg" alt="" class="kotak-tengah-img">
                <h2>
                    <?php echo $data['nama'];  ?>
                    </h2>
                <h3>
                    Berat : <?php echo $data['berat'];  ?>
                    </h3>
                <h3>
                    Tinggi : <?php echo $data['tinggi'];  ?>
                    </h3>
                <h3>
                    Alamat : <?php echo $data['alamat'];  ?>
                    </h3>

                <?php endwhile ?>
                </div>
        
        <div class="grid_9">
            <div>
            
            </div>
        </div>

    
        <div class="grid_8" style="background:#d6d5c9; height: 50px; font-size:30px; text-align: center; margin-top: 4%;">
        <?php 
                  //proses menampilkan data dari database:
                  //siapkan query SQL
                  $query = "SELECT * FROM isi_biodata";
                  $result = mysqli_query(connection(),$query);
                 ?>
                 <?php while($data = mysqli_fetch_array($result)): ?>
        <h2>
            DESKRIPSI DIRI
        </h2>            
        </div>
        <div class="grid_8">
            <p>
            <?php echo $data['deskripsi'];  ?>
            </p>
    </div>

    <div class="clear"></div>

    <div class="grid_7" style="background:#d6d5c9; height: 45px; font-size:30px; text-align: center; margin-top: 38px; padding-bottom: 3px;">
        <h2>
            KONTAK
        </h2>
        <div class="grid_8">
            <p>    
            <?php echo $data['instagram'];  ?>             
            </p>
            <p> 
            <?php echo $data['linkedin'];  ?>
                </p>
            <p>    
            <?php echo $data['github'];  ?>
                </p>
            <p>
            <?php echo $data['email'];  ?>
                </p> 
        </div>
    </div>

    <div class="grid_8" style="background:#d6d5c9; height: 50px; font-size:30px; text-align: center; margin-top: 4%;">
        <h2>
            PENDIDIKAN
        </h2>
        <div class="grid_8">
            <p>    
                <?php echo $data['sd'];  ?>             
            </p>
            <p> 
            <?php echo $data['smp'];  ?>
                </p>
            <p>    
            <?php echo $data['sma'];  ?>
                </p>
            <p>
            <?php echo $data['universitas'];  ?>
                </p> 
        </div>
    </div>
    
    <div class="grid_8" style="background:#d6d5c9; height: 50px; font-size:30px; text-align: center; margin-top: 3%;">
            <h2>
                HOBI
            </h2>
            <div class="grid_7-hobby">
                    <p>             
                        <?php echo $data['hobi'];  ?>
                    </p>
                </div>
        </div>

        
    <div class="grid_8" style="background:#d6d5c9; height: 50px; font-size:30px; text-align: center; margin-top: 11%;">
            <h2>
                MOTTO HIDUP
            </h2> 
        <div class="grid_8-seminar">
                <p>   
                <?php echo $data['motto'];  ?>           
                    </p>
            </div>
    </div>
    <?php endwhile ?>

</body>
</html>