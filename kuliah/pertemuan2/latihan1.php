<?php 
    // Pertemuan 2 - PHP Dasar
    
    // Sintaks PHP
    // Penulisan sintaks PHP

    // 1. PHP di dalam HTML
        /* <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Belajar PHP</title>
        </head>
        <body>
            <h1><?php echo "Aufaa"; ?></h1>
        </body>
        </html> */

    // 2. HTML di dalam PHP
        /* <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Belajar PHP/title>
        </head>
        <body>
            <?php "<h1>Aufaa</h1>"; ?> 
        </body>
        </html> */

    
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

    // Nilai: integer, String, boolean
    echo 10;
    echo "<hr>";
    echo 123;
    echo "<br>";

    // VARIABLE (wadah untuk menyimpan nilai)
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
    echo "Kamis";
    echo "<br>";
    
    // Mencetak kata yang menggunakan kutip satu
    echo "jum'at";
    echo "<br>";

    // Vice versa
    echo 'Aufaa : "Halo Halo"';
    echo "<hr>";

    // Escaped character
    // \
    echo 'Aufaa : "Jum\'at"';
    echo "<br>";
    echo "Aufaa : \"jum'at\"";
    echo "<br>";

    // Interpolasi
    // Mencetak isi variable
    // Hanya bisa digunakan oleh ""
    echo "Halo nama saya $nama";
    echo "<br>";
    $price = 200;
    echo "Price: $$price";
    echo "<br>";
    echo "Price: $200";
    echo "<hr>";

    // Operator 
    // Keyword yang mengoprasikan / memanipulasi nilai
    // Aritmatika
    // +, -, *, /, % (modulo / modulus / sisa bagi)
    echo 1 + 1;
    echo "<br>";
    echo 1 + 2 * 3 - 4; // KaBaTaKu
    echo "<br>";
    echo (1 + 2) * 3 - 4; 
    echo "<br>";
    
    // Dengan Variable
    $alas = 10;
    $tinggi = 20;
    $luas_segi_tiga = ($alas * $tinggi) / 2;
    echo $luas_segi_tiga;
    echo "<br";
    echo 3 % 2;
    $x = 10;
    $y = 20;
    echo $x * $y;
    echo "<br>";
    echo "<hr>";

    // Concat
    // penggabung String
    // .
    $nama_depan = "Aufaa";
    $nama_belakang = "Husniati";
    echo $nama_depan . " " . $nama_belakang;
    echo "<br>";
    echo "<hr>";
    $nama_depan = "Aufaa";
    $nama_belakang = "Husniati";
    echo $nama_depan . " " . $nama_belakang;
    echo "<hr>";

    // Assigment (Nilai sebelumnya tidak akan hilang, tapi ditambah)
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

    // Perbandingan
    // <, >, <=, >=, ==, !=
    echo 1 < 5;
    echo "<br>";
    echo 10 == "10";
    echo "<br>";
    var_dump(1 < 5);
    echo "<br>";
    var_dump(1 == 5);
    echo "<br>";
    var_dump(1 == "1"); // (Hasilnya true karena operator perbandingan tidak men-check tipe data, hanya nilai)
    echo "<hr>";

    // Identitas / Strict Comparison
    //===, !==
    echo 10 === "10";
    var_dump(1 === "1");
    echo "<hr>";

    // Increment / Decrement
    // penambahaan / pengurangan
    // ++, --
    $x = 10;
    $x++; // Dicetak dulu baru ditambah
    echo $x;
    echo "<br>";
    $x--;
    echo $x;
    echo "<br>";

    // Bisa juga ++$x;(ditambah dulu baru dicetak)
    echo ++$x;
    echo "<br>";
    echo --$x;
    echo "<hr>";

    // Logika
    // &&, ||, !
    $x = 10;
    var_dump($x < 20 && $x % 2 == 0);
    echo "<br>";

    $x = 30;
    var_dump($x < 20 || $x % 2 == 0);
    echo "<br>";
 

 // NOTES

 // Comment
    // ini adalah comment
    /* ini adalah comment */

 // Horizontal line 
    // echo "<hr>";

 // Break line
    // echo "<br>";

 // Boolean: true
    // echo true;

 // Boolean: false
    // echo false;
 ?>

 