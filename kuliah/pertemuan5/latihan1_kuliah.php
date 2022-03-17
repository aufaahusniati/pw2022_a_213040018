<?php 
// ARRAY
// Array adalah variable yang dapat menampung lebih dari satu nilai sekaligus

$hari1 = "senin";
$hari2 = "selasa";

$bulan1 = "Januari";
$bulan2 = "februari";

$mahasiswa213040018 = "Aufaa";

// Membuat Array
// cara baru
$hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat"]; 
// cara lama
$bulan = array("Januari", "Februari", "Maret"); 
$myArray = [100, "Aufaa", true];

// Mencetak array
// mencetak 1 elemen / nilai menggunkan indexnya
// index dimulai dari 0
echo $hari[1];
echo "<br>";
echo $bulan[2];
echo "<hr>";

// Mencetak semua elemen pada array
// var_dump() atau print_r()
// khusus untuk debugging
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<hr>";

// Mencetak menggunkan looping
// for
for($i = 0; $i < 3; $i++) {
    echo $hari[$i];
    echo "<br>";
}

// jika menghapus 1 data 
for($i = 0; $i < count($hari); $i++) {
    echo $hari[$i];
    echo "<br>";
}

echo "<hr>";

// foreach (khusus untuk array)
foreach($bulan as $b) {
    echo $b;
    echo "<br>";
}

echo "<hr>";

foreach ($hari as $key => $value) {
    echo "Key: $key, Value: $value";
    echo "<br>";
}

echo "<hr>";

// Memanipulasi isi array
// menambah elemen baru di akhir array
$hari[] = "Sabtu";
// bisa juga
$hari[count($hari)] = "Minggu";
var_dump($hari);

?>