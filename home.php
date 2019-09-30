<?php 
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('conn.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Halaman Biodata</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>Data Diri</h1>
  <p>Berikut data diri yang telah dimasukan di website ini</p> 
</div>
  
<div class="container">
<?php
    if ( isset( $_GET['id'] ) && !empty( $_GET['id'] ) ){
        $id = $_GET['id'];
        $query = "SELECT * FROM identitas id join isi_biodata isi on id.id_identitas=isi.id_identitas where id.id_identitas = $id";
        $result = mysqli_query(connection(),$query);
      while($data = mysqli_fetch_array($result)){  
?>
<a href="home.php" class="btn btn-primary mb-4">Kembali</a>
<div class="row">
        <div class="col-md-3">
        <img class="card-img-top" src="assets/img/anone.jpg" alt="Card image">
        </div>
        <div class="col-md-9">
        <h1><?php echo $data['nama'];  ?></h1>
        <h3><?php echo $data['profesi'];  ?></h3> <br>

        <h5>Deskripsi</h5>
        <p><?php echo $data['deskripsi'];  ?></p>

        <p>Tanggal Lahir  : <?php echo $data['tanggal_lahir'];  ?></p>
        <p>Berat / Tinggi : <?php echo $data['berat'];  ?> kg/ <?php echo $data['tinggi'];  ?> cm</p>
        <p>Alamat         : <?php echo $data['alamat'];  ?></p>
        </div>
</div>
<div class="row">
  <div class="col-md-6"> 
  <h5>Hobi</h5>
  <p><?php echo $data['hobi'];  ?></p>
  </div>
  <div class="col-md-6"> 
  <h5>Motto</h5>
  <p><?php echo $data['motto'];  ?></p>
  </div>
</div>
  
<div class="row">
  <div class="col-md-6"> 
  <h5>Pendidikan</h5>
  <p>SD : <?php echo $data['sd'];  ?></p>
  <p>SMP : <?php echo $data['smp'];  ?></p>
  <p>SMA : <?php echo $data['sma'];  ?></p>
  <p>Universitas : <?php echo $data['universitas'];  ?></p>
  </div>
  <div class="col-md-6"> 
  <h5>Sosial Media</h5>
  <p>Instagram : <?php echo $data['instagram'];  ?></p>
  <p>Linkedin : <?php echo $data['linkedin'];  ?></p>
  <p>GitHub : <?php echo $data['github'];  ?></p>
  <p>Email : <?php echo $data['email'];  ?></p>
  </div>
</div>

<?php }}else{ ?>
  <a href="index.php" class="btn btn-primary mb-4">Kembali Ke Form</a>
  <div class="row">
    <?php 
                  //proses menampilkan data dari database:
                  //siapkan query SQL
                  $query = "SELECT * FROM identitas id join isi_biodata isi where id.id_identitas=isi.id_identitas";
                  $result = mysqli_query(connection(),$query);
                while($data = mysqli_fetch_array($result)): ?>
    <div class="col-md-3">
    <div class="card">
    	<img class="card-img-top" src="assets/img/anone.jpg" alt="Card image">
    <div class="card-body">
      <h4 class="card-title"><?php echo $data['nama'];  ?></h4>
      <p class="card-text"><?php echo $data['profesi'];  ?></p>
      <a href="?id=<?php echo $data['id_identitas'];  ?>" class="btn btn-primary">Detail</a>
  	</div>
  </div></div>
  <?php endwhile ?>
<?php }?>
  </div>
</div>

</body>
</html>
