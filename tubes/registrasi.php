<?php 
require 'functions.php';

if(isset($_POST["register"])) {

    if(registrasi($_POST) > 0) {
        header('location: index.php');
            echo "<script>
                    alert('User baru berhasil ditambahkan!')
                </script>";
    } else {
        echo mysqli_error($conn);
    }
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
    <link rel="stylesheet" href="login.css" />

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
    <title>Registration to PetCare</title>
  </head>
  <body>
        
    <!--Contact-->
    <section id="contact">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="textcontact">
                    <h1>Registration</h1>
                </div>
            </div>

                <div class="row d-flex justify-content-center">
                    <div class="col-lg-5 justify-content-center d-flex img-contact">
                </div>

                <div class="col-lg-7 d-flex justify-content-center">
                    <div class="col-md-6">

                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" aria-describedby="name" name="username">
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" aria-describedby="email" name="password">
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Konfirmasi Password</label>
                                <input type="password" class="form-control" id="password2" aria-describedby="email" name="password2">
                            </div>
                                
                            <button class="btn btn-success" type="submit" name="register">Registration</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Contact-->

    <!--Footer-->
    <!-- <footer>
      <div class="container">
        <small>Copyright &copy; 2022 - PetCare.</small>
      </div>
    </footer> -->
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