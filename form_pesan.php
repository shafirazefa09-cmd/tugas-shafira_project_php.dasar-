
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Pesan dan Kesan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h2>Form Pesan dan Kesan</h2>

    <form action="hasil_pesan.php" method="POST">
        <label>Nama:</label><br>
        <input type="text" name="nama" required>
        <br><br>

        <label>Kelas:</label><br>
        <input type="text" name="kelas" required>
        <br><br>

        <label>Pesan:</label><br>
        <textarea name="pesan" required></textarea>
        <br><br>

        <label>Kesan:</label><br>
        <textarea name="kesan" required></textarea>
        <br><br>

        <button type="submit"> kirim </button>
    </form>

    <br>
    <a href="index.php">Kembali ke Data Mahasiswa</a>

</body>
</html>
