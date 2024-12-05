<?php
// Koneksi ke database
$servername = "localhost";
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$dbname = "kontak_db";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL untuk membuat tabel jika belum ada
$sql = "CREATE TABLE IF NOT EXISTS pesan_kontak (
    id INT(11) NOT NULL AUTO_INCREMENT,
    nama VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    no_telp VARCHAR(20) NOT NULL,
    pesan TEXT NOT NULL,
    tanggal TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci";

// Menjalankan query untuk membuat tabel
if ($conn->query($sql) !== TRUE) {
    die("Error creating table: " . $conn->error);
}

// Cek apakah form telah di-submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form dan sanitasi
    $nama = $conn->real_escape_string($_POST['nama']);
    $email = $conn->real_escape_string($_POST['email']);
    $no_telp = $conn->real_escape_string($_POST['no_telp']);
    $pesan = $conn->real_escape_string($_POST['pesan']);

    // Siapkan query untuk memasukkan data menggunakan prepared statement
    $stmt = $conn->prepare("INSERT INTO pesan_kontak (nama, email, no_telp, pesan) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nama, $email, $no_telp, $pesan);

    // Eksekusi query
    if ($stmt->execute()) {
        // Redirect kembali ke halaman formulir dengan status success
        header("Location: index.php?status=success");
    } else {
        // Redirect kembali dengan status error jika gagal
        header("Location: index.php?status=error");
    }

    // Tutup statement
    $stmt->close();
}

// Tutup koneksi
$conn->close();
?>
