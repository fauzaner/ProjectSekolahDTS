<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="Css/Registrasi.css">
    <!-- Font CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&family=Roboto+Slab&display=swap" rel="stylesheet">
    <title>SMA KOTA MOJOKERTO</title>

  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="https://www.facebook.com/officialsman2mojokerto/?_rdc=1&_rdr"><img src="https://img.icons8.com/ios-filled/50/ffffff/facebook--v1.png" width = "22" height="22"/></a>
    <a class="navbar-brand" href="https://www.facebook.com/officialsman2mojokerto/?_rdc=1&_rdr"><img src="https://img.icons8.com/ios-filled/50/ffffff/youtube-play.png" width = "25" height="25"/></a>
    <a class="navbar-brand" href="https://www.facebook.com/officialsman2mojokerto/?_rdc=1&_rdr"><img src="https://img.icons8.com/windows/32/ffffff/instagram-new.png" width = "25" heigtht="25"/></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        </li>
      </ul>
    </div>
  </div>
</nav>
    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="Images\logo.png" width="40" height="40" class="d-inline-block align-text-left">&nbsp;SMA 2 KOTA MOJOKERTO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="BerandaUser.php">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="Registrasi.php">Registrasi Data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="info-pendaftaran.php">Info Pendaftaran</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Gallery</a>
        </li>
        <a class="btn tombol-button-logout text-light" href="logout.php" role="button">Log Out</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
  <!-- Akhir Navbar -->

  <?php
  include 'Koneksi.php';

  // ambil id terbesar di kolom id_pendaftar, lalu ambil 5 karakter sebelah kanan
  $getMaxId = mysqli_query($conn, "SELECT MAX(RIGHT(id_pendaftaran, 5))AS id FROM tb_pendaftaran");//ambil nilai terbesar dan ambil nilai dari sebelah kanan
  $d = mysqli_fetch_object($getMaxId);
  $generateId = 'P' . date('Y') . sprintf("%05s", $d->id + 1);
  // P adalah pendaftar dengan Y adalah tahun pendaftar, dan
  //untuk id menambahkan angka 1 , 1 ketika proses dilakukan
  if (isset($_POST["submit"])) {
    $th_ajaran = $_POST["th_ajaran"];
    $jurusan = $_POST["jurusan"];
    $nm_peserta = $_POST["nm_peserta"];
    $tmpt_lahir = $_POST["tmpt_lahir"];
    $tgl_lahir = $_POST["tgl_lahir"];
    $jk = $_POST["jk"];
    $agama = $_POST["agama"];
    $almt_peserta = $_POST["almt_peserta"];
    $result = mysqli_query($conn, "INSERT INTO tb_pendaftaran (id_pendaftaran, tgl_pendaftaran, th_ajaran, jurusan, nm_peserta, tmpt_lahir, tgl_lahir, jk, agama, almt_peserta, status_siswa) VALUES ('$generateId', '$tgl_pendaftaran', '$th_ajaran', '$jurusan', '$nm_peserta', '$tmpt_lahir', '$tgl_lahir', '$jk', '$agama', '$almt_peserta', '$ambil')");
    $ambil = mysqli_query($conn, "UPDATE tb_pendaftaran SET status_siswa = 'unverified' WHERE id_pendaftaran = '$generateId'");
    $tgl_pendaftaran =  mysqli_query($conn, "UPDATE tb_pendaftaran SET tgl_pendaftaran = '".date('Y-m-d')."' WHERE id_pendaftaran = '$generateId' ");
    echo '<script>window.location="Sukses.php?id=' . $generateId . '"</script>';
  }
  ?>

  <!-- Form Formulir Register -->
  <section class="box-formulir">
    <h4 class='judul-formulir'>Formulir Pendaftaran Siswa Baru SMA 2 KOTA MOJOKERTO</h4>
    <p class='title-formulir'>Pada bagian ini, cantumkan data pribadi anda.</p>
    <hr class='my-4'>
    <!-- Form -->
    <form action="" method="post">

      <!-- Form Tahun Ajaran -->
      <div class="form-group row">
        <label for="thn ajaran" class="col-sm-3 col-form-label">Tahun Ajaran</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" name="th_ajaran" placeholder="Masukkan Tahun Ajaran" value="2021/2022" readonly>
        </div>
      </div>

      <!-- Form Pilih Jurusan -->
      <div class="form-group row">
        <label for="jurusan" class="col-sm-3 col-form-label">Pilih Jurusan</label>
        <div class="col-sm-8">
          <select class="form-control" name="jurusan">
            <option value="">Pilih Jurusan</option>
            <option value="IPA">IPA</option>
            <option value="IPS">IPS</option>
            <option value="Bahasa">Bahasa</option>
          </select>
        </div>
      </div>

      <h5 class="data-diri-siswa mt-5 mb-5">&nbsp;&nbsp;&nbsp;Data Pribadi Calon Siswa</h5>

      <!-- Form Nama Lengkap -->
      <div class="form-group row">
        <label for="nama lengkap" class="col-sm-3 col-form-label">Masukkan Nama Lengkap</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" name="nm_peserta" placeholder="Masukkan Nama Lengkap">
        </div>
      </div>

      <!-- Form Tempat Lahir -->
      <div class="form-group row">
        <label for="tmpt lahir" class="col-sm-3 col-form-label">Tempat Lahir</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" name="tmpt_lahir" placeholder="Masukkan Tempat Lahir">
        </div>
      </div>

      <!-- Form Tanggal Lahir -->
      <div class="form-group row">
        <label for="tgl lahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
        <div class="col-sm-8">
          <input type="date" class="form-control" name="tgl_lahir" placeholder="Masukkan Tanggal Lahir">
        </div>
      </div>

      <!-- Form Jenis Kelamin -->
      <div class="form-group row">
        <label for="jenis kelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
        <div class="col-sm-8">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="jk" value="Laki-laki">
            <label class="form-check-label">Laki - laki</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="jk" value="Perempuan">
            <label class="form-check-label">Perempuan</label>
          </div>
        </div>
      </div>

      <!-- Form Pilih Agama -->
      <div class="form-group row">
        <label for="agama" class="col-sm-3 col-form-label">Pilih Agama</label>
        <div class="col-sm-8">
          <select class="form-control" name="agama">
            <option value="">Pilih Agama</option>
            <option value="Islam">Islam</option>
            <option value="Budha">Budha</option>
            <option value="Hindu">Hindu</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
          </select>
        </div>
      </div>

      <!-- Form Alamat -->
      <div class="form-group row">
        <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
        <div class="col-sm-8">
          <textarea class="form-control" name="almt_peserta" rows="3" placeholder="Masukkan Alamat"></textarea>
        </div>
      </div>

      <!-- Tombol Daftar Sekarang -->
      <div class="form-group row">
        <label for="submit" class="col-sm-3 col-form-label"></label>
        <div class="col-sm-5">
          <input class="btn btn-primary rounded-pill" type="submit" name="submit" value="Daftar Sekarang">
        </div>
      </div>

    </form>
  </section>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
</body>

</html>