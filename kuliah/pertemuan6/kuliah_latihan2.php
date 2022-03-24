<?php 
$mahasiswa = [
    [ // Tambahkan 10 data 
        "nama" => "Aufaa", 
        "npm" => "213040018", 
        "email" => "aufaa@gmail.com", 
        "jurusan" => "Teknik Informatika",
        "gambar" => "img1.png"],
    [
        "nama" => "Risma", 
        "npm" => "213040010", 
        "email" => "risma@gmail.com", 
        "jurusan" => "Teknik Infomatika",
        "gambar" => "img2.png"],
    [
        "nama" => "Widya", 
        "npm" => "213040034", 
        "email" => "widya@gmail.com", 
        "jurusan" => "Teknik Informatika",
        "gambar" => "img3.png"],
    [
        "nama" => "Ainan", 
        "npm" => "213040007", 
        "email" => "ainan@gmail.com", 
        "jurusan" => "Teknik Informatika",
        "gambar" => "img4.png"],
    [
        "nama" => "Wildan", 
        "npm" => "213040001", 
        "email" => "wildan@gmail.com", 
        "jurusan" => "Teknik Informatika",
        "gambar" => "img5.png"],
    [
        "nama" => "Syifa", 
        "npm" => "213040002", 
        "email" => "syifa@gmail.com", 
        "jurusan" => "Teknik Informatika",
        "gambar" => "img6.png"],
    [
        "nama" => "Najwa", 
        "npm" => "213040003", 
        "email" => "najwa@gmail.com", 
        "jurusan" => "Teknik Informatika",
        "gambar" => "img7.png"],
    [
        "nama" => "Revina", 
        "npm" => "213040004", 
        "email" => "revina@gmail.com", 
        "jurusan" => "Teknik Informatika",
        "gambar" => "img8.png"],
    [
        "nama" => "Diva", 
        "npm" => "213040005", 
        "email" => "diva@gmail.com", 
        "jurusan" => "Teknik Informatika",
        "gambar" => "img9.png"],
    [
        "nama" => "Legi", 
        "npm" => "213040006", 
        "email" => "legi@gmail.com", 
        "jurusan" => "Teknik Informatika",
        "gambar" => "img10.png"]

]; 
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Daftar Mahasiswa</title>
  </head>
  <body>
      <div class="container">
          <h1>Daftar Mahasiswa</h1>
          <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Gambar</th>
                <th scope="col">Nama</th>
                <th scope="col">NPM</th>
                <th scope="col">Email</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php $no = 1; foreach($mahasiswa as $mhs) { ?>
                <tr class="align-middle">
                    <th scope="row"><?= $no++; ?></th>
                    <td>
                        <img src ="img/<?= $mhs["gambar"]; ?>"
                        width="50" class="rounded-circle">
                    </td>
                    <td><?php echo $mhs["nama"] ?></td>
                    <td><?php echo $mhs["npm"] ?></td>
                    <td><?php echo $mhs["email"] ?></td>
                    <td><?php echo $mhs["jurusan"] ?></td>
                    <td>
                        <a href="" class="btn badge bg-warning">edit</a>
                        <a href="" class="btn badge bg-danger">delete</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
      </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>