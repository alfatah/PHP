<?php

// PErtemuan 2 - PHP Dasar
// Sintaks PHP

// Standar Output
// echo, print
// print_r
// var_dump

// print_r ("Sholahuddin Alfatah");
// echo "Sholahuddin Alfatah";
// var_dump ("Sholahuddin Alfatah");

// Penulisab sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// Variabel dan Tipe Data
// Variabel 
// tiadak boleh diawali dengan angka, tapi boleh mengandung angka
// $nama = "Sholahuddin Alfatah";

// echo "Halo, nama saya $nama";
// echo "<br>";
// echo 'Halo, nama saya $nama';

// operator 
// aritmatika
// + - * / %
// $x = 10;
// $y = 20;
// echo $x * $y;

// penggabung string / concatenation / concat
// . 
// $nama_depan = "Sholahuddin";
// $nama_belakang = "Alfatah";
// echo $nama_depan . " " . $nama_belakang;

// Assigment
// =, +=, -=, *=, /=, %=. .=
// $x = 1;
// $x += 5;
// echo $x;
// $nama = "Sholahuddin";
// $nama .= " ";
// $nama .= "Alfatah";
// echo $nama;

// Perbandingan
// <, >, <=, >=, ==, !=
// var_dump(1 < "1");

// identitas 
// ===, !==
// var_dump(1 === "1");

// Logika
// &&, ||, !
$x = 300;
var_dump($x < 20 && $x % 2 == 0);
var_dump($x < 20 || $x % 2 == 0);

?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
   <h1>Halo, Selamat Datang <?php echo $nama ; ?></h1>
    <!-- <p><?php echo "ini adalah paragraf"; ?></p>  -->

<!-- <?php
    echo "<h1>Halo, Selamat Datang Sholahuddin</h1>";
?>  

</body>
</html> -->
