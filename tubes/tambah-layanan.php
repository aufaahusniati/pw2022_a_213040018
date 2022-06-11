<?php 
    session_start();

    if (!isset($_SESSION['login'])) {
        header('location: login.php');
         exit;
    }

    require 'functions.php';
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

    <title>Tambah Data Layanan</title>
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

    <!--CONTENT-->
    <div class="section">
            <div class="container">
                <h3>Tambah Data Layanan</h3>
                <div class="box">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <select class="input-control" name="kategori" required>
                            <option value="">--Pilih--</option>
                            <?php 
                                $kategori = mysqli_query($conn, "SELECT * FROM kategori ORDER BY id_kategori DESC");
                                while($r = mysqli_fetch_array($kategori)) {
                            ?>
                            <option value="<?= $r['id_kategori'] ?>"><?=$r['nama_kategori'] ?></option>
                            <?php } ?>
                        </select>
                        
                        <input type="text" name="nama" class="input-control" placeholder="Nama Produk" required>
                        <input type="file" name="gambar" class="input-control" required>
                        <textarea class="input-control" name="deskripsi" placeholder="Deskripsi"></textarea><br>
                    
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <?php 
                        if(isset($_POST['submit'])) {

                            // print_r($_FILES['gambar']);
                            // menampung inputan dari form
                            $kategori = htmlspecialchars($_POST['kategori']);
                            $nama = htmlspecialchars($_POST['nama']);
                            $deskripsi = htmlspecialchars($_POST['deskripsi']);

                            // menampung data file yang di upload
                            $filename = $_FILES['gambar']['name'];
                            $tmp_name = $_FILES['gambar']['tmp_name'];

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

                                //Jika format file sesuai dengan yang ada di dalam array tipe diizinkan
                                // proses upload file sekaligus
                                
                                move_uploaded_file($tmp_name, './img/' .$newname);

                                $insert = mysqli_query($conn, "INSERT INTO layanan VALUES (
                                            null,
                                            '".$kategori."',
                                            '".$nama."',
                                            '".$deskripsi."',
                                            '".$newname."'
                                            ) ");

                                if($insert) {
                                  echo "<script>
                                          alert('data layanan berhasil ditambahkan!');
                                          document.location.href = 'data-layanan.php';
                                        </script>
                                      ";
                                } else {
                                  echo "<script>
                                          alert('data layanan gagal ditambahkan!');
                                          document.location.href = 'data-layanan.php';
                                      </script>
                                  ";
                                }
                            }
                        }
                    ?>
                </div>
            </div>
        </div>

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


