<?php
// Pastikan menggunakan koneksi database yang aman
include 'koneksi.php';

// Periksa apakah form telah dikirim
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form dan sanitasi
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirmpassword = trim($_POST['confirmpassword']);

    // Periksa apakah password dan konfirmasi password cocok
    if ($password !== $confirmpassword) {
        die('Error: Password dan konfirmasi password tidak cocok.');
    }

    // Hash password untuk keamanan
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // SQL untuk menyimpan data pengguna baru
    $sql = "INSERT INTO pengguna (username_pengguna, email, password) VALUES (?, ?, ?)";

    // Menggunakan prepared statements untuk mencegah SQL Injection
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("sss", $username, $email, $hashed_password); // Bind parameter
        $stmt->execute(); // Eksekusi pernyataan
        if ($stmt->affected_rows > 0) {
            header("Location: daftarberhasil.php");
        } else {
            echo "Pendaftaran gagal.";
        }
        $stmt->close(); // Tutup statement
    } else {
        die('Error: Tidak dapat menyiapkan pernyataan.');
    }

    $conn->close(); // Tutup koneksi
} else {
    die('Invalid request method.');
}
?>
