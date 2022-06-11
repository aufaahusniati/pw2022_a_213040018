<?php 
require 'functions.php';

$layanan = query("SELECT * FROM layanan LEFT JOIN kategori USING (id_kategori) LIMIT 6");
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
    <link rel="stylesheet" href="user.css" />

    <!-- Bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <!--Font Awesome-->
    <!-- <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    /> -->

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
    <title>Dashboard</title>
  </head>
  <body>
        
    <!--Navbar-->
    <nav
      class="navbar navbar-expand-lg navbar-dark fixed-top"
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
              <a class="nav-link active" aria-current="page" href="#home"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#layanan">Layanan kami</a>
            </li>
          </ul>
          <form class="d-flex">
            <a href="contact.php" class="btn">Contact us</a>
          </form>
        </div>
      </div>
    </nav>
    <!--End navbar-->

    <!-- jumbotron -->
    <section id="home">
      <div class="jumbotron">
        <div class="container py-5">
          <div class="textjum">
            <h3 style="color: #c2b280">PetCare</h3>
            <h2 class="display-5" style="color: white">Take good care of <br> your small pets.</h2>
            <p style="color: white;">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Quos quibusdam sequi cupiditate.</p>
          </div>

          <!-- Sosmed -->
          <div class="sosmed">
            <!-- Instagram -->
            <a href="https://www.instagram.com/aufaahsnt/" target="blank" alt="..."
              ><i class="bi bi-instagram fa-lg" alt="..."></i>
            </a>
            <!-- Github -->
            <a href="https://youtube.com/aufaahusniati/" target="blank" alt="..."
              ><i class="bi bi-youtube fa-lg" alt="..."></i
            ></a>
            <a href="" >
              <i class="bi bi-apple"></i>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- end jumbotron -->

    <!--About-->
    <section id="about">
      <div class="container">
        <div class="row text-center">
          <div class="col">

            <div class="textabout">
              <h1>About <span>Us</span></h1>
            </div>
          </div>

          <div class="row text-center">
            <div class="col align-self-center">
              <h4>
              Pengalaman adalah ilmu terbaik yang kami miliki sebagai modal untuk menangani hewan peliharaan Anda dengan cinta dan kasih sayang. 
              PetCare Clinic sudah lebih dari 12 tahun melayani Anda, didukung oleh Groovy Pet Service yang telah telah hadir untuk memberikan
              kebutuhan serta layanan terbaik bagi hewan peliharaan Anda selama lebih dari 30 tahun.
              </h4>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- About end -->

  
    <!--Frame 1-->
    <div class="frame1">
        <img src="img/highlight.svg" alt="frame1" width="100%" height="auto"> 
      </div>
    <!--Frame 1 end-->

    <!-- layanan -->
    <section id="layanan">
      <div class="container">
        <div class="textabout  text-center">
            <h1>Layanan<span> Kami</span></h1>
        </div>
     

        <section id="#layanan">
        

          <?php if(empty($layanan)) : ?>
            <tr>
              <td colspan="4">
                <p style="color: red; font-style: italic;">Hasil tidak ditemukan</p>
              </td>
            </tr>
            <?php endif; ?>

            <?php $i = 1; ?>
            <?php foreach($layanan as $l) : ?>

            <div class="card float-start me-4 mt-4 block" style="width: 18rem; margin: 50px;">
              <img src="img/<?= $l['gambar'] ?>" class="card-img-top" height="180px" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?= $l['nama']?></h5>
                <p class="card-text"><?= $l['deskripsi']?></p>
              </div>
            </div>
          <?php endforeach; ?>
        </section>
      </div>
    </section>
    <!-- end layanan -->

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
