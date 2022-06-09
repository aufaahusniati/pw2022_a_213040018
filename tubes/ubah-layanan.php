<?php 
session_start();

if (!isset($_SESSION['login'])) {
    header('location: login.php');
     exit;
}

require 'functions.php';

$layanan = mysqli_query($conn, "SELECT * FROM layanan WHERE id_layanan = '".$_GET['id']."'");
$l = mysqli_fetch_object($layanan);

// Tombol cari ditekan
// if(isset($_POST["cari"])) {
//   $layanan = cari($_POST["keyword"]);
// }

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
    <title>Ubah data layanan</title>
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
              <a class="nav-link" href="data-layanan.php">Data Layanan</a>
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
    <div class="container mt-3">
          <div class="texth3" style="padding-top: 20px;">
            <h3>Ubah Data Layanan</h3>
          </div>
          <div class="box">
            <form action="" method="POST" enctype="multipart/form-data">
              <select class="input-control" name="kategori" required>
                <option value="">--Pilih--</option>
                  <?php 
                    $kategori = mysqli_query($conn, "SELECT * FROM kategori ORDER BY id_kategori DESC");
                    while($r = mysqli_fetch_array($kategori)) {
                  ?>
                <option value="<?= $r['id_kategori'] ?>" <?= ($r['id_kategori'] == $l->id_kategori)? 
                'selected' : ''; ?>> <?=$r['nama_kategori'] ?></option>
                <?php } ?>
              </select>
                        
                <input type="text" name="nama" class="input-control" placeholder="Nama Layanan" value="<?= $l->nama?>" required>
                
                <img src="img/<?= $l->gambar?>" width="100px">
                <input type="hidden" name="foto" value="<?= $l->gambar?>">
                <input type="file" name="gambar" class="input-control">
                <textarea class="input-control" name="deskripsi" placeholder="Deskripsi"><?= $l->deskripsi?></textarea><br>
                    
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>

            <?php 
              if(isset($_POST['submit'])) {

                // Data inputan dari form
                $kategori = $_POST['kategori'];
                $nama = $_POST['nama'];
                $deskripsi = $_POST['deskripsi'];
                $foto = $_POST['foto'];

                // Data gambar yang baru
                $filename = $_FILES['gambar']['name'];
                $tmp_name = $_FILES['gambar']['tmp_name'];

                // Jika admin mengganti gambar
                if($filename != '') {
                  $type1 = explode('.', $filename);
                  $type2 = $type1[1];
  
                  $newname = 'img' .time().'.'.$type2;

                  // menampung data format file yang diizinkan
                   $tipe_diizinkan = array('jpg', 'jpeg', 'png', 'svg');
                  
                  // validasi format file
                  if(!in_array($type2, $tipe_diizinkan)) {
                    // Jika format file tidak ada di dalam tipe diizinkan
                    echo '<script>("format file tidak diizinkan")</script>';
                  
                  } else {
                    unlink('./img/'. $foto);
                    move_uploaded_file($tmp_name, './img/' .$newname);

                    $namagambar = $newname;
                  }
                } else {
                  // Jika admin tidak mengganti gambar
                  $namagambar = $foto;
                  
                }
                
                // query update data layanan
                $update = mysqli_query($conn, "UPDATE layanan SET
                                                id_kategori = '".$kategori."',
                                                nama = '".$nama."',
                                                deskripsi = '".$deskripsi."',
                                                gambar = '".$namagambar."'
                                                WHERE id_layanan = '".$l->id_layanan."'
                                              ");
                
                if($update) {
                  echo '<script>alert("Ubah data layanan berhasil")</script>';
                  echo '<script>window.location="data-layanan.php"</script>';
                } else {
                  echo 'gagal' .mysqli_error($conn);
                }
              }
            ?>
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