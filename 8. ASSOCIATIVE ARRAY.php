<?php
// array 
// membuat array
// $hari = array("Senin", "Selasa", "Rabu");
// $bulan = ["Januari", "Febuari", "Maret"];
// $arr = [100, "teks", true];
// menampilakan array
// versi debugging
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// menampilkan 1 emlemen pada array
// echo $arr[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            background-color: #bada55;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 0.5s;
        }
        .kotak:hover {
            transform: rotate(180deg);
            border-radius: 50%;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>

<!-- <div class="kotak">
<?php
$angka = [[1,2,3],[4,5,6],[7,8,9]]; 
echo $angka[2][0];
?>
</div> -->



<!-- <?php
$angka = [1,2,3,4,5,6,7,8,9]; 
?> -->

<!-- <?php foreach( $angka as $a ) : ?>
    <div class="kotak"><?= $a; ?></div>
<?php endforeach; ?> -->


<!-- <?php
$angka = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
]; 
?>

<?php foreach( $angka as $a ) : ?>
    <?php foreach( $a as $b ) : ?>
        <div class="kotak"><?= $b; ?></div>
    <?php endforeach; ?>
    <div class="clear"></div> 
<?php endforeach; ?> -->

</body>
</html>


<!-- <?php
$mahasiswa = [
    ["Wahyoe", "0000006", "Teknik Komputer Jaringan", "Wahyoe@gmail.com"],
    ["Sholahuddin Alfatah", "0000007", "Teknik Komputer Jaringan", "alfatah1505@gmail.com"],
    ["Syamsul Bahri", "0000008", "Teknik Komputer Jaringan", "Syamsul@gmail.com"],
    ["Farhan Yazid", "0000009", "Teknik Komputer Jaringan", "Yazid@gmail.com"]
];
?> -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>Nama :<?php echo $mhs[0]; ?></li>
        <li>NRP :<?php echo $mhs[1]; ?></li>
        <li>Jurusan :<?php echo $mhs[2]; ?></li>
        <li>Email :<?php echo $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?> 
</body>
</html> -->

<!-- 
// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri 
-->

<?php
$mahasiswa = [
    [
        "nama" => "Sholahuddin Alfatah", 
        "nrp" => "0000007",
        "jurusan" => "Teknik Komputer Jaringan",
        "email" => "alfatah1505@gmail.com",
        "gambar" => "../img/alfatah.jpeg"
    ],
    [
        "nama" => "Wahyoe", 
        "nrp" => "0000008",
        "jurusan" => "Teknik Komputer Jaringan",
        "email" => "Wahyoe@gmail.com",
        "tugas" => [90, 80, 100],
        "gambar" => "../img/wahyoe.png"
    ]
]; 

// echo $mahasiswa[1]["tugas"][1];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>">
        </li>
        <li>Nama :<?php echo $mhs["nama"]; ?></li>
        <li>NRP :<?php echo $mhs["nrp"]; ?></li>
        <li>Jurusan :<?php echo $mhs["jurusan"]; ?></li>
        <li>Email :<?php echo $mhs["email"]; ?></li>
    </ul>
    <?php endforeach; ?> 
</body>
</html> 


