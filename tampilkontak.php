<!DOCTYPE html>
<html>
<head>
    <title>Form Kontak</title>
</head>
<body>
    <h1>Form Kontak</h1>

    <form method="post" action="tampilkontak.php">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required>
        <br><br>
        
        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <select name="jenis_kelamin" id="jenis_kelamin" required>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        <br><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <br><br>
        
        <label for="alamat">Alamat:</label>
        <textarea name="alamat" id="alamat" required></textarea>
        <br><br>
        
        <label for="kota">Kota:</label>
        <input type="text" name="kota" id="kota" required>
        <br><br>
        
        <label for="pesan">Pesan:</label>
        <textarea name="pesan" id="pesan" required></textarea>
        <br><br>
        
        <input type="submit" value="Kirim">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil data dari form
        $nama = $_POST["nama"];
        $jenis_kelamin = $_POST["jenis_kelamin"];
        $email = $_POST["email"];
        $alamat = $_POST["alamat"];
        $kota = $_POST["kota"];
        $pesan = $_POST["pesan"];

        // Menampilkan data yang dikirim
        echo "<h2>Data Kontak:</h2>";
        echo "<p>Nama: " . $nama . "</p>";
        echo "<p>Jenis Kelamin: " . $jenis_kelamin . "</p>";
        echo "<p>Email: " . $email . "</p>";
        echo "<p>Alamat: " . $alamat . "</p>";
        echo "<p>Kota: " . $kota . "</p>";
        echo "<p>Pesan: " . $pesan . "</p>";
    }
    ?>
</body>
</html>
