<?php
session_start();


if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

// pagination 
// konfigurasi
$jumlahDataPerHalaman = 3;
$jumlahData = count(query("SELECT * FROM mahasiswa") );
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;
// halaman = 2, awalData = 3
$awalData = ( $jumlahDataPerHalaman * $halamanAktif ) - $jumlahDataPerHalaman;

$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerHalaman");


// tombol cari ditekan 
if( isset($_POST["cari"]) ) {
    $mahasiswa = cari($_POST["keyword"]);

   
    
}

// ambil data dari tabel mahasiswa / query data mahasiswa
// $result = mysqli_query($db, "SELECT * FROM mahasiswa");

// ambil data (fetch) mahasiswa dari object result
// mysqli_fetch_row() // mengembalikan array numerik
// mysqli_fetch_assoc() // mengembalikan array associative
// mysqli_fetch_array() // mengembalikan keduanya
// mysqli_fetch_object() // 

// while( $mhs = mysqli_fetch_assoc($result) ) {
// var_dump($mhs); 
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>
<a href="logout.php">Logout</a>
<a href="tambah.php">Tambah data mahasiswa</a>
<br><br>

<form action="" method="post">

    <input type="text" name="keyword" size="40" 
    autofocus placeholder="masukkan keyword pencarian.."
    autocomplete="off" id="keyword">
    <button type="submit" name="cari" id="tombol-cari">Cari!</button>
    <a href="index.php"><button type="submit" name="clear">Clear</button></a>
</form>

<br>
<!-- navigasi -->

<?php if( $halamanAktif > 1 ) : ?>
    <a href="?halaman=<?= $halamanAktif - 1 ?>">&laquo;</a>
<?php endif; ?>

<?php for ( $i = 1; $i <= $jumlahHalaman; $i++ ) : ?>
    <?php if( $i == $halamanAktif ) : ?>
        <a href="?halaman=<?= $i; ?>"style ="font-weight: bold; color: red;
        "><?= $i ?></a>
    <?php else : ?> 
        <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
    <?php endif; ?>
    <?php endfor; ?>

<?php if( $halamanAktif < $jumlahHalaman ) : ?>
    <a href="?halaman=<?= $halamanAktif + 1 ?>">&raquo;</a>
<?php endif; ?>


<br>
<div id="container">
<table border="1" cellpadding="10" cellspacing="0">
<tr>
    <th>No.</th>
    <th>Aksi</th>
    <th>Gambar</th>
    <th>NRP</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Jurusan</th>
</tr>

<tr>
    <?php $i = 1; ?>
    <?php foreach( $mahasiswa as $row ) : ?>
    <tr>
        <td><center><?= $i; ?></center></td>
    <td>
        <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
        <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
    </td>
    <td><img src="img/<?= $row["gambar"]; ?>" alt="" width="50" height="50"></td>
    <td><?= $row["nrp"]; ?></td>
    <td><?= $row["nama"]; ?></td>
    <td><?= $row["email"]; ?></td>
    <td><?= $row["jurusan"]; ?></td>
</tr>
<?php $i++ ?>
<?php endforeach; ?>

</table>
</div>

<script src="js/script.js"></script>

</body>
</html>