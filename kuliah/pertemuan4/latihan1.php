 <?php 
// Pertemuan 4 - Function


// Built-in Function
// date(); 
// Untuk menampilkan tanggal dengan format tertentu
echo date("l");
echo "<br>";
echo date("l, j F Y");
echo "<br>";
echo date("h - l, j F Y");
echo "<br>";
echo date("l, j F Y");
echo "<hr>";

// // time()
echo time();

// // UNIX Timestamp / EPOCH Time
// // Detik yang sudah berlalu sejak 1 Januari 1970
echo "<br>";
echo time() + 10; // Ditambah 10 detik
echo "<br>";
echo time() + 86400; // Detik yang berlalu dalam 1 Hari
echo "<br>";
echo time() + 60 * 60 * 24;
echo "<hr>";

echo date("l, j F Y", time() + 60 * 60 * 24);
echo "<br>";
echo date("l, j F Y", time() + 60 * 60 * 24 * 100); // 100 hari lagi
echo "<br>";
echo date("l, j F Y", time() - 60 * 60 * 24 * 100); // 100 hari kebelakang
echo "<hr>";

// // mktime(0, 0, 0, 0, 0, 0);
// // jam, menit, detik, bulan, tanggal, tahun
// // Mendapatkan detik ada tanggal tertentu
echo mktime(0, 0, 0, 3, 5, 2022);
echo "<hr>";

echo date("l", mktime(0, 0, 0, 10, 21, 2002)); // cek hari 
echo "<hr>";

// // Math
echo pow(2, 3); // Pangkat
echo "<br>";
echo rand(1, 10); // Nilai random
echo "<br>";

// Pembulatan
// round(), ceil(), floor();
echo round(2.9); // Hasil terdekat
echo "<br>";
echo ceil(2.1); // ke atas (ceiling / langit-langit)
echo "<br>";
echo floor(2.9); // ke bawah (lantai)
echo "<hr>";

// Strtotime
echo strtotime("25 aug 1985");
echo "<br>";
echo date("l", strtotime("25 aug 1985"));

 ?>