<!DOCTYPE html>
<html>
<head>
    <title>Kontak Ditambahkan</title>
</head>
<body>
    <h1>Kontak Ditambahkan</h1>

    <p>Kontak berhasil ditambahkan. Terima kasih atas partisipasinya!</p>

    <h2>Detail Kontak:</h2>
    <p>Nama: <?php echo $_POST["nama"]; ?></p>
    <p>Jenis Kelamin: <?php echo $_POST["jenis_kelamin"]; ?></p>
    <p>Email: <?php echo $_POST["email"]; ?></p>
    <p>Alamat: <?php echo $_POST["alamat"]; ?></p>
    <p>Kota: <?php echo $_POST["kota"]; ?></p>
    <p>Pesan: <?php echo $_POST["pesan"]; ?></p>
</body>
</html>
