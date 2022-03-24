<?php 
// Array Associative
// Array yang indexnya berupa string yang ber-asosiasi dengan nilainya
// Index dimulai dari 0, elemen dimulai dari 1

$mahasiswa = [
    // key sebaiknya ditulis dengan huruf kecil semua
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

// var_dump($mahasiswa); 
// var_dump($mahasiswa[2][2]); 
// var_dump($mahasiswa[2]["email"]);
?>

<?php foreach($mahasiswa as $mhs) { ?>
    <ul>
        <li>Nama : <?php echo $mhs ["nama"] ?> </li> 
        <li>NPM : <?php echo $mhs ["npm"] ?> </li>
        <li>Email : <?php echo $mhs ["email"] ?> </li>
        <li>Jurusan : <?php echo $mhs ["jurusan"] ?> </li>
    </ul> 
<?php }
?>
