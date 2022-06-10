<?php 
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
              <a class="nav-link active" aria-current="page" href="user.php"
                >Home</a>
          </ul>
          <form class="d-flex">
            <a href="contact.php" class="btn">Contact us</a>
          </form>
        </div>
      </div>
    </nav>
    <!--End navbar-->


        <!--Contact-->
        <section id="contact">
      <div class="container">
        <div class="row text-center mb-3">

          <div class="textcontact">
            <h1>Contact <span>Me</span></h1>
          </div>
        </div>

        <div class="row d-flex justify-content-center">
          <div class="col-lg-5 justify-content-center d-flex img-contact">
            <img src="img/email.svg" class="img-fluid" alt="" width="425">
          </div>

          <div class="col-lg-7 d-flex justify-content-center">
            <div class="col-md-6">
              <div class="alert alert-info alert-dismissible fade show my-alert d-none" role="alert">
                  Thank You! We have received your message.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>

            <form name="contact-me">
              <div class="mb-3">
                  <label for="name" class="form-label">Full Name</label>
                  <input type="text" class="form-control" id="name" aria-describedby="name" name="nama">
              </div>
              <div class="mb-3">
                  <label for="email" class="form-label">Email Address</label>
                  <input type="email" class="form-control" id="email" aria-describedby="email" name="email">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
                  
              <button type="submit" class="btn">Send</button>
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!--End Contact-->

  

  


    <!-- end layanan -->
    <!-- Footer -->


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
