<?php
// Mulai sesi
session_start();

// Sertakan file koneksi
include 'koneksi.php';

if (isset($_SESSION['email'])) {
    // Jika pengguna telah login, dapatkan email pengguna dari sesi
    $email_pengguna = $_SESSION['email'];

    // Query untuk mendapatkan informasi pengguna berdasarkan email
    $query = "SELECT id_pengguna, username_pengguna FROM pengguna WHERE email = '$email_pengguna'";

    // Eksekusi query
    $result = mysqli_query($conn, $query);

    // Periksa apakah query mengembalikan hasil
    if ($result && mysqli_num_rows($result) > 0) {
        // Ambil data pengguna dari hasil query
        $row = mysqli_fetch_assoc($result);
        $id_pengguna = $row['id_pengguna'];
        $nama_pengguna = $row['username_pengguna'];

        // Simpan ID pengguna dan nama pengguna dalam sesi
        $_SESSION['id_pengguna'] = $id_pengguna;
        $_SESSION['nama_pengguna'] = $nama_pengguna;
    } else {
        // Jika query tidak mengembalikan hasil, beri nilai default pada ID pengguna dan nama pengguna
        $id_pengguna = 0; // Atau nilai default lainnya
        $nama_pengguna = "Nama Pengguna";
    }
} else {
    // Jika pengguna belum login, beri nilai default pada ID pengguna dan nama pengguna
    $id_pengguna = 0; // Atau nilai default lainnya
    $nama_pengguna = "Nama Pengguna";
}
?>
