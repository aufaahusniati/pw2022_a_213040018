<?php 
session_start();
require 'functions.php';

// Cek cookie
if(isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
  $id = $_COOKIE['id'];
  $key = $_COOKIE['key'];

  // Ambil username berdasarkan id
  $result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);

  // Cek cookie dan username
  if($key === hash('sha256', $row['usernma'])) {
    $_SESSION['login'] = true;
  }
}

if (isset($_SESSION['login'])) {
    header('location: index.php');
    exit;
}


if(isset($_POST["login"])) {

  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM user WHERE
                                username = '$username'");
  
  // Cek username 
  if(mysqli_num_rows($result) === 1) {

    // Cek password
    $row = mysqli_fetch_assoc($result);
    if(password_verify($password, $row["password"])) {
      
      // Set session
      $_SESSION["login"] = true;

      // Cek remember me
      if(isset($_POST['remember'])) {
        
        // Buat cookie
        setcookie('id', $row['id'], time() + 60);
        setcookie('key', hash('sha256', $row['username']), time() + 60);
      }

      header("location: index.php");
      exit;
    }
  }
  $error = true;
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
    <title>Login || PetCare</title>
  </head>
  <body>
        

    <!--Contact-->
    <section id="contact">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="textcontact">
                    <h1>Login</h1>
                </div>
            </div>

                <div class="row d-flex justify-content-center">
                    <div class="col-lg-5 justify-content-center d-flex img-contact">
                </div>

                <div class="col-lg-7 d-flex justify-content-center">
                    <div class="col-md-6">

                    <?php if(isset($error)) :?>
                      <p style="color: red; font-style: italic;">username / password salah</p>
                    <?php endif; ?>
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" aria-describedby="name" name="username">
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>

                            <div class="mb-3 form-check">
                              <input type="checkbox" name="remember" class="form-check-input" id="remember">
                              <label class="form-check-label" for="remember">Remember Me</label>
                            </div>

                            <a href="registrasi.php">Registrasi</a> <br><br>

                            <div class="d-flex">
                              <button class="btn" type="submit" name="login">Login</button>
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