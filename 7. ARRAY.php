
<!-- <?php
// array
// variabel yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key-nya adalah index, yang di mulai dari 0

// $nama = "Sholahuddin Alfatah";
// $hari1 = "Senin";
// $hari2 = "Selasa";

// membuat array
// cara lama
// $hari = array("Senin", "Selasa", "Rabu");
// cara baru
// $bulan = ["Januari", "Febuari", "Maret"];
// $arr1 = [123, "tulisan", false];

// Menampilkan Array
// var_dumb() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// Menampilakn 1 element pada array
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1]

// menambahkan elemen baru pada array
// var_dump($hari);
// $hari[] = "Kamis";
// $hari[] = "Jum'at";
// echo "<br>";
// var_dump($hari);

// Pengulangan pada array
// for / foreach
?> -->


<!-- <?php
$angka = [3,2,15,20,11,77,89];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
     <style>
      .kotak {
        width: 50px;
        height: 50px;
        background-color: salmon;
        text-align: center;
        line-height: 50px;
        margin: 3px;
        float: left;
      }
      .clear { clear: both; }
     </style>
</head>
<body>

<?php for( $i = 0; $i < count($angka); $i++ ) { ?>
  <div class= "kotak"><?php echo $angka[$i]; ?></div>
<?php } ?>

<div class="clear"></div>
<br>

<?php foreach( $angka as $a ) { ?>
  <div class="kotak"><?php echo $a; ?></div>
<?php } ?>

<div class="clear"></div>
<br>

<?php foreach( $angka as $a ) : ?>
  <div class="kotak"><?= $a; ?></div>
    <?php endforeach; ?>
  
</body>
</html> -->

<?php
$mahasiswa = [
["Annisa", "0000006", "Teknik Komputer Jaringan", "Annisa@gmail.com"],
["Sholahuddin Alfatah", "0000007", "Teknik Komputer Jaringan", "alfatah1505@gmail.com"],
["Syamsul Bahri", "0000008", "Teknik Komputer Jaringan", "Syamsul@gmail.com"]
];
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
    <li>Nama :
    <?php echo $mhs[0]; ?>
    </li>
    <li>NRP :
    <?php echo $mhs[1]; ?>
    </li>
    <li>Jurusan :
    <?php echo $mhs[2]; ?>
    </li>
    <li>Emai :
    <?php echo $mhs[3]; ?>
    </li>
  </ul>
  <?php endforeach; ?>


<!-- 
  <ul>
    <li>
    <?php foreach( $mahasiswa as $mhs ) : ?>
    <?php $mhs; ?>
    <?php endforeach; ?>
    </li>
  </ul> -->


</body>
</html>
