<?php 
    // ini adalah komentar (ctrl + /)
    /* ini juga komentar */

    // Pertemuan 2 - PHP Dasar
    // Sintaks PHP

    // Standar Output
    // echo, print (digunakan untuk mencetak variable)
    // print_r (untuk mencetak isi array)
    // var_dump (untuk melihat isi variable)
    echo "Aufaa Husnitai";
    echo "<br>";
    print "Aufaa Husniati";
    echo "<br>";
    print_r("Aufaa Husniati"); // Harus pake kurung ()
    echo "<br>";
    var_dump("Aufaa Husniati");
    echo "<hr>";

    // Penulisan sintaks PHP
    // 1. PHP di dalam HTML
    // <!DOCTYPE html>
    // <html lang="en">
    // <head>
    //     <meta charset="UTF-8">
    //     <title>Belajar PHP</title>
    // </head>
    // <body>
    //     <?php 
    //         echo "<h1>Halo nama saya Aufaa</h1>"
    // </body>
    // </html>

    // 2. HTML di dalam PHP
    // <!DOCTYPE html>
    // <html lang="en">
    // <head>
    //     <meta charset="UTF-8">
    //     <title>Belajar PHP/title>
    // </head>
    // <body>
    //     <h1>Halo, Nama saya <?php echo "Aufaa"; (? >) </h1>
    // </body>
    // </html> 

    // Nilai: integer, String, boolean
    echo 10;
    echo "<hr>";

    // VARIABEL
    // tidak boleh diaawali dengan angka, tapi boleh mengandung angka
    // tidak boleh ada spasi
    $nama = "Aufaa";
    echo $nama;
    echo "<br>";

    // bisa ditimpa / overwrite
    $nama = "Husniati";
    echo $nama;
    echo "<hr>";

    //String
    // '', ""
    echo "jum'at";
    echo "<br>";
    echo 'Aufaa : "Halo Halo"';
    echo "<hr>";

    // Escaped character
    // \
    echo 'Aufaa : "Jum\'at"';
    echo "<br>";
    echo "Aufaa : \"jum'at\"";
    echo "<br>";

    // INTERPOLASI
    // mencetak isi variable
    // hanya bisa digunakan oleh ""
    echo "Halo nama saya $nama";
    echo "<br>";
    $price = 200;
    echo "Price: $$price";
    echo "<hr>";

    // OPERATOR 
    // Aritmatika
    // +, -, *, /, % (modulp / modulus / sisa bagi)
    echo 1 + 1;
    echo "<br>";
    $alas = 10;
    $tinggi = 20;
    $luas_segi_tiga = ($alas * $tinggi) / 2;
    echo $luas_segi_tiga;
    echo "<br";
    echo 3 % 2;
    echo "<hr>";
    echo "<br>";

    // CONCAT
    // penggabukan Sting
    // .

    $nama_depan = "Aufaa";
    $nama_belakang = "Husniati";
    echo $nama_depan . " " . $nama_belakang;
    echo "<hr>";

    // ASSIGMENT (Nilai sebelumnya tidak akan hilang, tapi ditambah)
    //=, +=, -=, *=, /=, %=, .=
    $x = 1;
    $x += 5;
    echo $x;
    echo "<br>";

    $nama = "Aufaa";
    $nama .= " ";
    $nama .= "Husniati";
    echo $nama;
    echo "<hr>";

    // PERBANDINGAN
    // <, >, <=, >=, ==, !=
    echo 1 < 5;
    echo "<br>";
    echo 10 == "10";
    echo "<br>";
    var_dump(1 < 5);
    echo "<br>";
    var_dump(1 == 5);
    echo "<br>";
    var_dump(1 == "1"); // (hasilnya true karena operator perbandingan tidak men-check tipe data, hanya nilai)
    echo "<hr>";

    //IDENTITAS / STRICT COMPARISON
    //===, !==
    echo 10 === "10";
    echo "<br>";
    var_dump(1 === "1");
    echo "<hr>";

    // INCREMENT / DECREMENT
    // penambhaan/ pengurangan
    // ++, --
    $x = 10;
    $x++; // dicetak dulu baru ditambah
    echo $x;
    echo "<br>";

    // bisa juga ++$x;(ditambah dulu baru dicetak)
    echo ++$x;
    echo $x;
    echo "<hr>"

    // LOGIKA 
    // &&, ||, !
    // $x = 30;
    // var_dump($x < 20 && $x % 2 == 0);

 ?>