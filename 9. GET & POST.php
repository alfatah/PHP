<!-- <?php
// Variable Scope / lingkup variable
$x = 10;

function tampilx() {
    // $x = 20;
    global $x;
    echo $x;
}

tampilx();
echo "<br>";
echo $x;

?> -->

<!-- <?php
// Superglobals
// variable global milik php
// merupakan array associative
var_dump($_GET);
echo "<br>";
var_dump($_SERVER);
echo "<br>";
echo $_SERVER["SERVER_NAME"];

?> -->

<?php
// $_GET
// $_GET["nama"] = "Sholahuddin Alfatah";
// $_GET["nrp"] =  "0000007";
// var_dump($_GET);

// megirim data dengan variable get
// http://localhost/Latihan/9.%20GET%20&%20POST.php?nama=Sholahuddin%20Alfatah&nrp=0000007
?>

<?php
$mahasiswa = [
    [
        "nama" => "Sholahuddin Alfatah", 
        "nrp" => "0000007",
        "jurusan" => "Teknik Komputer Jaringan",
        "email" => "alfatah1505@gmail.com",
        "gambar" => "../Latihan/img/alfatah.jpeg"
    ],
    [
        "nama" => "Wahyoe", 
        "nrp" => "0000008",
        "jurusan" => "Teknik Komputer Jaringan",
        "email" => "Wahyoe@gmail.com",
        "gambar" => "../Latihan/img/wahyoe.png"
    ]
]; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>
<a href="9.%20GET%20&%20POST2.php?nama=
<?= $mhs["nama"]; ?>
&nrp=<?= $mhs["nrp"]; ?>
&email=<?= $mhs["email"]; ?>
&jurusan=<?= $mhs["jurusan"]; ?>
&gambar=<?= $mhs["gambar"]; ?>
">
<?= $mhs["nama"]; ?>
</a>
</li>
    </ul>
    <?php endforeach; ?> 
</body>
</html> 

