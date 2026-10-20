<head>
    <meta charset="UTF-8">
    <title>Halaman PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<?php
include "data.php";

// Mengambil NIM dari URL

if (
    isset(
        $_GET["nim"],
        $_GET["nama"],
        $_GET["jurusan"],
        $_GET["email"],
        $_GET["nilai"],
        $_GET["predikat"],
        $_GET["status"]
    )
) {
    $nim = $_GET["nim"];
} else {
    header("Location: index.php");
    exit;
}

// Mencari mahasiswa berdasarkan NIM

foreach ($mahasiswa as $mhs) {
    if ($mhs["nim"] == $nim) {
        $dataDitemukan = $mhs;
        break;
    }
}

if (isset($dataDitemukan)) {
    $nilai = $dataDitemukan["nilai"];

    if ($nilai >= 80) {
        $predikat = "A";
    } elseif ($nilai >= 70) {
        $predikat = "B";
    } elseif ($nilai >= 60) {
        $predikat = "C";
    } else {
        $predikat = "D";
    }

    if ($nilai >= 70) {
        $status = "Lulus";
    } else {
        $status = "Tidak Lulus";
    }

    
echo '<div class="container">';

echo '<h2>Detail Mahasiswa</h2>';

echo '<div class="detail-item">NIM: ' . $dataDitemukan["nim"] . '</div>';
echo '<div class="detail-item">Nama: ' . $dataDitemukan["nama"] . '</div>';
echo '<div class="detail-item">Jurusan: ' . $dataDitemukan["jurusan"] . '</div>';
echo '<div class="detail-item">Email: ' . $dataDitemukan["email"] . '</div>';
echo '<div class="detail-item">Nilai: ' . $nilai . '</div>';
echo '<div class="detail-item">Predikat: ' . $predikat . '</div>';
echo '<div class="detail-item">Status: ' . $status . '</div>';

echo '<a href="index.php" class="btn-kembali">Kembali</a>';

echo '</div>';

} // Penutup if (isset($dataDitemukan))
?>

</body>
</html>
