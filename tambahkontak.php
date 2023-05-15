<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $nama = $_POST["nama"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $email = $_POST["email"];
    $alamat = $_POST["alamat"];
    $kota = $_POST["kota"];
    $pesan = $_POST["pesan"];

    // Validasi data (opsional)
    // ...

    // Menambahkan kontak ke daftar kontak
    $kontak = array(
        "nama" => $nama,
        "jenis_kelamin" => $jenis_kelamin,
        "email" => $email,
        "alamat" => $alamat,
        "kota" => $kota,
        "pesan" => $pesan
    );

    // Menyimpan kontak ke file (opsional, bisa menggunakan database atau cara lainnya)
    // ...

    // Mengarahkan pengguna ke halaman lain setelah menambahkan kontak
    header("Location: sukses.php");
    exit();
}
?>
