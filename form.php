<?php 
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('conn.php'); 

  $status = '';
  //melakukan pengecekan apakah ada form yang dipost
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $isi_id = $_POST['isi_id'];
      // $namal = $_POST['namal'];
      $profesi = $_POST['profesi'];
      $deskripsi = $_POST['desc'];
      $hobi = $_POST['hobi'];
      $motto = $_POST['motto'];
      $id_identitas = $_POST['sel_nama'];
      $sd = $_POST['sd'];
      $smp = $_POST['smp'];
      $sma = $_POST['sma'];
      $universitas = $_POST['universitas'];
      $instagram = $_POST['sosmed1'];
      $linkedin = $_POST['sosmed2'];
      $github = $_POST['sosmed3'];
      $email = $_POST['emaill'];
      //query SQL
      $query = "INSERT INTO isi_biodata (isi_id, id_identitas, profesi, deskripsi,	hobi,	motto, sd, smp, sma, universitas, instagram, linkedin, github, email) VALUES('$isi_id', '$id_identitas', '$profesi', '$deskripsi',	'$hobi', '$motto', '$sd', '$smp', '$sma', '$universitas', '$instagram', '$linkedin', '$github', '$email')"; 

      //eksekusi query
      $result = mysqli_query(connection(),$query);
      if ($result) {
        $status = 'ok';
      }
      else{
        $status = 'err';
      }
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Halaman Form</title>
    <!-- load css boostrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/dashboard.css" rel="stylesheet">
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

  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Pemrograman Web</a>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column" style="margin-top:100px;">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo "index.php"; ?>">Data</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo "databdt.php"; ?>">Data Biodata</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="<?php echo "form.php"; ?>">Tambah Data</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo "formbdt.php"; ?>">Tambah Biodata</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo "home.php"; ?>">Ke Website</a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          
          <?php 
              if ($status=='ok') {
                echo '<br><br><div class="alert alert-success" role="alert">Data Mahasiswa berhasil disimpan</div>';
              }
              elseif($status=='err'){
                echo '<br><br><div class="alert alert-danger" role="alert">Data Mahasiswa gagal disimpan</div>';
              }
           ?>

          <h2 style="margin: 30px 0 30px 0;">Form Data Webiste</h2>
          <form action="form.php" method="POST">
            
            <div class="form-group">
              <input type="hidden" class="form-control" name="isi_id">
            </div>
            <!-- <div class="form-group">
              <label>Nama Lengkap</label>
              <input type="text" class="form-control" placeholder="masukkan nama lengkap anda" name="namal" required="required">
            </div> -->
            <div class="form-group">
              <label>Nama Lengkap</label>
              <select name="sel_nama" id="" class="form-control">
              <?php $query = "SELECT * FROM identitas";
                  $result = mysqli_query(connection(),$query);
                 while($data = mysqli_fetch_array($result)): ?>
                <option value="<?php echo $data['id_identitas']; ?>"><?php echo $data['nama']; ?></option>
                <?php endwhile ?>
              </select>
            </div>
            <div class="form-group">
              <label>Profesi</label>
              <input type="text" class="form-control" placeholder="masukkan profesi anda" name="profesi" required="required">
            </div>
            <div class="form-group">
              <label>Deskripsi Diri</label>
              <textarea class="form-control" placeholder="tuliskan deskripsi diri anda" name="desc" required="required"></textarea>
            </div>
            <div class="form-group">
              <label>Hobi</label>
              <textarea class="form-control" placeholder="tuliskan hobi anda" name="hobi" required="required"></textarea>
            </div>
            <div class="form-group">
              <label>Motto Hidup</label>
              <textarea class="form-control" placeholder="tuliskan motto hidup anda" name="motto" required="required"></textarea>
            </div>
            <div class="form-group">
              <label>Riwayat SD</label>
              <input type="text" class="form-control" placeholder="masukkan riwayat" name="sd" required="required">
            </div>
            <div class="form-group">
              <label>Riwayat SMP</label>
              <input type="text" class="form-control" placeholder="masukkan riwayat" name="smp" required="required">
            </div>
            <div class="form-group">
              <label>Riwayat SMA</label>
              <input type="text" class="form-control" placeholder="masukkan riwayat" name="sma" required="required">
            </div>
            <div class="form-group">
              <label>Riwayat Universitas</label>
              <input type="text" class="form-control" placeholder="masukkan riwayat" name="universitas" required="required">
            </div>
            <div class="form-group">
              <label>Sosial Media</label>
              <input type="text" class="form-control" placeholder="masukkan instagram" name="sosmed1" required="required">
            </div>
            <div class="form-group">
              <label></label>
              <input type="text" class="form-control" placeholder="masukkan linkedin" name="sosmed2" required="required">
            </div>
            <div class="form-group">
              <label></label>
              <input type="text" class="form-control" placeholder="masukkan github" name="sosmed3" required="required">
            </div>
            <div class="form-group">
              <label></label>
              <input type="email" class="form-control" placeholder="masukkan email" name="emaill" required="required">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </main>
      </div>
    </div>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
  </body>
</html>