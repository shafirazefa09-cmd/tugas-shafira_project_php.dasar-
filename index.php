<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa PSTI 2025</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<?php
include "data.php";

echo "<h2>Data Mahasiswa PSTI</h2>";

echo "<table border='1' cellpadding='8'>";

// Judul kolom tabel

echo "<tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Jurusan</th>
        <th>Nilai</th>
        <th>Predikat</th>
        <th>Status</th>
        <th>Detail</th>
      </tr>";

$no = 1;

// Menampilkan data mahasiswa satu per satu

foreach ($mahasiswa as $mhs) {

    $nilai = $mhs["nilai"];

    // Menentukan predikat 
    if ($nilai >= 80) {
        $predikat = "A";
    } elseif ($nilai >= 70) {
        $predikat = "B";
    } elseif ($nilai >= 60) {
        $predikat = "C";
    } else {
        $predikat = "D";
    }

    // Menentukan status kelulusan

    if ($nilai >= 70) {
        $status = "Lulus";
    } else {
        $status = "Tidak Lulus";
    }

    // Menampilkan isi setiap baris

    echo "<tr>";
    echo "<td>" . $no . "</td>";
    echo "<td>" . $mhs["nim"] . "</td>";
    echo "<td>" . $mhs["nama"] . "</td>";
    echo "<td>" . $mhs["jurusan"] . "</td>";
    echo "<td>" . $nilai . "</td>";
    echo "<td>" . $predikat . "</td>";
    echo "<td>" . $status . "</td>";

    // Tautan menuju halaman detail dengan data GET

echo "<td><a href='detail.php?nim=" . urlencode($mhs["nim"]) .
     "&nama=" . urlencode($mhs["nama"]) .
     "&jurusan=" . urlencode($mhs["jurusan"]) .
     "&email=" . urlencode($mhs["email"]) .
     "&nilai=" . urlencode($nilai) .
     "&predikat=" . urlencode($predikat) .
     "&status=" . urlencode($status) . "'>Detail</a></td>";

echo "</tr>";

$no++;
}

echo "</table>";
?>