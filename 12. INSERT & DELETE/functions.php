<?php
// koneksi ke database
$db = mysqli_connect("localhost", "root", "", "phpdasar");

function query ($query) {
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $db;
        // ambil data dari tiap elemen dalam form
        $nrp = htmlspecialchars($data["nrp"]);
        $nama = htmlspecialchars($data["nama"]);
        $email = htmlspecialchars($data["email"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        $gambar = htmlspecialchars($data["gambar"]);

 // query insert data
 $query = "INSERT INTO mahasiswa
 VALUES
 ('', '$nrp', '$nama', '$email', '$jurusan', '$gambar')";

 mysqli_query($db, "$query");

 return mysqli_affected_rows($db);


} 


function hapus($id) {
    global $db;
    mysqli_query($db, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($db);
     
}


?>


<!-- scrpit hacker 
fungsi htmlspecialchars untuk tidak bisa menginput html 
<div style=position:absolute;top:0;bottom:0;left:0;right:0;bac
kground-color: black; font-size:100px; color:red; text-align:cente r;>HAHAHAH ANDA TELAH DI HACK!!!!</div> -->