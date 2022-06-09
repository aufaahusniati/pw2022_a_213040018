<?php 
session_start();

if (!isset($_SESSION['login'])) {
    header('location: login.php');
    exit;
}

require 'functions.php';
$layanan = query("SELECT * FROM layanan LEFT JOIN kategori USING (id_kategori)");

// Tombol cari ditekan
if(isset($_GET["cari"])) {
  $keyword = ($_GET["keyword"]);

  $query = "SELECT * FROM layanan LEFT JOIN kategori USING (id_kategori) WHERE  
                nama_kategori LIKE '%$keyword%' OR 
                nama LIKE '%$keyword%' OR     
                deskripsi LIKE '%$keyword%' 
            ";
  $layanan = query($query);
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--My CSS-->
    <link rel="stylesheet" href="style.css" />

    <!-- Bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <!--Google Font-->
    <!--Pacifio-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:wght@600&display=swap"
      rel="stylesheet"
    />

    <!--Poppins bold 700-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap"
      rel="stylesheet"
    />

    <!-- Abril Fatface -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap"
      rel="stylesheet"
    />
    <title>Data Layanan</title>
  </head>
  <body>
        
    <!--Navbar-->
    <nav
      class="navbar navbar-expand-lg navbar-dark"
      style="background-color: #406343"
    >
      <div class="container">
        <a class="navbar-brand" href="index.php">PetCare</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php"
                >Dashboard</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profile.php">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="data-kategori.php">Data Kategori</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="data-layanan">Data Layanan</a>
            </li>
          </ul>
          <form class="d-flex">
            <a href="logout.php" class="btn">Logout</a>
          </form>
        </div>
      </div>
    </nav>
    <!--End navbar-->

    <!--Content-->
    <div class="container">
      <div class="texth3" style="padding-top: 20px;">
        <h3>Data Layanan</h3>
      </div>
      <a href="tambah-layanan.php" class="btn btn-primary" tabindex="-1" role="button">Tambah Data Layanan</a>
      <a href="cetak.php" target="_blank" class="btn btn-danger" tabindex="-1" role="button"><i class="bi bi-file-earmark-pdf"></i>&nbsp;Exporting PDF</a>
      
      <!-- Link Sorting -->
      <?php 
       require 'mengurutkan.php';
      ?>

      <!--Cari-->
      <div class="row mt-4">
          <div class="col-8">
            <form action="" method="get">
              <div class="input-group">
                <input type="text" class="form-control" name="keyword" id="keyword" autocomplete="off" placeholder="Masukan keyword pencarian.." autofocus>
                <button class="btn btn-primary" type="submit" id="tombol-cari" name="cari">Cari!</button>
              </div>
            </form>
          </div>
        </div>
      <!--End Cari-->


    <div id="container">

      <div class="row my-5">
        <div class="col-md">
          <table class="table table-bordered" style="width: 100%;">
            <thead>
              <tr>
                <th width="60px" scope="col">No</th>
                <th scope="col">Kategori</th>
                <th scope="col">Nama Layanan</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Gambar</th>
                <th width="150px">Aksi</th>
              </tr>
            </thead>
              <tbody>
              <?php $no = 1; ?>
              <?php foreach($layanan as $row) { ?>
              
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row["nama_kategori"] ?></td>
                    <td><?= $row["nama"] ?></td>
                    <td><?= $row["deskripsi"] ?></td>
                    <td> <a href="img/<?= $row["gambar"] ?>" target="_blank"> <img src="img/<?= $row["gambar"] ?>" width="50px"></a></td>
                    <td>
                      <a href="ubah-layanan.php?id=<?= $row["id_layanan"] ?>" class="btn btn-danger">Edit</a>
                      <a href="hapus.php?idl=<?= $row["id_layanan"] ?>" class="btn btn-primary" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Delete</a>
                    </td>
                    </tr>
                    <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!--End Content-->

    <!--Footer-->
    <footer>
      <div class="container">
        <small>Copyright &copy; 2022 - PetCare.</small>
      </div>
    </footer>
    <!--End footer-->

    <script src="js/script.js"></script>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>