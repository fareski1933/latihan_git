<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "buku_tamu";

$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Proses input data jika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat']; 

    // Menyimpan data ke tabel
    $sql = "INSERT INTO tabel_tamu (nama, email, alamat) VALUES ('$nama', '$email', '$alamat')";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data berhasil disimpan!');</script>";
    } else {
        echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
    }
}

// Mengambil data dari tabel
$sql = "SELECT * FROM tabel_tamu";
$result = $conn->query($sql);
?>