<?php
// ini adalah komentar 
// ini juga komentar
/*
ini komentar
ini juga komentar
*/

// pertemuan 2 - PHP Dasar
// Sintaks PHP

// Standar Output
// echo, print
// print_r
// var_dumb

//echo "Sholahuddin Alfatah";
//print "Sholahuddin Alfatah";
//print_r ("Sholahuddin Alfatah");
//var_dump("Sholahuddin Alfatah");

// Penulisan sintaks PHP
// 1. php di dalam html
// 2. html di dalam php

// varibel dan tipe data
// variabel
// variabel tidak boleh di awali dengan angka, tapi boleh mengandung angka
// $nama = "Sholahuddin Alfatah";

// echo "Halo, nama saya $nama";

// operator
// aritmatika
// - + * / %
// $x = 10;
// $y = 20;
// echo $x * $y;

// penggabung string / concatenation / concat
// .
// $nama_depan = "Sholahuddin";
// $nama_belakang = "Alfatah";
// echo $nama_depan . " " . $nama_belakang;

// assignment
// = , += , -= , *= , /= , %=, .=
// $x = 1;
// $x += 5;
// echo $x;
$nama = "Sholahuddin";
$nama .= " ";
$nama .= "Alfatah";
// echo $nama;

// perbandingan
// <, >, <=, >=, ==, !=
// var_dump(1 == "1");

// identitas
// ===, !==
// var_dump(1 === "1")

// logika
// &&, ||, !
// $x = 10;
// var_dump($x < 20 || $x % 2 == 0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Halo, Selamat Datang <?php echo $nama; ?></h1>
    <p><?php echo "ini adalah paragraf"; ?></p> 
</body>
</html>


