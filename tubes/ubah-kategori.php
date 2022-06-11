<?php 
session_start();

if (!isset($_SESSION['login'])) {
    header('location: login.php');
     exit;
}

require 'functions.php';

$kategori = mysqli_query($conn, "SELECT * FROM kategori WHERE id_kategori = '".$_GET['id']."'");
    if(mysqli_num_rows($kategori) == 0) {
        echo '<script>window.location="data-kategori.php"</script>';
    }
    $k = mysqli_fetch_object($kategori);
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
    <link rel="stylesheet" href="css/style.css" />

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
    <title>Ubah data kategori</title>
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
            <h3>Ubah Data Kategori</h3>
          </div>
            <form action="" method="post">
              <div class="mb-3 mt-3">
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Kategori" value="<?= $k->nama_kategori?>">
              </div>
            
              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>    

            <?php 
              if(isset($_POST['submit'])) {
                $nama = ucwords($_POST['nama']);
                
                $update = mysqli_query($conn, "UPDATE kategori SET 
                                                nama_kategori = '".$nama."'
                                                WHERE id_kategori = '".$k->id_kategori."' 
                                      ");

                if($update) {
                  echo "<script>
                          alert('ubah data layanan berhasil!');
                          document.location.href = 'data-kategori.php';
                        </script>
                      ";
                } else {
                    echo "<script>
                            alert('ubah data layanan gagal!');
                            document.location.href = 'data-kategori.php';
                          </script>
                        ";
                }
              }
            ?>
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