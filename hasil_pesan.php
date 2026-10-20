
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"] ?? "";
    $kelas = $_POST["kelas"] ?? "";
    $pesan = $_POST["pesan"] ?? "";
    $kesan = $_POST["kesan"] ?? "";
} else {
    header("Location: form_pesan.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pesan dan Kesan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <h2>Terima Kasih atas Kesan dan Pesannya</h2>
        <h3>Sampai jumpa lagii...</h3>

        <div class="detail-item">
            Nama: <?php echo htmlspecialchars($nama); ?>
        </div>

        <div class="detail-item">
            Kelas: <?php echo htmlspecialchars($kelas); ?>
        </div>

        <div class="detail-item">
            Pesan: <?php echo htmlspecialchars($pesan); ?>
        </div>

        <div class="detail-item">
            Kesan: <?php echo htmlspecialchars($kesan); ?>
        </div>

        <a href="index.php" class="btn-kembali">Balik ke Home</a>
    </div>

</body>
</html>
