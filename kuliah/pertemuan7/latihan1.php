<?php 
// Variable Scope / lingkap variable
$x = 10;

function tampilX() {
    global $x;
    echo $x;
}

tampilX();
echo "<br>";
echo $x;

echo "<hr>";
?>

<?php 
// SUPERGLOBALS
// Variable global milik PHP
// merupakan Array Associative
echo $_SERVER["SERVER_NAME"];

echo "<hr>";
?>

<?php 
// $_GET
$_GET["nama"] = "Aufaa Husniati";
var_dump($_GET);

echo "<hr>";

$mahasiswa = [
    [
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
        "nama" => "Syifa", 
        "npm" => "213040007", 
        "email" => "syifa@gmail.com", 
        "jurusan" => "Teknik Informatika",
        "gambar" => "img6.png"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs): ?>
            <li>
                <a href="latihan2.php?
                nama=<?= $mhs["nama"]; ?>
                &npm=<?= $mhs["npm"]; ?>
                &email=<?= $mhs["email"]; ?>
                &jurusan=<?= $mhs["jurusan"]; ?>
                &gambar=<?= $mhs["gambar"]; ?>">
                <?= $mhs["nama"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>