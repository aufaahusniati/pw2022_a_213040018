<?php 
// $mahasiswa = [
//    ["Aufaa", "213040018", "aufaa@gmail.com", "Teknik Informatika"],
//    ["Husniati", "2130400000", "husniati@gmail.com", "Teknik Informatika]
// ];

// Array Associative
// Definisinya sama seperti array numerik, kecuali key-nya adalah string yang kita buat sendiri

$mahasiswa = [
    [
        "nama" => "Aufaa", 
        "npm" => "213040018", 
        "email" => "aufaa@gmail.com", 
        "jurusan" => "Teknik Informatika"],
    [
        "nama" => "Risma", 
        "npm" => "213040010", 
        "email" => "risma@gmail.com", 
        "jurusan" => "Teknik Infomatika"],
    [
        "nama" => "Widya", 
        "npm" => "213040034", 
        "email" => "widya@gmail.com", 
        "jurusan" => "Teknik Informatika"],
    [
        "nama" => "Syifa", 
        "npm" => "213040007", 
        "email" => "syifa@gmail.com", 
        "jurusan" => "Teknik Informatika"]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs['npm']; ?></li>
            <li>Email : <?= $mhs['email']; ?></li>
            <li>Jurusan : <?= $mhs['jurusan']; ?></li>
        </ul>
        <?php endforeach; ?>
    
</body>
</html>