<?php 
// Date
// Untuk menampilkan tanggal dengan format tertentu
//   echo date("l, d-M-Y");

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 Januari 1970
// echo time();
// seratus hari itu hari apa
//echo date("l", time()-60*60*24*100);

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
//echo date("l", mktime(0,0,0,8,25,1985));

// strtotime
// echo date("l", strtotime("25 aug 1985"));

function salam($waktu = "Datang", $nama= "Sholahuddin Alfatah") {
    return "Selamat $waktu, $nama!";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan Funcion</title>
</head>
<body>
    <h1><?php echo Salam(); ?></h1>
</body>
</html>

